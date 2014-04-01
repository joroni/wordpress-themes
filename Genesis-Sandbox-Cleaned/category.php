<?php
//* Template Name: Russells

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'post_content' );
add_action( 'genesis_before_content_sidebar_wrap', 'render_carousel' );

function post_content() {

	$post_count = 1;

	if ( have_posts() ) : while ( have_posts() ) : the_post();

			before_entry( $post_count );

			printf( '<article %s>', class_attributes( 'entry', $post_count ) );

				entry_header( $post_count );

				do_action( 'genesis_before_entry_content' );
				printf( '<div %s>', genesis_attr( 'entry-content' ) );
					// do_action( 'genesis_entry_content' );
					entry_content( $post_count );
				echo '</div>'; //* end .entry-content
				do_action( 'genesis_after_entry_content' );

				do_action( 'genesis_entry_footer' );

			echo '</article>';

			do_action( 'genesis_after_entry' );

			$post_count++;

		endwhile; //* end of one post
		do_action( 'genesis_after_endwhile' );

	else : //* if no posts exist
		do_action( 'genesis_loop_else' );
	endif; //* end loop
}

function render_carousel() {
	printf( '<div class="span12" style="background: red; display: block; height: 200px;"></div>' );
}

function before_entry( $post_count ) {
	if( $post_count == 5 || $post_count == 8 ) {
		printf( '<div class="clear"></div>' );
	}
	do_action( 'genesis_before_entry' );
}

function class_attributes( $context, $post_count ) {
	$output = genesis_attr( $context );

	$split = explode( 'class="', $output );

	return $split[0] . 'class="' . bootstrap_class_attributes( $post_count ) . $split[1];
}

function bootstrap_class_attributes( $post_index ) {
	$classes = post_width( $post_index );

	if( $post_index == 1 ) {
		$classes = $classes . 'featured-post ';
	}

	return $classes;
}

function post_width( $post_count ) {
	$widths = array(
		'- ',
		'four-sixths first ',
		'two-sixths ',
		'two-sixths ',
		'two-sixths ',
		'first two-sixths ',
		'four-sixths ',
		'four-sixths '
	);

	return $widths[ $post_count ];
}

function entry_content( $post_count ) {
	if( $post_count > 1 && $post_count < 5 ) {
		printf( the_content_limit( 100, __( '[Read more...]', 'genesis' ) ) );
		return;
	}

	if( $post_count > 4 && $post_count < 8 ) {
		display_thumnail_image( 'centered' );
		printf( the_content_limit( 100, __( '[Read more...]', 'genesis' ) ) );
		return;
	}

	display_featured_image();
	printf( the_content_limit( 1000, __( '[Read more...]', 'genesis' ) ) );
}

function display_thumnail_image( $position ) {
	$args = array(
		'size' => 'thumb'
	);
	$image = genesis_get_image( $args );

	if( $image ) {
		printf( '<a href="%s" class="post-thumbnail-image %s">%s</a>', get_permalink(), $position, $image );
	}
}

function display_featured_image() {
	$args = array(
		'size' => 'full'
	);
	$image = genesis_get_image( $args );

	if( $image ) {
		printf( '<a href="%s" class="post-featured-image">%s</a>', get_permalink(), $image );
	}
}

function entry_header( $post_count ) {
	do_action( 'genesis_entry_header' );
}

function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

genesis();