<?php
/**
 * Enqueue config file for WPWFT.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme. All rights reserved.
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
 * Config: Enqueue.
 *
 * @since 0.0.1 WPWFP
 */
function wpwfp_config_enqueue() {
	/**
	 * Enqueue: Prefix for handles.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   string $prefix Prefix for handles, etc. Default: WIREFRAMETHEME_TEXTDOMAIN.
	 */
	$prefix = WPWFP_TEXTDOMAIN;

	/**
	 * Enqueue: Load media modal. This is primarily Plugin territory, but
	 * it's only here for completeness. Most likely should remain false.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   bool $media True loads wp_enqueue_media(). Default: false.
	 * @todo  Should we contextually enqueue media modal per config array?
	 */
	$media = false;

	/**
	 * Enqueue: Stylesheets to load.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $styles Array of stylesheets to enqueue.
	 */
	$styles = array();

	/**
	 * Enqueue: Scripts to load.
	 *
	 * @since 0.0.1 WPWFP
	 * @var   array $scripts Array of scripts to enqueue.
	 */
	$scripts = array();

	/**
	 * Returns an array with config values.
	 *
	 * @since  0.0.1 WPWFP
	 * @return array
	 */
	return array(
		'prefix'   => $prefix,
		'styles'   => $styles,
		'scripts'  => $scripts,
		'media'    => $media,
	);
}
