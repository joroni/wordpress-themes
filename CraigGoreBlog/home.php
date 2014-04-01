<?php

remove_action( 'genesis_loop', 'genesis_do_loop' );
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

add_action( 'genesis_loop', 'child_home_loop_helper' );
function child_home_loop_helper() {
	$about_page_id = 154;

	$about_page = get_page_by_title( 'About' );
	?>

	<div class="custom-heading">
		<div class="title">
			ABOUT CRAIG GORE
		</div>
	</div>

	<div class="post home-about-section">

		<a href="<?php echo get_permalink( $about_page->ID ); ?>" class='alignleft'>
			<?php echo get_the_post_thumbnail( $about_page->ID, array( 350, 350 ), array( 'class' => 'post-image-custom' ) ); ?>
		</a>

		<div class='entry-content content-wrap'>
			<p>
				<?php echo wp_trim_words($about_page->post_content, 100, '...'); ?>
				<a href="<?php echo get_permalink( $about_page->ID ); ?>">Read More</a>
			</p>
		</div>
		<div class="clear"></div>
	</div>


	<div class="custom-heading">
		<div class="read-all">
			<?php
			$category_id = get_cat_ID( 'Blog' );
			$category_link = get_category_link( $category_id );
			?>
			<a href="<?php echo esc_url( $category_link ); ?>">READ ALL BLOG ></a>
		</div>
		<div class="title">
			LATEST FROM THE BLOG
		</div>
	</div>

	<div class="home-blog-section">
		<?php dynamic_sidebar( 'Home Blog' ); ?>
	</div>

	<div class="custom-heading">
		<div class="read-all">
			<?php
			$category_id = get_cat_ID( 'Media' );
			$category_link = get_category_link( $category_id );
			?>
			<a href="<?php echo esc_url( $category_link ); ?>">READ ALL MEDIA ></a>
		</div>
		<div class="title">
			CRAIG IN THE MEDIA
		</div>
	</div>

	<div class="home-media-section">
		<?php dynamic_sidebar( 'Home Media' ); ?>
	</div>

	<?php
}


genesis();
?>