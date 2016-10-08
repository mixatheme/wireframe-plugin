<?php
/**
 * Plugin Name: WP Wireframe Plugin
 * Plugin URI:  https://github.com/mixatheme/Wireframe
 * Description: WP Wireframe Plugin (WPWFP) is an OOP boilerplate starter plugin for WordPress. WPWFP enables WordPress Developers to rapidly wire plugin features and release GPL and WPCS compliant plugins for professional client projects or for selling premium plugins in any marketplace. WPWFP can be forked as a standalone repo or as a submodule packaged with the Wireframe Suite for WordPress by MixaTheme.
 * Version:     1.0.0
 * Text Domain: wpwfp
 * Domain Path: /languages
 * Author:      MixaTheme, Tada Burke
 * Author URI:  https://mixatheme.com
 * License:     GPLv2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package   WPWFP
 * @copyright 2016 MixaTheme.
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 0.0.1 WPWFP
 */
use MixaTheme\WPWFP\Container;
use MixaTheme\WPWFP\Plugin;
use MixaTheme\WPWFP\Hooks;
use MixaTheme\WPWFP\Admin;
use MixaTheme\WPWFP\Enqueue;

/**
 * No direct access to this file.
 *
 * @since 0.0.1 WPWFP
 */
defined( 'ABSPATH' ) or die();

/**
 * Plugin version.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_VERS', '1.0.0' );

/**
 * Plugin product.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_PRODUCT', 'WP Wireframe Plugin' );

/**
 * Your `textdomain` slug for this package is used in various prefixes and
 * language translation strings. Generally, this is all one-word, lowercase.
 * If you need to separate words, using underscores vs dashes is recommended.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_TEXTDOMAIN',	'wpwfp' );

/**
 * Plugin path.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin URI.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_URI', plugin_dir_url( __FILE__ ) );

/**
 * Plugin development folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_DEV', WPWFP_DIR . 'wpwfp_dev/' );

/**
 * Plugin include folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_INC', WPWFP_DIR . 'wpwfp_dev/inc/' );

/**
 * Plugin library folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_LIB', WPWFP_URI . 'wpwfp_dev/lib/' );

/**
 * Plugin templates folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_TPL', WPWFP_DIR . 'wpwfp_dev/templates/' );

/**
 * Plugin CSS folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_CSS', WPWFP_URI . 'wpwfp_client/css/' );

/**
 * Plugin images folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_IMG', WPWFP_URI . 'wpwfp_client/images/' );

/**
 * Plugin JavaScript folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_JS', WPWFP_URI . 'wpwfp_client/js/' );

/**
 * Plugin language folder.
 *
 * @since 0.0.1 WPWFP
 */
define( 'WPWFP_LANG', WPWFP_DIR . 'wpwfp_client/lang/' );

/**
 * Autoloader.
 * =============================================================================
 *
 * Autoload class dependencies via Composer's `composer.json` file. If you add
 * new class files, you must re-compile `composer.json`. Alternatively, you can
 * use `require_once()` to load your class dependencies.
 *
 * @since 0.0.1 WPWFP_Theme
 * @since 1.1.2 Composer
 * @see   composer.json
 * @see   https://getcomposer.org
 *
 * @internal CLI: composer update
 * @internal CLI: composer dump-autoload -o
 * @internal WPCS expects a lowercase filename (PSR-2, PSR-4 invalid).
 */
require_once WPWFP_DIR . 'wpwfp_dev/vendor/autoload.php';

/**
 * Helpers.
 * =============================================================================
 *
 * Loads helper functions and callbacks. Once you get the hang of
 * WPWFP, these files can probably be merged.
 *
 * @since 0.0.1 WPWFP
 */
require_once WPWFP_DIR . 'wpwfp_dev/helpers/helpers-functions.php';
require_once WPWFP_DIR . 'wpwfp_dev/helpers/helpers-views.php';

/**
 * Configs.
 * =============================================================================
 *
 * Loads configuration variables for objects. Once you get the hang of
 * WPWFP, these files can probably be merged if desired.
 *
 * @since 0.0.1 WPWFP
 */
require_once WPWFP_DIR . 'wpwfp_dev/config/config-admin.php';
require_once WPWFP_DIR . 'wpwfp_dev/config/config-enqueue.php';

/**
 * Container.
 * =========================================================================
 *
 * Wireframe implements a container for the base plugin object.
 *
 * @since 0.0.1 WPWFP
 * @see   object   Container
 * @var   callable $wpwfp_container
 */
$wpwfp_container = new Container();

/**
 * Wireframe.
 * =========================================================================
 *
 * Registers a custom `plugin` container and wires everything together.
 *
 * @since  0.0.1 WPWFP
 * @see    wpwfp_config_admin()   Config vars. Can be closure or callable.
 * @see    wpwfp_config_enqueue() Config vars. Can be closure or callable.
 * @return object Plugin          Instantiate Plugin obj and deps.
 */
$wpwfp_container->plugin = function () {
	/**
	 * Instantiates plugin object with dependency objects passed in. This is a
	 * fun example showcasing OOP with DI and reusable configuration functions
	 * passed through objects.
	 *
	 * @since 0.0.1 WPWFP
	 * @param object Admin
	 * @param object Hooks
	 * @param object Enqueue
	 */
	return new Plugin(
		new Admin( wpwfp_config_admin(), new Hooks( wpwfp_config_admin() ) ),
		new Enqueue( wpwfp_config_enqueue() )
	);
};

/**
 * Init.
 * =========================================================================
 *
 * WPWFP is alive!
 *
 * @since 0.0.1 WPWFP
 * @var   object $wpwfp Instance of Plugin.
 */
$wpwfp = $wpwfp_container->plugin;

/**
 * Housekeeping.
 * =========================================================================
 *
 * Checks if plugin is properly initialized.
 *
 * @since 0.0.1 WPWFP
 */
if ( ! $wpwfp ) {
	wp_die( 'WPWFP could not initialize. Please verify configuration.' );
}
