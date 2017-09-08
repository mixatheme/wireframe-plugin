<?php
/**
 * Plugin Name: Wireframe Plugin
 * Plugin URI:  https://github.com/mixatheme/wireframe-plugin
 * Description: Wireframe Plugin is an OOP WordPress plugin boilerplate. Wireframe Plugin enables WordPress Developers to rapidly wire GPL and WordPress Coding Standards compliant plugins for professional client projects or for selling premium plugins in any marketplace. Wireframe Plugin is part of the Wireframe Suite for WordPress by MixaTheme.
 * Version:     0.1.0
 * Text Domain: wireframe-plugin
 * Domain Path: /languages
 * Author:      MixaTheme, Tada Burke
 * Author URI:  https://mixatheme.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package   Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @see       https://github.com/mixatheme/Wireframe
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Constants.
 * =============================================================================
 *
 * Loads constants available to your plugin.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
require_once plugin_dir_path( __FILE__ ) . 'wireframe_cfg/cfg-constants.php';

/**
 * Compatibility: Checker.
 * =============================================================================
 *
 * If WordPress version is incompatible, load backwards compatibility helpers;
 * else continue bootstrapping Wireframe.
 *
 * Note: Whenever WordPress releases a new update, we will always sync this
 * file on GitHub to reflect the latest WordPress version ;-)
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 * @see   callable wireframe_plugin_hook_language_loader()  The callback for language loader.
 * @see   callable wireframe_plugin_hook_update_wordpress() The callback for update notice.
 * @todo  Possibly move `do_action` to functions-compat.php?
 */
if ( version_compare( $GLOBALS['wp_version'], WIREFRAME_PLUGIN_WP, '<' ) ) {

	// Incompatible WP: Load backwards compatibility handlers.
	require_once WIREFRAME_PLUGIN_FUNC . 'compat.php';

	// Incompatible WP: Call language translation hook.
	do_action( 'wireframe_plugin_hook_language_loader', WIREFRAME_PLUGIN_TEXTDOMAIN, false, '/wireframe_usr/lang' );

	// Incompatible WP: Call update notice hook.
	do_action( 'wireframe_plugin_hook_update_wordpress', WIREFRAME_PLUGIN_PRODUCT, WIREFRAME_PLUGIN_WP );

} else {

	/**
	 * Bootstrap Wireframe.
	 *
	 * Option #1: Hook Wireframe late so you can access any `pluggable functions` you need.
	 *
	 * Option #2: If your plugin is merely presentational (front-end), you can alternatively
	 * 			  hook even later with `after_setup_theme` (or similar) if desired.
	 *
	 * Option #3: If you don't need pluggable functions, you can just use require_once().
	 *
	 * Example hook:
	 *
	 * 		add_action( 'plugins_loaded', function() {
	 * 			require_once WIREFRAME_PLUGIN_DEV . 'wireframe.php';
	 * 		} );
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe Plugin
	 * @see   https://codex.wordpress.org/Pluggable_Functions
	 * @see   https://codex.wordpress.org/Plugin_API/Action_Reference/plugins_loaded
	 * @todo  Possibly make the action configurable?
	 */
	require_once WIREFRAME_PLUGIN_DEV . 'wireframe.php';
}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
