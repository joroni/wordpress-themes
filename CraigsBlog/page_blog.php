<?php
/**
 *
 * Template Name: Blog
 * This file handles blog post listings within a page.
 *
 * @package Genesis
 */
 
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

// Only use pagination on custom loop
remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
 
add_action( 'genesis_after_post_content', 'be_galleries_loop' );
/**
 * Galleries Loop
 *
 */
function be_galleries_loop() {
	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'post',
		'paged' => $_GET[ 'paged' ],
	);

	echo get_query_var('page');

	print_r($_GET);
	
	global $wp_query;
	$wp_query = new WP_Query( $args );
	if( $wp_query->have_posts() ): 
		while( $wp_query->have_posts() ): $wp_query->the_post(); global $post;
			$classes = 'one-third';
			if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
				$classes .= ' first';
			echo '<div class="'.  $classes . '"><h2><a href="' . get_permalink() . '">' . get_the_title() . '<br />' . get_the_post_thumbnail( $post->ID, 'be_archive' ) . '</a></h2></div>';		
		endwhile;
		genesis_posts_nav();
	endif;
	wp_reset_query();
}
 
genesis();