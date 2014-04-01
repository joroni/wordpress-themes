<?php
//* Template Name: Russells

?>
<link rel='stylesheet' href="../../wp-content/plugins/3d-slider-slicebox/css/slicebox.css" >
<?php

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

// if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); }


	// $temp_post = $post;

	// $args = array(
	// 	'cat' => '6',
 //      'meta_query' => array(
 //         array(
 //            'key' => '_thumbnail_id',
 //            'value' => '',
 //            'compare' => '!='
 //         )
 //      )
 //   );
 //   $slider_posts = new WP_Query($args);

   // if( have_posts() ) {
   // 		$i = 0;
   // 		printf( '<div class="custom-slider">' );
   // 		printf( '<ul class="sb-slider" id="sb-slider">' );

   // 		while( have_posts() && $i < 3 ) : the_post();

   // 			if( has_post_thumbnail( $post->ID ) ) {
   // 				printf( '<li class="sb-current">' );
	  //  			printf( '<a href="%s">', get_permalink() );
	  //  			printf( the_post_thumbnail() );
	  //  			printf( '</a>' );
	  //  			printf( '<a href="%s" class="sb-description">', get_permalink() );
	  //  			printf( the_title() );
	  //  			printf( '</a>' );
	  //  			printf( '</li>' );
   // 			}

   // 			$i++;
   // 		endwhile;

   // 		printf( '</ul>' );
   // 		// if(sb_slides_display()){sb_slides_display();}
   // 		printf( '<div class="shadow" id="shadow" style="display: block;"></div>' );
   // 		printf( '<div class="nav-arrows" id="nav-arrows" style="display: block;"><a href="#">Next</a><a href="#">Previous</a></div>' );
   // 		printf( '</div>' );
   // }

   // $post = $temp_post;
}

function post_content() {

	$post_count = 1;

	if ( have_posts() ) : while ( have_posts() ) : the_post();

			do_action( 'genesis_before_entry' );

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

function post_width( $post_count ) {
	$widths = array(
		'- ',
		'one-half first ',
		'one-half ',
		'one-half first ',
		'one-half ',
		'first '
	);

	return $widths[ $post_count ];
}

function entry_content( $post_count ) {
	if( $post_count != 1 ) {
		display_featured_image();
		printf( the_content_limit( 100, __( '[Read more...]', 'genesis' ) ) );
	}else {
		display_featured_image();
		printf( the_content_limit( 100, __( '[Read more...]', 'genesis' ) ) );
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

?>

<script type='text/javascript' src="../../wp-content/plugins/3d-slider-slicebox/js/modernizr.custom.46884.js"></script>
<script type='text/javascript' src="../../wp-content/plugins/3d-slider-slicebox/js/jquery.slicebox.js"></script>
<script type='text/javascript'>
	// jQuery("#sb-slider").slicebox( {
	// 	orientation: 'v',
	// 	cuboidsCount: 10,
	// 	disperseFactor: 20,
	// 	autoplay: true,
	// 	interval: 10000
	// });

	var $ = jQuery;

	$(function() {

		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ).hide(),
				$shadow = $( '#shadow' ).hide(),
				slicebox = $( '#sb-slider' ).slicebox( {
					onReady : function() {

						$navArrows.show();
						$shadow.show();

					},
					orientation: 'v',
					cuboidsCount: 10,
					disperseFactor: 20,
					autoplay: true,
					interval: 10000
				} ),

				init = function() {

					initEvents();

				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':first' ).on( 'click', function() {

						slicebox.next();
						return false;

					} );

					$navArrows.children( ':last' ).on( 'click', function() {

						slicebox.previous();
						return false;

					} );

				};

				return { init : init };

		})();

		Page.init();

	});

</script>