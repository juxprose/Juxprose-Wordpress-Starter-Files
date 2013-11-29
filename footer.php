<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Juxprose Wordpress
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'jux_wp_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'jux_wp' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'jux_wp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'jux_wp' ), 'Juxprose Wordpress', '<a href="http://www.juxprose.com" rel="designer">Juxprose</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/selectivizr-min.js"></script>
<![endif]-->  

</body>
</html>