<?php
/**
 * Juxprose Wordpress functions and definitions
 *
 * @package Juxprose Wordpress
 */

/**
 * ACF Options page
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Theme Settings');

}

if ( ! function_exists( 'jux_wordpress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function jux_wordpress_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jux_wordpress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	//add_image_size( 'custom-thumb', 540, 540, array( 'center', 'top' ) );
	//add_image_size( 'custom-large', 1045, 325, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'jux_wordpress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}

endif; // jux_wordpress_setup

add_action( 'after_setup_theme', 'jux_wordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jux_wordpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jux_wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'jux_wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jux_wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jux_wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'jux_wordpress_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function jux_wordpress_scripts() {

	// Primary styles
  wp_register_style( 'jux_wordpress-style', get_template_directory_uri() . '/assets/css/global.css', array(),'20120208','all' );
  wp_enqueue_style( 'jux_wordpress-style' );

  // Match Height
  wp_enqueue_script( 'jux_wordpress-matchHeight', get_template_directory_uri() . '/bower_components/matchHeight/jquery.matchHeight.js', array('jquery'), '20120200', true );

	// FitVids
  wp_enqueue_script( 'jux_wordpress-fitvids', get_template_directory_uri() . '/bower_components/FitVids/jquery.fitvids.js', array('jquery'), '20120200', true );

	// FitText
  wp_enqueue_script( 'jux_wordpress-fittext', get_template_directory_uri() . '/bower_components/FitText.js/jquery.fittext.js', array('jquery'), '20120200', true );

	// Picturefill
  wp_enqueue_script( 'jux_wordpress-picturefill', get_template_directory_uri() . '/bower_components/picturefill/dist/picturefill.min.js', array('jquery'), '20120200', true );

  // Modernizer
  wp_enqueue_script( 'jux_wordpress-modernizer-js', get_template_directory_uri() . '/bower_components/modernizer/modernizr.js', array('jquery'), '20120200', true );

	// Global javascript 
  wp_enqueue_script( 'jux_wordpress-global-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '20120200', true );  

  // Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'jux_wordpress_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'yoasttobottom');