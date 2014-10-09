<?php
/**
 * The template used for displaying page content in tmpl-grid.php
 *
 * @package Juxprose Wordpress
 */
?>

<div class="block--site-content">
	<div class="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">

				<?php // Page Header
				// --------------------
				get_template_part( 'partials/header', 'page' ); ?>

				<div class="entry-image">

					<?php // Featured Image
					// --------------------
					get_template_part( 'partials/image', 'featured' ); ?>

				</div>

				<div class="entry-text">

					<?php the_content(); ?>

					<?php // The Grid
					// --------------------

					if(get_field('grid_items')): ?>
					 
						<ul class="grid-wrapper group">
					 
						<?php while(has_sub_field('grid_items')): ?>

							<?php // Grisdet Loop Counter	- determine classes
							// ----------------------------------------------
							$gridcount++;

							if($gridcount == 1) {
									$cols = "l1-l4 m1-m4";
							}
							elseif($gridcount == 2) {
								$cols = "l5-l8 m5-m8";
							}
							elseif($gridcount == 3) {
								$cols = "l9-l12 m9-m12";
							} 
							?>	
					 		
							<li class="grid-item <?php echo $cols; ?>">
								<div class="content">

									<h3><?php the_sub_field('title'); ?></h3>
									<div class="grid-item-description">
										<p><?php the_sub_field('description'); ?></p>
										<a class="btn" href="<?php the_sub_field('link'); ?>">Nominate &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
									</div>

								</div>

							</li>

							<?php // Reset Gridset Loop Counter at 3
							// --------------------------------------
							if ($gridcount >= 3) { $gridcount = 0; } ?>		
					 
						<?php endwhile; ?>
					 
						</ul>
					 
					<?php endif; ?>					

				</div>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'jux_wordpress' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', 'jux_wordpress' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->
	</div>
</div>