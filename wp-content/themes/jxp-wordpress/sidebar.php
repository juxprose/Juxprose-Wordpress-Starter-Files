<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Juxprose Wordpress
 */
?>
	<div id="secondary" class="widget-area group" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search group">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget group">
				<h1 class="widget-title"><?php _e( 'Archives', 'jux_wp' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'jux_wp' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
