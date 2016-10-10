<?php
/**
 * Settings config file for WPWFT.
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
 * Settings configuration defaults.
 *
 * @since 1.0.0 WPWFP
 */
function wpwfp_config_settings() {
	/**
	 * Enable or disable hooks.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   bool $enabled Default: false.
	 */
	$enabled = false;

	/**
	 * Prefix for handles.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   string $prefix Default: WPWFP_TEXTDOMAIN.
	 */
	$prefix = WPWFP_TEXTDOMAIN;

	/**
	 * Defaults.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $defaults Module defaults.
	 */
	$defaults = array();

	/**
	 * Actions to hook.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $actions Requires $enabled = true.
	 */
	$actions = array();

	/**
	 * Filters to hook.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $filters Requires $enabled = true.
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Returns an array with config values.
	 *
	 * @since  1.0.0 WPWFP
	 * @return array Config to be passed into an object.
	 */
	return array(
		'enabled'  => $enabled,
		'prefix'   => $prefix,
		'defaults' => $defaults,
		'actions'  => $actions,
		'filters'  => $filters,
	);
}
