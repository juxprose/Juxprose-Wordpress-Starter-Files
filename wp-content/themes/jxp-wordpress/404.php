<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Juxprose Wordpress
 */

get_header(); ?>

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'jux_wordpress' ); ?></h1>
		</header><!-- .entry-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'jux_wordpress' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

<?php get_footer(); ?>