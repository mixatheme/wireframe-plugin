<?php
/**
 * Constants config for plugins built with Wireframe Suite for WordPress.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe Plugin
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
 * Namespaces.
 *
 * You should namespace configs to access to your objects.
 *
 * @since 5.3.0 PHP
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * WordPress Version.
 *
 * The minimum version of WordPress compatible with Wireframe Plugin.
 *
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_WP', '4.8.1' );

/**
 * Plugin text-domain.
 *
 * Plugin text-domain (must match slug).
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_TEXTDOMAIN', 'wireframe-plugin' );

/**
 * Plugin product name.
 *
 * Official product name for your plugin. This is used in various headings,
 * titles and menus. Your official product name should be consistent.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_PRODUCT', 'Wireframe Plugin' );

/**
 * Plugin version.
 *
 * Tagged version number for this release. This is used throughout many
 * dependencies, especially when you enqueue your styles & scripts.
 * This can also be used for version checking backwards compatibility.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_VERSION', '0.1.0' );

/**
 * Plugin prefix.
 *
 * A prefix for various strings, handles and helpers. This is primarily used
 * for keeping names short and helps avoid clashes. 3-5 characters preferred.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_PREFIX', 'wireframe_plugin' );

/**
 * Plugin directory.
 *
 * Plugin directory path. Retrieves the absolute path to the directory
 * of the current plugin. Returns an absolute server path, for example:
 * `/srv/www/wp/htdocs/wp-content/plugins/wireframe-plugin/` - not a URI.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_DIR', trailingslashit( WP_PLUGIN_DIR . '/' . WIREFRAME_PLUGIN_TEXTDOMAIN ) );

/**
 * Plugin path to developer files.
 *
 * Absolute path to the `wireframe_dev` directory. This directory is specifically
 * for Developers and contains functions, classes, JS, SCSS, etc.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_DEV', trailingslashit( WIREFRAME_PLUGIN_DIR . 'wireframe_dev' ) );

/**
 * Plugin path to client files.
 *
 * Absolute path to the `wireframe_usr` directory. This directory primarily
 * holds front-end assets, such as: images, fonts, scripts, stylesheets, etc.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_USER', trailingslashit( 'wireframe_usr' ) );

/**
 * Plugin URI for assets, etc.
 *
 * Plugin URI. Retrieve plugin directory URI. Checks for SSL. Returns URI with
 * a trailing slash following the directory address. This is primarily used for
 * loading your plugin assets.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_URI', trailingslashit( plugins_url() . '/' . WIREFRAME_PLUGIN_TEXTDOMAIN ) );

/**
 * Plugin slug to the helper functions.
 *
 * Slug for loading helper functions.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_FUNC', trailingslashit( WIREFRAME_PLUGIN_DEV . 'functions' ) . 'functions-' );

/**
 * Plugin path to the Wireframe API.
 *
 * Absolute path to the Wireframe API. This directory holds core classes,
 * module classes, helper functions, utilities, config data, etc.
 * NO leading slash. HAS trailing slash.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_API', trailingslashit( WIREFRAME_PLUGIN_DEV . 'wireframe' ) );

/**
 * Wireframe Objects.
 *
 * Absolute path to the Wireframe API for loading class files. This should
 * only be used if you choose to NOT use Composer's autoloading feature.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_OBJECTS', trailingslashit( WIREFRAME_PLUGIN_DIR . '/wireframe_dev/wireframe' ) );

/**
 * Plugin path to template files (optional).
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_TPL', trailingslashit( WIREFRAME_PLUGIN_DIR . WIREFRAME_PLUGIN_USER . 'tpl' ) );

/**
 * Plugin URI for CSS files (optional).
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_CSS', trailingslashit( WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_USER . 'css' ) );

/**
 * Plugin URI for images (optional).
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_IMG', trailingslashit( WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_USER . 'img' ) );

/**
 * Plugin URI for JavaScript files (optional).
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_JS', trailingslashit( WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_USER . 'js' ) );

/**
 * Plugin URI for language files.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe Plugin
 */
define( 'WIREFRAME_PLUGIN_LANG', trailingslashit( WIREFRAME_PLUGIN_TEXTDOMAIN . '/' . WIREFRAME_PLUGIN_USER . 'lang' ) );
