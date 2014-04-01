<?php

// Remove Default Post Content (the text)
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
add_action( 'genesis_post_content', 'post_content' );

remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
remove_action( 'genesis_after_post_content', 'genesis_post_info' );

function post_content() {
	if( has_post_thumbnail() ) {
		echo "<div class='post-image-container'>";
		echo the_post_thumbnail( 'large' );
		echo "</div>";
	}
	echo the_content();
}

// All set up, now kickstart Genesis
genesis();