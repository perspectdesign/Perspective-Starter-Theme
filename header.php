<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package perspective
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	
	<div class="header-container">
		<?php do_action( 'before' ); ?>
		<nav class="primary">
        	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
	    <header class="wrapper clearfix">	        
	        <div class="ribbon">
	        	<div class="ribbonbar"></div>
	        	<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Perspective Design">
	        </div>
	        <div class="est-wrap">
	        	<img class="est" src="<?php echo get_stylesheet_directory_uri(); ?>/img/est.png" alt="est">
	        </div>
	        <div class="margin"></div>
        
	        <div class="banner visuallyhidden">
		        <h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	        </div>
	        	        
	    </header>
	</div><!-- End Header Section -->

    <div class="main-container">
    	<div class="request">
	      	<a class="request-button">Request a Quote</a>
	    </div>
	    
        <div class="main wrapper clearfix">