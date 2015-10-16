<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Juxprose Wordpress
 */

get_header(); ?>

<div class="content-wrapper error-404 not-found">
  <div class="content">

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'jux_wordpress' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'jux_wordpress' ); ?></p>
			<?php get_search_form(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>