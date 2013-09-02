<?php
/**
 * Perspective functions and definitions
 *
 * @package perspective
 */
 
 if ( ! function_exists( 'perspective_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function perspective_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on perspective, use a find and replace
	 * to change 'perspective' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'perspective', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'perspective' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	
	/**
	 * Enable support for HTML5 Forms
	 */
	add_theme_support('html5', array('search-form'));

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'perspective_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // perspective_setup
add_action( 'after_setup_theme', 'perspective_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function perspective_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'perspective' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'perspective_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function perspective_scripts() {
	// Add stylesheets
	wp_enqueue_style( 'perspective-style', get_template_directory_uri() . '/css/perspective.css', false, null );
	
	// Add scripts
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', false, null, false);
	wp_enqueue_script( 'mytheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/main.js', false, null, false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'perspective_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
