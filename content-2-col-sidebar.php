<?php
/**
 * The template used for displaying page content in tmpl-2-col-sidebar.php
 *
 * @package Juxprose Lambeth Awards
 */
?>

<div class="block--site-content">
	<div class="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<div class="entry-content">

				<?php // Page Header
				// --------------------
				include('partials/content-page-header.php'); ?>

				<div class="entry-image">

					<?php // Featured Image
					// --------------------
					include('partials/featured-image.php'); ?>

				</div>

				<div class="entry-text group">

					<?php // Title & Introduction
					// ---------------------------
					include('partials/content-title-intro.php'); ?>
	
					<div class="l1-l8 m1-m8 t-all s-all">
						<?php the_content(); ?>
					</div>

					<div class="l9-l12 m9-m12 t-all s-all sidebar--internal">
						<div class="content">
							<?php the_field('sidebar'); ?>
						</div>
					</div>
					
				</div>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'jux_wp' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', 'jux_wp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->
	</div>
</div>