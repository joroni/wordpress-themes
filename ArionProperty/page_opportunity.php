<?php
/**
 *
 * Template Name: Opportunity
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
add_action( 'genesis_loop', 'opportunity_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function opportunity_page() {
	?>

	<div class="opportunity">
		<div class="left-section">
			<p>
				<span class='bold sync'>The Developers of</span> <span class='indie'>COTTONPARK</span> are offering investors and future homeowners the opportunity of a lifetime, to secure their residential property dream in <span class='indie'>COTTONPARK</span> like never before.
			</p>
			<p>
				Until now investors, new home buyers and the real estate industry have been shackled by the the big four banks and lending institutions. Now if you have full time employment and a minimum deposit of $5,500.00 and can afford $100.00 per week. You can not only secure your future you can buy property in <span class='indie'>COTTONPARK</span>.
			</p>
			<p>
				Three ways to make your dreams come true;
			</p>
			<ol>
				<li>
					<strong>Buy off the plan</strong> and choose your dream home Today.. Buying off the plan gives you peace of mind. (AS STAGES ARE RELEASED)
				</li>
				<li>
					<strong>Long Term Property Settlement Contract (LTSC)</strong>. A LTSC gives you greater flexibility, to capitalize on the areas existing growth and future upside potential <span class='bold red'>from as little as $35,000 or from as little as $99.00 per week.</span>
				</li>
				<li>
					<strong>Vendors Terms</strong>, The developers of <span class='indie'>COTTONPARK</span> are for a limited time only offering Vendor terms to approved purchasers. <span class='bold red'>You can purchase off the plan or LTSC from as little as $99.00(PW)</span>
				</li>
			</ol>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/happy-couple.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			Conditions apply vendor terms are offered to approved purchasers only and are offered at the discretion of the developers of CottonPark. The developers retian the right to withdraw this offer at any time without notice.
		</div>

	</div>

	<?php
}
 
genesis();