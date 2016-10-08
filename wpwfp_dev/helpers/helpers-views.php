<?php
/**
 * Views helper functions for WPWFT.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
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
 * Tabs.
 *
 * @since 0.0.1 WPWFP
 * @see   helpers-functions.php
 */
function wpwfp_tpl_tabs() {
	wpwfp_admin_check();
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WPWFP_TEXTDOMAIN ) ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Landing', 'wp-wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=page2slug' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 2', 'wp-wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=page3slug' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 3', 'wp-wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=page4slug' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 4', 'wp-wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Page 1: Landing.
 *
 * @since 0.0.1 WPWFP
 * @see   helpers-functions.php
 */
function wpwfp_view_quickstart() {
	wpwfp_admin_check();
	?>
	<div class="wrap about-wrap">

		<h1><?php echo esc_html( WPWFP_PRODUCT ); ?> <?php echo esc_html( WPWFP_VERS ); ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wp-wireframe-plugin' ); ?>
		</div>
		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wp-wireframe-plugin' ); ?> <?php echo esc_html( WPWFP_VERS ); ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'This is a landing page', 'wp-wireframe-plugin' ); ?></h3>

		<p><?php esc_html_e( 'You should arrive here after clicking the 1st tab or top-tier menu item.', 'wp-wireframe-plugin' ); ?></p>

	</div>
<?php
}

/**
 * Page 2: Example.
 *
 * @since 0.0.1 WPWFP
 * @see   helpers-functions.php
 */
function wpwfp_view_sub2() {
	wpwfp_admin_check();
	?>
	<div class="wrap about-wrap">

		<h1><?php echo esc_html( WPWFP_PRODUCT ); ?>&nbsp;<?php echo esc_html( WPWFP_VERS ); ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wp-wireframe-plugin' ); ?>
		</div>

		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wp-wireframe-plugin' ); ?> <?php echo esc_html( WPWFP_VERS ); ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'The 2nd subpage', 'wp-wireframe-plugin' ); ?></h3>

		<p><?php esc_html_e( 'This is the 2nd tab (not the Landing page).', 'wp-wireframe-plugin' ); ?></p>

	</div>
<?php
}

/**
 * Page 3: Example.
 *
 * @since 0.0.1 WPWFP
 * @see   helpers-functions.php
 */
function wpwfp_view_sub3() {
	wpwfp_admin_check();
	?>
	<div class="wrap about-wrap">

		<h1><?php echo esc_html( WPWFP_PRODUCT ); ?>&nbsp;<?php echo esc_html( WPWFP_VERS ); ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wp-wireframe-plugin' ); ?>
		</div>

		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wp-wireframe-plugin' ); ?> <?php echo esc_html( WPWFP_VERS ); ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'This is Subpage 3', 'wp-wireframe-plugin' ); ?></h3>

		<p><?php esc_html_e( 'This should appear after clicking the 3rd tab, yo.', 'wp-wireframe-plugin' ); ?></p>

	</div>
<?php
}

/**
 * Page 4: Example.
 *
 * @since 0.0.1 WPWFP
 * @see   helpers-functions.php
 */
function wpwfp_view_sub4() {
	wpwfp_admin_check();
	?>
	<div class="wrap about-wrap">

		<h1><?php echo esc_html( WPWFP_PRODUCT ); ?>&nbsp;<?php echo esc_html( WPWFP_VERS ); ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wp-wireframe-plugin' ); ?>
		</div>

		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wp-wireframe-plugin' ); ?> <?php echo esc_html( WPWFP_VERS ); ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'Here we have the delicious subpage #4', 'wp-wireframe-plugin' ); ?></h3>

		<p><?php esc_html_e( 'Clicking the 4th tab brings you here.', 'wp-wireframe-plugin' ); ?></p>

	</div>
<?php
}
