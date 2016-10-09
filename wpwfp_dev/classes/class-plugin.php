<?php
/**
 * Plugin base class for WPWFP.
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
if ( ! class_exists( 'MixaTheme\WPWFP\Plugin' ) ) :
	/**
	 * Plugin is a WordPress class for DI plugin objects.
	 *
	 * @since 0.0.1 WPWFP
	 * @see   object Theme
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Plugin {
		/**
		 * CPT object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object $_cpt
		 */
		private $_cpt;

		/**
		 * Admin object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object $_admin
		 */
		private $_admin;

		/**
		 * Enqueue object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object $_enqueue
		 */
		private $_enqueue;

		/**
		 * Shortcode object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object $_shortcode
		 */
		private $_shortcode;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.0.1 WPWFP
		 * @param object $cpt       Object for CPT.
		 * @param object $admin     Object for admin screens.
		 * @param object $enqueue   Object for styles & scripts.
		 * @param object $shortcode Object for shortcodes.
		 */
		public function __construct( CPT $cpt = null, Admin $admin = null, Enqueue $enqueue = null, Shortcode $shortcode = null ) {

			// Config variables.
			$this->_cpt       = $cpt;
			$this->_admin     = $admin;
			$this->_enqueue   = $enqueue;
			$this->_shortcode = $shortcode;
		}

		/**
		 * Get cpt.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @return array
		 */
		private function _cpt() {
			if ( $this->_cpt ) {
				return $this->_cpt;
			}
		}

		/**
		 * Get admin.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @return array
		 */
		private function _admin() {
			if ( $this->_admin ) {
				return $this->_admin;
			}
		}

		/**
		 * Get Enqueue.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @return array
		 */
		private function _enqueue() {
			if ( $this->_enqueue ) {
				return $this->_enqueue;
			}
		}

		/**
		 * Get Shortcode.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @return array
		 */
		private function _shortcode() {
			if ( $this->_shortcode ) {
				return $this->_shortcode;
			}
		}

	} // Plugin class.

endif; // Thanks for using MixaTheme products!
