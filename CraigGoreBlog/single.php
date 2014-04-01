<?php

add_action( 'genesis_before_post_content', 'before_content' );

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

remove_action( 'genesis_before_post_content', 'genesis_post_info' );
add_action( 'genesis_before_post_content', 'post_info' );

remove_action( 'genesis_post_title', 'genesis_do_post_title' );
add_action( 'genesis_post_title', 'custom_title' );

remove_action( 'genesis_after_post_content', 'genesis_post_meta' );

function custom_title() {
	echo "<h1>";
	echo strtoupper( get_the_title() );
	echo "</h1>";
}

function before_content() {
	if( has_post_thumbnail() ) {
		echo "<div class='single-featured-image'>";
		the_post_thumbnail( 'full' );
		echo "</div>";
	}
}

function post_info() {
	$tags = get_the_tags();
	$posttags = array();
	if($tags) {
		foreach($tags as $tag) {
			array_push($posttags, $tag->name);
		}
		$taglist = implode(", ", $posttags);
	}

	echo "<div class='post-meta-custom'>";
	printf( '<span class="meta-bold">BY %s; %s |</span> TAGS: %s', strtoupper( get_the_author() ), strtoupper( get_the_date( 'M j Y' ) ), strtoupper( $taglist ) );
	echo "</div>";
}

genesis();