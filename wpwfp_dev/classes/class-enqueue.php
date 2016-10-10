<?php
/**
 * Enqueue is a WP Wireframe Suite class packaged with WPWFP.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 WPWFP
 * @copyright 2012-2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 * @see       https://github.com/mixatheme/wp-wireframe-plugin
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
 * @since 1.0.0 WPWFP
 */
namespace MixaTheme\WPWFP;

/**
 * No direct access to this file.
 *
 * @since 1.0.0 WPWFP
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 1.0.0 WPWFP
 */
if ( ! class_exists( 'MixaTheme\WPWFP\Enqueue' ) ) :
	/**
	 * Enqueue class for loading styles & scripts
	 *
	 * @since 1.0.0 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class Enqueue {
		/**
		 * Version.
		 *
		 * @since 1.0.0 WPWFP
		 */
		const VERS = WPWFP_VERS;

		/**
		 * Config.
		 *
		 * @access private
		 * @since  1.0.0 WPWFP
		 * @var    array $_config
		 */
		private $_config = array();

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 WPWFP
		 * @param array  $config Required array of config variables.
		 * @param object $hooks  Optionally DI action & filter hooks.
		 */
		public function __construct( $config, $hooks = null ) {

			// Config variables.
			$this->_config = $config;
			$this->_hooks  = $hooks;

			// Init any hooks declared in in an object config file.
			if ( $this->_hooks ) {
				$this->_hooks->get_actions( $this );
			}
		}

		/**
		 * Enqueue the main style.css stylesheet.
		 *
		 * @since 1.0.0 WPWFP
		 */
		public function stylecss() {
			if ( $this->_config['stylecss'] && $this->_config['prefix'] ) {
				$config = apply_filters( $this->_config['prefix'] . __FUNCTION__, get_stylesheet_uri() );
				wp_enqueue_style( $this->_config['prefix'] . '_style', $config );
			}
		}

		/**
		 * Enqueue the main Comment Reply script.
		 *
		 * @since 1.0.0 WPWFP
		 */
		public function comments() {
			if ( $this->_config['comments'] && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

		/**
		 * Enqueue the Media modal script.
		 *
		 * @since 1.0.0 WPWFP
		 * @todo  Should this be enqueued contextually somehow?
		 */
		public function media() {
			if ( $this->_config['media'] ) {
				wp_enqueue_media();
			}
		}

		/**
		 * Enqueue the custom CSS files passed via functions.php.
		 *
		 * @since 1.0.0 WPWFP
		 * @see   wpwft_version() Optional WP_DEBUG helper.
		 */
		public function styles() {

			// No styles found.
			if ( ! $this->get_styles() ) {
				return;
			}

			// Loop CSS files.
			foreach ( $this->get_styles() as $key => $value ) {

				// Set handle.
				$handle = $this->_config['prefix'] . '_' . $key;

				// Register.
				wp_register_style(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.css',
					$value['deps'],
					self::VERS,
					$value['media']
				);

				// Enqueue.
				wp_enqueue_style( $handle );
			}
		}

		/**
		 * Enqueue the custom JS files passed via functions.php.
		 *
		 * @since 1.0.0 WPWFP
		 * @see   wpwft_version() Optional WP_DEBUG helper.
		 * @see   https://codex.wordpress.org/Function_Reference/wp_localize_script
		 */
		public function scripts() {

			// No scripts found.
			if ( ! $this->get_scripts() ) {
				return;
			}

			// Loop JS files.
			foreach ( $this->get_scripts() as $key => $value ) {
				/**
				 * Set script handle and convert dashes to underscores.
				 *
				 * You must verify all references to this handle in your scripts
				 * use underscores/underlines. Dashes/hyphens are not allowed
				 * because JavaScript objects cannot contain dashes/hyphens.
				 *
				 * @see theme.js
				 */
				$handle = str_replace( '-', '_', $this->_config['prefix'] . '_' . $key );

				// Register.
				wp_register_script(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.js',
					$value['deps'],
					self::VERS,
					$value['footer']
				);

				// Enqueue.
				wp_enqueue_script( $handle );

				// Localize.
				if ( isset( $value['localize'] ) ) {
					$data = $value['localize'];
					wp_localize_script( $handle, $handle, $data );
				}
			}
		}

		/**
		 * Get stylecss style.css.
		 *
		 * @since  1.0.0 WPWFP
		 * @return bool $_stylecss
		 */
		public function get_stylecss() {
			if ( $this->_config['stylecss'] ) {
				$filter = apply_filters( $this->_config['prefix'] . '_enqueue_stylecss', $this->_config['stylecss'] );
				return $filter;
			}
		}

		/**
		 * Get comment-reply script.
		 *
		 * @since  1.0.0 WPWFP
		 * @return bool $_comments
		 */
		public function get_comments() {
			if ( $this->_config['comments'] ) {
				$filter = apply_filters( $this->_config['prefix'] . '_enqueue_comments', $this->_config['comments'] );
				return $filter;
			}
		}

		/**
		 * Get Media.
		 *
		 * @since  1.0.0 WPWFP
		 * @return bool $_media
		 */
		public function get_media() {
			if ( $this->_config['media'] ) {
				$filter = apply_filters( $this->_config['prefix'] . '_enqueue_media', $this->_config['media'] );
				return $filter;
			}
		}

		/**
		 * Get CSS path.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_css_path
		 */
		public function get_css_path() {
			if ( $this->_config['css_path'] ) {
				return $this->_config['css_path'];
			}
		}

		/**
		 * Get JS path.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_css_path
		 */
		public function get_js_path() {
			if ( $this->_config['js_path'] ) {
				return $this->_config['js_path'];
			}
		}

		/**
		 * Get Prefix.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_prefix
		 */
		public function get_prefix() {
			if ( $this->_config['prefix'] ) {
				return $this->_config['prefix'];
			}
		}

		/**
		 * Get Styles.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_styles
		 */
		public function get_styles() {
			if ( $this->_config['styles'] ) {
				return $this->_config['styles'];
			}
		}

		/**
		 * Get Scripts.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_scripts
		 */
		public function get_scripts() {
			if ( $this->_config['scripts'] ) {
				return $this->_config['scripts'];
			}
		}

		/**
		 * Get Localize.
		 *
		 * @since  1.0.0 WPWFP
		 * @return string $_localize
		 */
		public function get_localize() {
			if ( $this->_config['localize'] ) {
				$filter = apply_filters( $this->_config['prefix'] . '_enqueue_localize', $this->_config['localize'] );
				return $filter;
			}
		}
	}

endif; // Thanks for using MixaTheme products!
