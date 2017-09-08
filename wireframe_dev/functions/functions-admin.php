<?php
/**
 * Views callback functions for Wireframe_Plugin.
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
 * Wireframe Plugin Admin Page: Quickstart tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		} );
 *	} );
 *	</script>
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_quickstart() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Quickstart', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-settings' ); ?>" class="nav-tab"><?php esc_html_e( 'Settings', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-help' ); ?>" class="nav-tab"><?php esc_html_e( 'Help', 'wireframe-child' ); ?></a>

	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Settings tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		});
 *	});
 *	</script>
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_settings() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab"><?php esc_html_e( 'Quickstart', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-settings' ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Settings', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-help' ); ?>" class="nav-tab"><?php esc_html_e( 'Help', 'wireframe-child' ); ?></a>

	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: FAQ tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		});
 *	});
 *	</script>
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_faq() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab"><?php esc_html_e( 'Quickstart', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-settings' ); ?>" class="nav-tab"><?php esc_html_e( 'Settings', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'FAQ', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-help' ); ?>" class="nav-tab"><?php esc_html_e( 'Help', 'wireframe-child' ); ?></a>

	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Help tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		});
 *	});
 *	</script>
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_help() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab"><?php esc_html_e( 'Quickstart', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-settings' ); ?>" class="nav-tab"><?php esc_html_e( 'Settings', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-child' ); ?></a>

		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-help' ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Help', 'wireframe-child' ); ?></a>

	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Badge.
 *
 * This is the badge graphic which appears on the Admin page.
 *
 * Replacing the badge with your own custom graphic:
 *
 * 		1. Locate SVG file in: wireframe-plugin/wireframe_dev/img/wireframe-plugin-badge-white.svg
 * 		2. Open the file in your favorite SVG/Vector application.
 * 		3. Replace artwork with your own graphics or logo.
 * 		4. Export the graphic as a SVG file with the same filename.
 * 		5. Export the graphic as a PNG file with the same filename.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   functions-helpers.php Admin check function.
 * @see   wp-admin/images/wordpress-logo-white.svg
 * @see   wireframe-plugin/wireframe_usr/img/wireframe-plugin-badge-white.svg
 * @see   wireframe-plugin/wireframe_usr/img/wireframe-plugin-badge-white.png
 * @see   wireframe-plugin/wireframe_usr/css/wireframe-plugin-admin.scss
 * @see   wireframe-plugin/wireframe_usr/css/wireframe-plugin-admin-min.css
 */
function wireframe_plugin_admin_page_badge() {
	wireframe_plugin_admin_check();
	?>

	<div class="wireframe-plugin-badge">
		<?php esc_html_e( 'Version', 'wireframe-child' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
	</div>

	<?php
}

/**
 * Wireframe Plugin Admin Page: Header.
 *
 * This is the persistent header on all Admin pages for your plugin.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_header() {
	wireframe_plugin_admin_check();
	?>

	<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>

	<div class="about-text">
		<?php esc_html_e( 'Wireframe Plugin is an OOP WordPress plugin boilerplate. Wireframe Plugin enables WordPress Developers to rapidly wire GPL and WordPress Coding Standards compliant plugins for professional client projects or for selling premium plugins in any marketplace. Wireframe Plugin is part of the Wireframe Suite for WordPress by MixaTheme.', 'wireframe-child' ); ?>
	</div>

	<?php wireframe_plugin_admin_page_badge(); ?>

	<?php
}

/**
 * Wireframe Plugin Admin Page: Quickstart page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_quickstart() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">

		<?php wireframe_plugin_admin_page_header(); ?>

		<?php wireframe_plugin_admin_page_tabs_quickstart(); ?>

		<h3><?php esc_html_e( 'Quickstart Heading', 'wireframe-child' ); ?></h3>

		<p><?php esc_html_e( 'Quickstart content can go here. A Quickstart area for your plugin is good practice because it immediately demonstrates what your plugin can do, while also helping people with getting started easily. An embedded video screencast is always nice, but just a few paragraphs of text/images will suffice. You should help guide people. Do not leave them scratching their heads.', 'wireframe-child' ); ?></p>

	</div>
<?php
}

/**
 * Wireframe Plugin Admin Page: Settings page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_settings() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">

		<?php wireframe_plugin_admin_page_header(); ?>

		<?php wireframe_plugin_admin_page_tabs_settings(); ?>

		<h3><?php esc_html_e( 'Settings Heading', 'wireframe-child' ); ?></h3>

		<p><?php esc_html_e( 'Settings or Options can go here. A Settings area for your plugin is good practice because every plugin should have a way for authorized people to interact with your plugin. Simply having your plugin activate/deactivate is not good enough. Your plugin adds/removes functionality (large or small), therefore people should have a place to control this behavior.', 'wireframe-child' ); ?></p>

	</div>
<?php
}

/**
 * Wireframe Plugin Admin Page: FAQ page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_faq() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">

		<?php wireframe_plugin_admin_page_header(); ?>

		<?php wireframe_plugin_admin_page_tabs_faq(); ?>

		<h3><?php esc_html_e( 'FAQ Heading', 'wireframe-child' ); ?></h3>

		<p><?php esc_html_e( 'Frequently Asked Questions content can go here. A FAQ area for your plugin is good practice because it encourages problem solving before someone needs to contact you for Help/Support. You should list solutions to issues you think most people will ask you.', 'wireframe-child' ); ?></p>

	</div>
<?php
}

/**
 * Wireframe Plugin Admin Page: Help page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_help() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">

		<?php wireframe_plugin_admin_page_header(); ?>

		<?php wireframe_plugin_admin_page_tabs_help(); ?>

		<h3><?php esc_html_e( 'Help Heading', 'wireframe-child' ); ?></h3>

		<p><?php esc_html_e( 'Help content can go here. A Help area for your plugin is good practice because it lets people know you support your plugin and are willing to help them. You can use a contact form so people can email you, list your phone number or email address or send them to your website with a link to your support system, etc.', 'wireframe-child' ); ?></p>

	</div>
<?php
}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */

