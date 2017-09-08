<?php
/**
 * Backwards compatibility functions for Wireframe_Plugin.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
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
 * Wireframe Plugin Compatibility: Language Loader.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 * @see   https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
 * @see   wireframe-plugin.php This function is hooked via do_action().
 * @param string $domain          Unique identifier for retrieving translated strings.
 * @param string $abs_rel_path    Relative path to ABSPATH of a folder, where the .mo file resides.
 * @param string $plugin_rel_path Relative path to WP_PLUGIN_DIR. This is the preferred argument to use.
 */
function wireframe_plugin_language_loader( $domain, $abs_rel_path = false, $plugin_rel_path = false ) {

	// Load plugin language.
	load_plugin_textdomain( $domain, $abs_rel_path, $domain . $plugin_rel_path );

}
add_action( 'wireframe_plugin_hook_language_loader', 'wireframe_plugin_language_loader', 10, 3 );

/**
 * Wireframe Plugin Compatibility: Update WordPress.
 *
 * This function is hooked via `functions.php` file if the version of
 * WordPress is not compatible with this theme. You need to use a helper function
 * because the Module_Notices class is not available yet.
 *
 * Note: This Admin notice does not use `is-dismissible` because the User
 * should deactivate the theme, then update WordPress.
 *
 * Note: This should be hooked via `admin_notices` or immediately with do_action().
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 * @see   wireframe-plugin.php This function is hooked via do_action().
 * @param string $product The name of this product.
 * @param string $compat  The WordPress version compatible with this product.
 */
function wireframe_plugin_update_wordpress( $product, $compat ) {

	// Notice text.
	$notice = sprintf( __( '%1$s requires at least WordPress %2$s. You are running WordPress %3$s. Please upgrade WordPress and re-activate %1$s.', 'wireframe-plugin' ), $product, $compat, $GLOBALS['wp_version'] );

	// Display notice on all Admin screens.
	if ( is_admin() ) {
		printf( __( '<div class="error"><p>%s</p></div>', 'wireframe-plugin' ), $notice ); // XSS ok.
	}

}
add_action( 'wireframe_plugin_hook_update_wordpress', 'wireframe_plugin_update_wordpress', 10, 2 );

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
