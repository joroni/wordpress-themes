<?php
/**
 *
 * Template Name: How LTSC Works
 *
 * @package Genesis
 */
 
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

add_action( 'genesis_header', 'genesis_header_markup_open', 5 );
add_action( 'genesis_header', 'custom_header' );
add_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_sub_nav');

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'how_ltsc_works' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function how_ltsc_works() {
	?>

	<div class="how-ltsc">
		<div class="first-section">
			<h3>Buy Now</h3>
			<img src="/wp-content/themes/ArionProperty/images/ltsc-1.jpg" alt="">
		</div>
		<div class="second-section">
			<h3>Planning 5 Years</h3>
			<img src="/wp-content/themes/ArionProperty/images/ltsc-2.jpg" alt="">
		</div>
		<div class="third-section">
			<h3>Urban Sprawl 10 YRS</h3>
			<img src="/wp-content/themes/ArionProperty/images/ltsc-3.jpg" alt="">
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();