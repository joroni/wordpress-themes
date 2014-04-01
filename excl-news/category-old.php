<?php

function render_post( $post_count ) {
	before_entry( $post_count );
	// do_action( 'genesis_before_entry' );

	printf( '<article %s>', class_attributes( 'entry', $post_count ) );

		entry_header( $post_count );
		// do_action( 'genesis_entry_header' );

		do_action( 'genesis_before_entry_content' );
		printf( '<div %s>', genesis_attr( 'entry-content' ) );
			// do_action( 'genesis_entry_content' );
			entry_content( $post_count );
		echo '</div>'; //* end .entry-content
		do_action( 'genesis_after_entry_content' );

		// do_action( 'genesis_entry_footer' );

	echo '</article>';

	// do_action( 'genesis_after_entry' );
	after_entry( $post_count );
}

function entry_header( $post_count ) {
	$mod = $post_count % 5;
	if( $mod !== 4 ) {
		if( $mod == 0 ) {
			echo '<h2 class="entry-title">';
		} else {
			echo '<h5>';
		}
		?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class='custom-post-thumb'>
				<?php
				if( $mod == 0 ) {
					the_post_thumbnail( 'large' );
				} else {
					the_post_thumbnail('medium');
				}
				?>
			</a>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php
					$title_length = strlen(get_the_title());
					echo substr( get_the_title(), 0, 45 );
					if($title_length > 45) {
						echo "...";
					}
				?>
			</a>
		<?php

		if( $mod == 0 ) {
			echo '</h2>';
		} else {
			echo '</h5>';
		}
	}
}

function before_entry( $post_count ) {
	$mod = $post_count % 5;

	if($mod == 0 ) {
		//open BLOCK section
		?><div class="section-container <?php if($post_count & 1) { echo 'float-right'; } ?>"><?php

		//open LEFT section
		?><div class="left-section"><?php
	}

	if( $mod == 1 ) {
		//open RIGHT section
		?><div class="right-section"><?php
	}

	if( $mod == 4 ) {
		//CLEAR
		?><div class="clear"></div><?php

		//open BOTTOM section
		?><div class="bottom-section"><?php
	}



	do_action( 'genesis_before_entry' );
}

function after_entry( $post_count ) {
	do_action( 'genesis_after_entry' );

	$mod = $post_count % 5;

	if( $mod == 0 ) {
		//close LEFT section
		?></div><?php
	}

	if( $mod == 3 ) {
		//close RIGHT section
		?></div><?php
	}

	if( $mod == 4 ) {
		//close BOTTOM section
		?></div><?php

		//close BLOCK section
		?></div><?php
	}
}
function entry_content( $post_count ) {
	$mod = $post_count % 5;
	if( $mod > 0 && $mod < 4 ) {
		return;
	}

	if( $mod == 4 ) {
		?>
		<div class="bottom-left">
			<?php 
			//display_thumnail_image( 'centered' ); 
			the_post_thumbnail( 'medium' );
			?>
		</div>
		<div class="bottom-right">
			<h3>
				<?php
				$title_length = strlen(get_the_title());
				echo substr( get_the_title(), 0, 50 );
				if($title_length > 50) {
					echo "...";
				}
				?>
			</h3>
			<?php printf( the_content_limit( 100, __( '[Read more...]', 'genesis' ) ) );
			?>
		</div>
		<?php
		return;
	}
}


function post_width( $post_count ) {
	$widths = array(
		'four-sixths first ',
		'two-sixths ',
		'two-sixths ',
		'two-sixths ',
		'first '
	);

	// return $widths[ $post_count % 5 ];
	return '';
}
