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
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon.png?v=20131809" />

<!-- IE -->
<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/selectivizr-min.js"></script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

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
</head>

<body <?php body_class(); ?>>
<div class="hfeed site-wrapper">
	<?php do_action( 'before' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<a href="#menu" class="menu-link"><?php _e( 'Menu', 'jux_wp' ); ?> &nbsp; <i class="fa fa-chevron-circle-down"></i></a>
		<nav id="menu" class="navigation-main" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
		</nav> 
	</header><!-- #masthead -->

	<div id="main" class="site-main">