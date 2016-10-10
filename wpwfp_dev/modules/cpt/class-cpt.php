<?php
/**
 * CPT is a WP Wireframe Suite module packaged with WPWFP.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 WPWFP
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
 * This is an optional WPWFP `Module` class and uses a different namespace scope.
 * Therefore, you must declare namespace aliases for any dependency object you
 * need for your modules. Example: `use MixaTheme\WPWFP\Hooks;` will bring the
 * Hooks object into scope and make it available to your class.
 *
 * @since 5.3.0 PHP
 * @since 1.0.0 WPWFP
 */
namespace MixaTheme\WPWFP\Module;
use MixaTheme\WPWFP\Hooks;

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
if ( ! class_exists( 'MixaTheme\WPWFP\CPT' ) ) :
	/**
	 * CPT is a WordPress class for Custom Post Types.
	 *
	 * @since 1.0.0 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class CPT {
		/**
		 * Config.
		 *
		 * @access private
		 * @since  1.0.0 WPWFP
		 * @var    array $_config
		 */
		private $_config;

		/**
		 * Hooks object.
		 *
		 * @access private
		 * @since  1.0.0 WPWFP
		 * @var    object Hooks
		 */
		private $_hooks;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 WPWFP
		 * @param array  $config Required array of config variables.
		 * @param object $hooks  Optionally DI action & filter hooks.
		 */
		public function __construct( $config, $hooks = null ) {

			// Config vars.
			$this->_config = $config;
			$this->_hooks  = $hooks;

			// Init hooks.
			if ( $this->_hooks ) {
				$this->_hooks->get_actions( $this );
			}
		}

		/**
		 * Get CPT.
		 *
		 * @since 1.0.0 WPWFP
		 */
		public function get_cpt() {
			if ( $this->_config['defaults'] ) {
				foreach ( $this->_config['defaults'] as $key => $value ) {
					register_post_type( $key, $value );
				}
			}
		}

	} // CPT class.

endif; // Thanks for using MixaTheme products!
