<?php

// add_action( 'genesis_before_post_content', 'before_content' );

function before_content() {
	if( has_post_thumbnail() ) {
		echo "<div class='single-featured-image'>";
		the_post_thumbnail( 'full', array( 'class' => 'aligncenter'));
		echo "</div>";
	}
}

genesis();