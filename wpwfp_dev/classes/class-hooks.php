<?php
/**
 * Hooks is a WP Wireframe Suite class packaged with WPWFP.
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
if ( ! class_exists( 'MixaTheme\WPWFP\Hooks' ) ) :
	/**
	 * Hooks class for actions & filters.
	 *
	 * @since 0.0.1 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 * @todo  get_filters()
	 */
	final class Hooks {
		/**
		 * Enable or disable hooks.
		 *
		 * @since 0.0.1 WPWFP
		 * @var   array $_actions Default: false.
		 */
		private $_enabled = false;

		/**
		 * Actions to hook.
		 *
		 * @since 0.0.1 WPWFP
		 * @var   array $_actions Requires $enabled = true.
		 */
		private $_actions = array();

		/**
		 * Filters to hook.
		 *
		 * @since 0.0.1 WPWFP
		 * @var   array $_filters Requires $enabled = true.
		 */
		private $_filters = array();

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.0.1 WPWFP
		 * @param array $config Configuration variables.
		 */
		public function __construct( $config ) {

			// Config variables.
			$this->_enabled = $config['enabled'];
			$this->_actions = $config['actions'];
			$this->_filters = $config['filters'];
		}

		/**
		 * Get actions.
		 *
		 * @since 0.0.1 WPWFP
		 * @param object $caller The object calling the hooks.
		 */
		public function get_actions( $caller ) {

			// Check if enabled and has actions.
			if ( $this->_enabled && $this->_actions ) {

				// Loop action to hook.
				foreach ( $this->_actions as $key => $value ) {

					// Default values.
					$value['priority'] = 10;
					$value['args']     = null;

					// Hook.
					add_action(
						$value['tag'],
						array( $caller,$value['function'] ),
						$value['priority'],
						$value['args']
					);
				}
			}
		}

	} // Hooks class.

endif; // Thanks for using MixaTheme products!
