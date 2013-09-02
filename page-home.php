<?php
/*
Template Name: Homepage Template
*/


get_header(); ?>
	<main class="no-sidebar">

	<div class="features clearfix">
		<!-- Add Left Widget Area -->
		<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-left')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
	
		<!-- Add Middle Widget Area -->
		<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-middle')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
		
		<!-- Add Right Widget Area -->
		<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-right')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
	</div>
	
	<div class="cta clearfix">
		<!-- First CTA Area -->
			<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-cta1')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
		
		<!-- First CTA Area -->
			<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-cta2')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
		
		<!-- First CTA Area -->
			<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-cta3')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>
		
		<!-- First CTA Area -->
			<?php do_action('before_sidebar'); ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-cta4')) : ?>
			<!-- Place default default widgets in here -->
		<?php endif; ?>	
	</div>
		
	</main><!-- #main -->

<?php get_footer(); ?>
