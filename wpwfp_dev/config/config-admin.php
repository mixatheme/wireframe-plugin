<?php
/**
 * Admin config file for WPWFT.
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
 * Config: Admin.
 *
 * @since 0.0.1 WPWFP
 */
function wpwfp_config_admin() {
	/**
	 * Top-level Admin pages.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $menu_pages
	 */
	$menu_pages = array(
		'page1' => array(
			'page_title' => 'WPWFP',
			'menu_title' => 'WPWFP',
			'capability' => 'manage_options',
			'menu_slug'  => sanitize_title( WPWFP_TEXTDOMAIN ),
			'callback'   => 'wpwfp_view_quickstart',
			'icon_url'   => esc_url( '' ),
			'position'   => 9999,
		),
	);

	/**
	 * Submenu Admin pages.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $submenu_pages
	 */
	$submenu_pages = array(
		'page2' => array(
			'parent_slug' => sanitize_title( WPWFP_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 1',
			'menu_title'  => 'Page 2',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( 'page2slug' ),
			'callback'    => 'wpwfp_view_sub2',
		),
		'page3' => array(
			'parent_slug' => sanitize_title( WPWFP_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 2',
			'menu_title'  => 'Page 3',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( 'page3slug' ),
			'callback'    => 'wpwfp_view_sub3',
		),
		'page4' => array(
			'parent_slug' => sanitize_title( WPWFP_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 3',
			'menu_title'  => 'Page 4',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( 'page4slug' ),
			'callback'    => 'wpwfp_view_sub4',
		),
	);

	/**
	 * Enable Hooks.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   bool $hooks Enable or disable hooks.
	 */
	$enable_hooks = true;

	/**
	 * Actions.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $actions Config of actions. Requires $hooks = true.
	 */
	$actions = array(
		'menu_pages' => array(
			'tag'      => 'admin_menu',
			'function' => 'menu_pages',
			'priority' => 10,
			'args'     => 1,
		),
		'submenu_pages' => array(
			'tag'      => 'admin_menu',
			'function' => 'submenu_pages',
			'priority' => 10,
			'args'     => 1,
		),
	);

	/**
	 * Filters.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $filters Config of filters. Requires $hooks = true.
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Returns an array with config values.
	 *
	 * @since  0.0.1 WPWFP
	 * @return array Config to be passed into an object.
	 */
	return array(
		'menu_pages'    => $menu_pages,
		'submenu_pages' => $submenu_pages,
		'enable_hooks'  => $enable_hooks,
		'actions'       => $actions,
		'filters'       => $filters,
	);
}
