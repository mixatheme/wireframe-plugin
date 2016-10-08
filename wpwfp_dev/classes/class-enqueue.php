<?php
/**
 * Enqueue dependency class for WPWFP.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 *
 * WPWFP is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * WPWFP is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WPWFP. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 0.0.1 WPWFP
 */
namespace MixaTheme\WPWFP;

/**
 * No direct access to this file.
 *
 * @since 0.0.1 WPWFP
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.0.1 WPWFP
 */
if ( ! class_exists( 'MixaTheme\WPWFP\Enqueue' ) ) :
	/**
	 * Enqueue is a WordPress class for loading styles & scripts.
	 *
	 * @since 0.0.1 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class Enqueue {
		/**
		 * Version.
		 *
		 * @since 0.0.1 WPWFP
		 */
		const VERS = '1.0.0';

		/**
		 * Component type.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    string $_type
		 */
		private $_type = 'base';

		/**
		 * Prefix for enqueue handles.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    string $_prefix
		 */
		private $_prefix = 'wireframe';

		/**
		 * Enqueue media modal.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    bool $_media
		 */
		private $_media = false;

		/**
		 * CSS files to enqueue.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    array $_styles
		 */
		private $_styles = array();

		/**
		 * JS files to enqueue.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    array $_scripts
		 */
		private $_scripts = array();

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.0.1 WPWFP
		 * @param array $config Config array.
		 */
		public function __construct( $config ) {

			// Config variables.
			$this->_prefix  = $config['prefix'];
			$this->_styles  = $config['styles'];
			$this->_scripts = $config['scripts'];
			$this->_media   = $config['media'];
		}

		/**
		 * Enqueue the Media modal script.
		 *
		 * @since 0.0.1 WPWFP
		 * @todo  Should this be enqueued contextually somehow?
		 */
		public function media() {
			if ( $this->_media ) {
				wp_enqueue_media();
			}
		}

		/**
		 * Enqueue the custom CSS files passed via functions.php.
		 *
		 * @since 0.0.1 WPWFP
		 * @see   wireframe_version() Optional WP_DEBUG helper.
		 */
		public function styles() {

			// No styles found.
			if ( ! $this->get_styles() ) {
				return;
			}

			// Loop CSS files.
			foreach ( $this->get_styles() as $key => $value ) :

				// Set handle.
				$handle = $this->_prefix . '_' . $key;

				// Register.
				wp_register_style(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.css',
					$value['deps'],
					wireframe_version( self::VERS ),
					$value['media']
				);

				// Enqueue.
				wp_enqueue_style( $handle );

			endforeach;
		}

		/**
		 * Enqueue the custom JS files passed via functions.php.
		 *
		 * @since 0.0.1 WPWFP
		 * @param array $data The data to localize.
		 * @see   wireframe_version() Optional WP_DEBUG helper.
		 */
		public function scripts( $data = null ) {

			// No scripts found.
			if ( ! $this->get_scripts() ) {
				return;
			}

			// Loop JS files.
			foreach ( $this->get_scripts() as $key => $value ) :
				/**
				 * Set script handle and convert dashes to underscores.
				 *
				 * You must verify all references to this handle in your scripts
				 * use underscores/underlines. Dashes/hyphens are not allowed
				 * because JavaScript objects cannot contain dashes/hyphens.
				 *
				 * @see wpwfp.js
				 */
				$handle = str_replace( '-', '_', $this->_prefix . '_' . $key );

				// Register.
				wp_register_script(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.js',
					$value['deps'],
					wireframe_version( self::VERS ),
					$value['footer']
				);

				// Enqueue.
				wp_enqueue_script( $handle );

				// Localize.
				if ( isset( $value['localize'] ) ) {
					$data = $value['localize'];
					wp_localize_script( $handle, $handle, $data );
				}

			endforeach;
		}

		/**
		 * Get stylecss style.css.
		 *
		 * @since  0.0.1 WPWFP
		 * @return bool $_stylecss
		 */
		public function get_stylecss() {
			if ( $this->_stylecss ) {
				$config = apply_filters( $this->_prefix . '_enqueue_stylecss', $this->_stylecss );
				return $config;
			}
		}

		/**
		 * Get comment-reply script.
		 *
		 * @since  0.0.1 WPWFP
		 * @return bool $_comments
		 */
		public function get_comments() {
			if ( $this->_comments ) {
				$config = apply_filters( $this->_prefix . '_enqueue_comments', $this->_comments );
				return $config;
			}
		}

		/**
		 * Get Media.
		 *
		 * @since  0.0.1 WPWFP
		 * @return bool $_media
		 */
		public function get_media() {
			if ( $this->_media ) {
				$config = apply_filters( $this->_prefix . '_enqueue_media', $this->_media );
				return $config;
			}
		}

		/**
		 * Get CSS path.
		 *
		 * @since  0.0.1 WPWFP
		 * @return string $_css_path
		 */
		public function get_css_path() {
			if ( $this->_css_path ) {
				return $this->_css_path;
			}
		}

		/**
		 * Get JS path.
		 *
		 * @since  0.0.1 WPWFP
		 * @return string $_css_path
		 */
		public function get_js_path() {
			if ( $this->_js_path ) {
				return $this->_js_path;
			}
		}

		/**
		 * Get Prefix.
		 *
		 * @since  0.0.1 WPWFP
		 * @return string $_prefix
		 */
		public function get_prefix() {
			if ( $this->_prefix ) {
				return $this->_prefix;
			}
		}

		/**
		 * Get Styles.
		 *
		 * @since  0.0.1 WPWFP
		 * @return array $_styles
		 */
		public function get_styles() {
			if ( $this->_styles ) {
				return $this->_styles;
			}
		}

		/**
		 * Get Scripts.
		 *
		 * @since  0.0.1 WPWFP
		 * @return array $_scripts
		 */
		public function get_scripts() {
			if ( $this->_scripts ) {
				return $this->_scripts;
			}
		}

		/**
		 * Get Localize.
		 *
		 * @since  0.0.1 WPWFP
		 * @return string $_localize
		 */
		public function get_localize() {
			if ( $this->_localize ) {
				$config = apply_filters( $this->_prefix . '_enqueue_localize', $this->_localize );
				return $config;
			}
		}

	} // Enqueue class.

endif; // Thanks for using MixaTheme products!
