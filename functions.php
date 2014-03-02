<?php
/**
 * Juxprose Wordpress functions and definitions
 *
 * @package Juxprose Wordpress
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'jux_wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function jux_wp_setup() {

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in three locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jux_wp' ),
		'secondary' => __( 'Secondary Menu', 'jux_wp' ),
		'social' => __( 'Social Menu', 'jux_wp' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // jux_wp_setup
add_action( 'after_setup_theme', 'jux_wp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */

//Sidebar
function jux_wp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jux_wp' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

// Footer
register_sidebar( array(
	'name'          => __( 'Footer Primary', 'positive_wp' ),
	'id'            => 'footer-1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
) );

add_action( 'widgets_init', 'jux_wp_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function jux_wp_scripts() {

	// Primary styles
  wp_register_style( 'jux_wp-style', get_template_directory_uri() . '/assets/css/global.css', array(),'20120208','all' );
  wp_enqueue_style( 'jux_wp-style' );

	// Global javascript
  wp_enqueue_script( 'jux_wp-global-js', get_template_directory_uri() . '/assets/js/global-ck.js', array('jquery'), '20120200', true );

	// Modernizer
	wp_enqueue_script( 'jux_wp-moderizer', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '20120200', true );

	// _s Navigation
	wp_enqueue_script( 'jux_wp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	// _s Skip link
	wp_enqueue_script( 'jux_wp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'jux_wp_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Subpage function
 */

function is_subpage() {
  global $post;                              // load details about this page

  if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
      return $post->post_parent;             // return the ID of the parent post

  } else {                                   // there is no parent so ...
      return false;                          // ... the answer to the question is false
  }
}

/**
 * ACF
 */

include_once('inc/advanced-custom-fields/acf.php');