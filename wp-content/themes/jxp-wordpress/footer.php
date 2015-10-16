<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Juxprose Wordpress
 */
?>

	</main><!-- main -->

	<footer class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; <?php echo date("Y") ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .wrapper -->

<?php wp_footer(); ?>

<!-- Older IE polyfills -->
<!--[if IE 8]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

</body>
</html>