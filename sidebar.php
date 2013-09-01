<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Perspective
 */
?>

	<div class="sidebar" role="complementary">
		<?php do_action('before_sidebar');
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
	</div><!-- #secondary -->