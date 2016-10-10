<?php
/**
 * Container is a WP Wireframe Suite class packaged with WPWFP.
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
if ( ! class_exists( 'MixaTheme\WPWFP\Container' ) ) :
	/**
	 * Container is a PHP class for DI containers & Service Locators.
	 *
	 * Instantiates a new `service` closure. A getter or setter will run
	 * determined by the requested service key.
	 *
	 * @since 1.0.0 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 *
	 * @internal Thanks: Fabien Potencier
	 */
	final class Container {
		/**
		 * Storage array.
		 *
		 * @since 1.0.0 WPWFP
		 * @var   array $storage Array of services.
		 */
		protected $storage = array();

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 WPWFP
		 * @param string   $service  Service key.
		 * @param callable $callback Service instance resolver.
		 */
		public function __set( $service, $callback ) {
			$this->storage[ $service ] = $callback;
		}

		/**
		 * Get service from the Storage array.
		 *
		 * @since  1.0.0 WPWFP
		 * @param  string $service Service key.
		 * @return object $storage Instance closure.
		 */
		public function __get( $service ) {
			return $this->storage[ $service ]();
		}

	} // Container class.

endif; // Thanks for using MixaTheme products!
