<?php
/**
 * CPT config file for WPWFT.
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
 * CPT configuration defaults.
 *
 * @since 1.0.0 WPWFP
 */
function wpwfp_config_cpt() {
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
	 * Labels.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $labels
	 */
	$labels = array(
		'example_cpt_1' => array(
			'name'                  => _x( 'WPWFP CPT', 'Post Type General Name', 'wp-wireframe-plugin' ),
			'singular_name'         => _x( 'WPWFP CPT', 'Post Type Singular Name', 'wp-wireframe-plugin' ),
			'menu_name'             => __( 'WPWFP CPT', 'wp-wireframe-plugin' ),
			'name_admin_bar'        => __( 'WPWFP CPT', 'wp-wireframe-plugin' ),
			'archives'              => __( 'Item Archives', 'wp-wireframe-plugin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'wp-wireframe-plugin' ),
			'all_items'             => __( 'All Items', 'wp-wireframe-plugin' ),
			'add_new_item'          => __( 'Add New Item', 'wp-wireframe-plugin' ),
			'add_new'               => __( 'Add New', 'wp-wireframe-plugin' ),
			'new_item'              => __( 'New Item', 'wp-wireframe-plugin' ),
			'edit_item'             => __( 'Edit Item', 'wp-wireframe-plugin' ),
			'update_item'           => __( 'Update Item', 'wp-wireframe-plugin' ),
			'view_item'             => __( 'View Item', 'wp-wireframe-plugin' ),
			'search_items'          => __( 'Search Item', 'wp-wireframe-plugin' ),
			'not_found'             => __( 'Not found', 'wp-wireframe-plugin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wp-wireframe-plugin' ),
			'featured_image'        => __( 'Featured Image', 'wp-wireframe-plugin' ),
			'set_featured_image'    => __( 'Set featured image', 'wp-wireframe-plugin' ),
			'remove_featured_image' => __( 'Remove featured image', 'wp-wireframe-plugin' ),
			'use_featured_image'    => __( 'Use as featured image', 'wp-wireframe-plugin' ),
			'insert_into_item'      => __( 'Insert into item', 'wp-wireframe-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-wireframe-plugin' ),
			'items_list'            => __( 'Items list', 'wp-wireframe-plugin' ),
			'items_list_navigation' => __( 'Items list navigation', 'wp-wireframe-plugin' ),
			'filter_items_list'     => __( 'Filter items list', 'wp-wireframe-plugin' ),
		),
	);

	/**
	 * Defaults.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $defaults Module defaults.
	 */
	 $defaults = array(
		'example_cpt_1' => array(
			'label'               => __( 'WPWFP CPT', 'wp-wireframe-plugin' ),
			'description'         => __( 'WPWFP CPT Description', 'wp-wireframe-plugin' ),
			'labels'              => $labels['example_cpt_1'],
			'supports'            => array(),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 999,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		),
	);

	/**
	 * Actions to hook.
	 *
	 * @since 1.0.0 WPWFP
	 * @var   array $actions Requires $enabled = true.
	 */
	$actions = array(
		'example_cpt_1' => array(
			'tag'      => 'init',
			'function' => 'get_cpt',
			'priority' => 10,
			'args'     => null,
		),
	);

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

} // Thanks for using MixaTheme products!
