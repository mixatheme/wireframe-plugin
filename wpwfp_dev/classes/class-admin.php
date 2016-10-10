<?php
/**
 * Admin is a WP Wireframe Suite class packaged with WPWFP.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    MixaTheme, Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme
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
if ( ! class_exists( 'MixaTheme\WPWFP\Admin' ) ) :
	/**
	 * Admin class for loading Admin menu pages.
	 *
	 * @since 0.0.1 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Admin {
		/**
		 * Top-level Menu pages.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    array $_menu_pages
		 */
		private $_menu_pages = array();

		/**
		 * Submenu pages.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    array $_submenu_pages
		 */
		private $_submenu_pages = array();

		/**
		 * Hooks object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object $_hooks
		 */
		private $_hooks;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.0.1 WPWFP
		 * @param array  $config Required array of config variables.
		 * @param object $hooks  Optionally DI action & filter hooks.
		 */
		public function __construct( $config, $hooks = null ) {

			// Config vars.
			$this->_menu_pages    = $config['menu_pages'];
			$this->_submenu_pages = $config['submenu_pages'];
			$this->_hooks         = $hooks;

			// Init any hooks you declared in your object config files.
			if ( $this->_hooks ) {
				$this->_hooks->get_actions( $this );
			}
		}

		/**
		 * Add a top-level menu page.
		 *
		 * This function takes a capability which will be used to determine
		 * whether or not a page is included in the menu. The function which
		 * is hooked in to handle the output of the page must check that the
		 * user has the required capability as well.
		 *
		 * @since 0.0.1 WPWFP
		 */
		public function menu_pages() {
			if ( $this->_menu_pages ) {
				foreach ( $this->_menu_pages as $key => $value ) {
					add_menu_page(
						$value['page_title'],
						$value['menu_title'],
						$value['capability'],
						$value['menu_slug'],
						$value['callback'],
						$value['icon_url'],
						$value['position']
					);
				}
			}
		}

		/**
		 * Add a submenu page.
		 *
		 * This function takes a capability which will be used to determine
		 * whether or not a page is included in the menu. The function which
		 * is hooked in to handle the output of the page must check that the
		 * user has the required capability as well.
		 *
		 * @since 0.0.1 WPWFP
		 */
		public function submenu_pages() {
			if ( $this->_submenu_pages ) {
				foreach ( $this->_submenu_pages as $key => $value ) {
					add_submenu_page(
						$value['parent_slug'],
						$value['page_title'],
						$value['menu_title'],
						$value['capability'],
						$value['menu_slug'],
						$value['callback']
					);
				}
			}
		}

	} // Admin class.

endif; // Thanks for using MixaTheme products!
