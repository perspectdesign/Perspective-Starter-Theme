<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package perspective
 */
?>

<aside role="complementary">
	<?php do_action('before_sidebar'); ?>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) : ?>
		<div class="sidebar not here">TEST</div><!-- Place default default widgets in here -->
	<?php endif; ?>
</aside><!-- End of Sidebar -->