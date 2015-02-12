<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Juxprose Wordpress
 */

get_header(); 

while ( have_posts() ) : the_post();

	get_template_part( 'content', 'page' );

	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;

endwhile;

get_sidebar();

get_footer(); ?>
