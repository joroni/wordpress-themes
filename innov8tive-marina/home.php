<?php

add_action( 'genesis_meta', 'innovative_home_genesis_meta' );
/**
 * Add widget support for home page. If no widgets active, display the default loop.
 *
 */
function innovative_home_genesis_meta() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-right' ) || is_active_sidebar( 'home-bottom' ) ) {
	
		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', 'innovative_home_loop_helper' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
		add_filter( 'body_class', 'innovative_add_body_class' );
		
	}
}

function innovative_add_body_class( $classes ) {
   		$classes[] = 'innovative';
  		return $classes;
}

function innovative_home_loop_helper() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-right' ) ) {
	
		echo '<div id="home">';

			genesis_widget_area( 'home-top', array( 'before' => '<div class="wiget-area home-top">' ) );

			genesis_widget_area( 'home-left', array( 'before' => '<div class="wiget-area home-left">' ) );

			genesis_widget_area( 'home-right', array( 'before' => '<div class="wiget-area home-right">' ) );
		
		echo '</div><!-- end #home -->';
		
	}
	
	if ( is_active_sidebar( 'home-bottom' ) ) {
	
		echo '<div id="home-bottom">';
		
			genesis_widget_area( 'home-bottom', array( 'before' => '<div class="wiget-area home-bottom">' ) );
		
		echo '</div><!-- end #home-bottom -->';
		
	}

}

genesis();