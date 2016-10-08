<?php
/**
 * WPWFP helpers-views.php file for WordPress themes.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme. All rights reserved.
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
		<a href="admin.php?page=wpwfp" class="nav-tab nav-tab-active">Landing</a>
		<a href="admin.php?page=wpwfp-page2" class="nav-tab">Page 2</a>
		<a href="admin.php?page=wpwfp-page3" class="nav-tab">Page 3</a>
		<a href="admin.php?page=wpwfp-page4" class="nav-tab">Page 4</a>
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

		<h1><?php echo WPWFP_PRODUCT; ?>&nbsp;<?php echo WPWFP_VERS; ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wpwfp' ); ?>
		</div>
		<div class="wp-badge">
			Version <?php echo WPWFP_VERS; ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'This is a landing page', 'wpwfp' ); ?></h3>

		<p><?php esc_html_e( 'You should arrive here after clicking the 1st tab or top-tier menu item.', 'wpwfp' ); ?></p>

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

		<h1><?php echo WPWFP_PRODUCT; ?>&nbsp;<?php echo WPWFP_VERS; ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wpwfp' ); ?>
		</div>

		<div class="wp-badge">
			Version <?php echo WPWFP_VERS; ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'The 2nd subpage', 'wpwfp' ); ?></h3>

		<p><?php esc_html_e( 'This is the 2nd tab (not the Landing page).', 'wpwfp' ); ?></p>

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

		<h1><?php echo WPWFP_PRODUCT; ?>&nbsp;<?php echo WPWFP_VERS; ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wpwfp' ); ?>
		</div>

		<div class="wp-badge">
			Version <?php echo WPWFP_VERS; ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'This is Subpage 3', 'wpwfp' ); ?></h3>

		<p><?php esc_html_e( 'This should appear after clicking the 3rd tab, yo.', 'wpwfp' ); ?></p>

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

		<h1><?php echo WPWFP_PRODUCT; ?>&nbsp;<?php echo WPWFP_VERS; ?></h1>

		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wpwfp' ); ?>
		</div>

		<div class="wp-badge">
			Version <?php echo WPWFP_VERS; ?>
		</div>

		<?php wpwfp_tpl_tabs(); ?>

		<h3><?php esc_html_e( 'Here we have the delicious subpage #4', 'wpwfp' ); ?></h3>

		<p><?php esc_html_e( 'Clicking the 4th tab brings you here.', 'wpwfp' ); ?></p>

	</div>
<?php
}
