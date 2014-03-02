<?php
/**
 * The template for displaying search forms in Juxprose Wordpress
 *
 * @package Juxprose Wordpress
 */
?>
<form role="search" method="get" class="search-form group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'jux_wp' ); ?></span>		
	</label>
	<input type="search" class="search-field field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'jux_wp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'jux_wp' ); ?>" />
	<input type="submit" class="search-submit btn" value="<?php echo esc_attr_x( 'Search', 'submit button', 'jux_wp' ); ?>" />
</form>
