<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Juxprose Wordpress
 */

get_header();

while ( have_posts() ) : the_post();

get_template_part( 'content', 'single' );

	jux_wordpress_post_nav();

	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;

endwhile;

get_sidebar();

get_footer(); ?>