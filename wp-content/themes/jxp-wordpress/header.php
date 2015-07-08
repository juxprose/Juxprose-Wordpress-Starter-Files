<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Juxprose Wordpress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png?v=20131809" />

<!-- Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<!-- Gridset CSS -->
<!--[if (!IE) | (gt IE 9)]><!--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gridset.css" /><!--<![endif]-->
<!--[if IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gridset-ie-9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gridset-ie-lte8.css" /><![endif]--> 

<!-- Flexslider --> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/flexslider.css" type="text/css">          

<!-- Selectivizr / Respond JS -->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/respond/dest/respond.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bower_components/selectivizr/selectivizr.js"></script>
<![endif]-->

<!-- Modernizer -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/modernizr/modernizr.js"></script>

<!-- GA -->
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXXX-X', 'sitename.com');
  ga('send', 'pageview');

</script> -->

<?php wp_head(); ?>

<!-- Flexslider -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/jquery.flexslider.js"></script>

<!-- Flexslider -->
<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
      animation: "slide",
      controlNav: false,
      slideshowSpeed: 3000,
      useCSS: false,
    });
  });
</script>  

</head>

<body <?php body_class(); ?>>
<div class="hfeed site">

	<header class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>		
		<nav id="site-navigation" class="main-navigation" role="navigation">
      <a href="#menu" class="menu-link" aria-controls="menu"><?php _e( 'Menu', 'jux_wordpress' ); ?> &nbsp; <i class="fa fa-chevron-circle-down"></i></a>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'jxp-leighton-asia' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '' ) ); ?>
		</nav> 
	</header><!-- #masthead -->

	<main class="site-main" role="main">