<?php
//* Template Name: Russells

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'post_content' );
add_action( 'genesis_before_content_sidebar_wrap', 'render_slider' );
// add_action( 'genesis_before_sidebar_widget_area', 'render_sidebar' );


function render_sidebar() {
	// if( is_active_sidebar( 'Russell Right' ) ) {
	// 	dynamic_sidebar( 'Russell Right' );
	// } else {
	// 	printf( 'No Widgets active' );
	// }

	if ( !dynamic_sidebar('Russells Area') ) : ?>
	<?php endif;
}

function render_slider() {

render_sidebar();
}

function post_content() {

	$post_count = 1;

	if ( have_posts() ) : while ( have_posts() ) : the_post();

			do_action( 'genesis_before_entry' );

			printf( '<article %s>', genesis_attr( 'entry' ) );

				// do_action( 'genesis_entry_header' );

				$tags = get_the_tags();
				$posttags = array();
				if($tags) {
					foreach($tags as $tag) {
						array_push($posttags, $tag->name);
					}
					$taglist = implode(", ", $posttags);
				}

				printf( '<h2><a href="%s">%s</a></h2>', get_permalink(), strtoupper( get_the_title() ) );
				printf( '<div class="post-meta-custom"><span class="meta-bold">BY %s; %s <span class="meta-seperator">|</span> </span> TAGS: %s</div>', strtoupper( get_the_author() ), strtoupper( get_the_date( 'M j Y' ) ), strtoupper( $taglist ) );

				do_action( 'genesis_before_entry_content' );
				printf( '<div %s>', genesis_attr( 'entry-content' ) );
					// do_action( 'genesis_entry_content' );
					entry_content( $post_count );
				echo '</div>'; //* end .entry-content
				do_action( 'genesis_after_entry_content' );

				// do_action( 'genesis_entry_footer' );

			echo '</article>';

			do_action( 'genesis_after_entry' );

			$post_count++;

		endwhile; //* end of one post
		do_action( 'genesis_after_endwhile' );

	else : //* if no posts exist
		do_action( 'genesis_loop_else' );
	endif; //* end loop
}

function class_attributes( $context, $post_count ) {
	$output = genesis_attr( $context );

	$split = explode( 'class="', $output );

	return $split[0] . 'class="' . bootstrap_class_attributes( $post_count ) . $split[1];
}

function bootstrap_class_attributes( $post_index ) {
	$classes = post_width( $post_index );

	// if( $post_index == 1 ) {
	// 	$classes = $classes . 'featured-post ';
	// }

	return $classes;
}

function entry_content( $post_count ) {
	printf( '<a href="%s">', get_permalink() );
	the_post_thumbnail( array( '350', '200' ), array( 'class' => 'post-image-custom' ) );
	printf( '</a>' );
	printf( '<div class="%s">', (has_post_thumbnail() ? "content-wrap" : "") );
	printf( the_content_limit( 500, __( 'Read more...', 'genesis' ) ) );
	printf( '</div>' );
}

function entry_header( $post_count ) {
	
}

function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

genesis();

?>