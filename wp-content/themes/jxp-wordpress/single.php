<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Juxprose Wordpress
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/content', 'single' ); ?>

		<?php the_post_navigation(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	<?php endwhile; ?>

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>