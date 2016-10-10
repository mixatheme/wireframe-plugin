<?php
/**
 * Plugin Name: WP Wireframe Plugin
 * Plugin URI:  https://github.com/mixatheme/Wireframe
 * Description: WP Wireframe Plugin (WPWFP) is an OOP boilerplate starter plugin for WordPress. WPWFP enables WordPress Developers to rapidly wire plugin features and release GPL and WPCS compliant plugins for professional client projects or for selling premium plugins in any marketplace. WPWFP can be forked as a standalone repo or as a submodule packaged with the Wireframe Suite for WordPress by MixaTheme.
 * Version:     1.0.0-alpha
 * Text Domain: wp-wireframe-plugin
 * Domain Path: /languages
 * Author:      MixaTheme, Tada Burke
 * Author URI:  https://mixatheme.com
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package   WPWFP
 * @copyright 2016 MixaTheme.
 * @see       https://github.com/mixatheme/Wireframe
 * @see       https://github.com/mixatheme/wp-wireframe-plugin
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 1.0.0 WPWFP
 */
use MixaTheme\WPWFP\Container;
use MixaTheme\WPWFP\Plugin;
use MixaTheme\WPWFP\Hooks;
use MixaTheme\WPWFP\Admin;
use MixaTheme\WPWFP\Enqueue;
use MixaTheme\WPWFP\Module\CPT;
use MixaTheme\WPWFP\Modle\Shortcode;

/**
 * No direct access to this file.
 *
 * @since 1.0.0 WPWFP
 */
defined( 'ABSPATH' ) or die();

/**
 * Plugin version.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_VERS', '1.0.0' );

/**
 * Plugin product.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_PRODUCT', 'WP Wireframe Plugin' );

/**
 * Text-domain (must match slug).
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_TEXTDOMAIN',	'wp-wireframe-plugin' );

/**
 * Plugin path.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin URI.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_URI', plugin_dir_url( __FILE__ ) );

/**
 * Plugin developer folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_DEV', WPWFP_DIR . 'wpwfp_dev/' );

/**
 * Plugin modules folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_INC', WPWFP_DIR . 'wpwfp_dev/modules/' );

/**
 * Plugin templates folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_TPL', WPWFP_DIR . 'wpwfp_client/tpl/' );

/**
 * Plugin CSS folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_CSS', WPWFP_URI . 'wpwfp_client/css/' );

/**
 * Plugin images folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_IMG', WPWFP_URI . 'wpwfp_client/img/' );

/**
 * Plugin JavaScript folder.
 *
 * @since 1.0.0 WPWFP
 */
define( 'WPWFP_JS', WPWFP_URI . 'wpwfp_client/js/' );

/**
 * Plugin language folder.
 *
 * @since 1.0.0 WPWFP
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
 * @since 1.0.0 WPWFP_Theme
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
 * @since 1.0.0 WPWFP
 */
require_once WPWFP_DIR . 'wpwfp_dev/helpers/helpers-functions.php';
require_once WPWFP_DIR . 'wpwfp_dev/helpers/helpers-views.php';

/**
 * Container.
 * =========================================================================
 *
 * Wireframe implements a container for the base plugin object.
 *
 * @since 1.0.0 WPWFP
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
 * @since  1.0.0 WPWFP
 * @see    wpwfp_config_admin()   Config vars. Can be closure or callable.
 * @see    wpwfp_config_enqueue() Config vars. Can be closure or callable.
 * @return object Plugin          Instantiate Plugin obj and deps.
 */
$wpwfp_container->plugin = function () {
	/**
	 * Loads configuration variables for objects. Once you get the hang of
	 * WPWFP, these files can probably be merged if desired.
	 *
	 * @since 1.0.0 WPWFP
	 */
	require_once WPWFP_DIR . 'wpwfp_dev/config/config-cpt.php';
	require_once WPWFP_DIR . 'wpwfp_dev/config/config-admin.php';
	require_once WPWFP_DIR . 'wpwfp_dev/config/config-enqueue.php';
	require_once WPWFP_DIR . 'wpwfp_dev/config/config-shortcode.php';

	/**
	 * Instantiates Plugin object with dependency objects passed in. This is a
	 * fun example showcasing OOP with DI and reusable configuration functions
	 * passed through objects.
	 *
	 * @since 1.0.0 WPWFP
	 * @param object CPT
	 * @param object Amin
	 * @param object Enqueue
	 */
	return new Plugin(
		new CPT(
			wpwfp_config_cpt(),
			new Hooks( wpwfp_config_cpt() )
		),
		new Admin(
			wpwfp_config_admin(),
			new Hooks( wpwfp_config_admin() )
		),
		new Enqueue(
			wpwfp_config_enqueue()
		)
	);
};

/**
 * Init.
 * =========================================================================
 *
 * WPWFP is alive!
 *
 * @since 1.0.0 WPWFP
 * @var   object $wpwfp Instance of Plugin.
 */
$wpwfp = $wpwfp_container->plugin;

/**
 * Housekeeping.
 * =========================================================================
 *
 * Checks if plugin is properly initialized.
 *
 * @since 1.0.0 WPWFP
 */
if ( ! $wpwfp ) {
	wp_die( 'WPWFP could not initialize. Please verify configuration.' );
}
