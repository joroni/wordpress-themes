<?php
/**
 *
 * Template Name: Plan Purchase
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
add_action( 'genesis_loop', 'plan_purchase_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function plan_purchase_page() {
	?>

	<div class="plan-purchase">
		<div class="left-section">
			<img src="/wp-content/themes/ArionProperty/images/Blueprint-small.jpg" alt="">
			<img class='centered-image' src="/wp-content/themes/ArionProperty/images/about-house-2.jpg" alt="">
		</div>
		<div class="right-section">
			<p>
				Choosing your dream home in <span class='indie'>COTTONPARK</span> has never been easier with a huge range of residential styles and designs to choose from as stages are released.
			</p>
			<p>
				There are more than 40 stages to this incredible project and as such investors and buyers have available to them a wider choice and greater opportunity to secure residential investment or dream home today.
			</p>
			<p>
				<h5>Residential Land</h5>
				You can choose one of the thousands of ergonomic and environmentally designed residential lot to build your investment property or dream home.
			</p>
			<p>
				<h5>Townhouses</h5>
				Or you can choose one of the many stylish and impeccably designed 3 and four bedroom townhouses strategically placed throughout <span class='indie'>COTTONPARK</span>
			</p>
			<p>
				<h5>Luxury European Designed Apartment</h5>
				As cottonpark grows so willl your options to purchase one of Cotton Parks impeccably designed european apartments
			</p>
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();