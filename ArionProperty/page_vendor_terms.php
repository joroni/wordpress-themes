<?php
/**
 *
 * Template Name: Vendor Terms
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
add_action( 'genesis_loop', 'vendor_terms' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function vendor_terms() {
	?>

	<div class="vendor-terms">
		<div class="left-section">
			<p>
				The developers of <span class="indie">COTTONPARK</span> have designed a number of flexible vendor terms to suit all buyers. If you are looking to take advantage of the huge capital gains forecast for the region over the next 20 years or simply looking to build your dream home, or intend on taking it easy in your later years. The developers of <span class="indie">COTTONPARK</span> have developed, what we believe are the most flexible purchase options available in the property market today.
			</p>
			<h4>Off the Plan Purchase</h4>
			<p>
				You can choose to secure your beautifully designed architectural masterpiece for investment or personal use off the plan with no restrictions to resell your property in the future.
			</p>
			<p>
				<strong>AVAILABLE IN FUTURE STAGES FOR TOWNHOUSE AND APARTMENTS COMPLEXES ONLY</strong>
			</p>
			<h4>Residential Land</h4>
			<p>You can choose one of our residential lots off the plan, via a LTSC or be one of the very first to take advantage of our advanced market investment strategy. But buying now before out plans are complete.</p>
			<p>
				<strong>
					VENDOR TERMS ARE AVAILABLE UPON REQUEST
				</strong>
			</p>
			<h4>
				Long Term Settlement Contract (LTSC)
			</h4>
			<p>
				LTSC contracts are fast becoming the staple in the sophisticated investors playbook. Savvy property investors around the globe are taking advantage of this new to market investment strategy that allows you to maximise returns and reduce downside risk.
			</p>
			<p>
				<strong>
					VENDOR TERMS AVAILABLE FROM <span class="red">AS LITTLE AS $99.00 Per Week</span>
				</strong>
			</p>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/Happy-Couple-Shaking-Hands.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			Conditions apply vendor terms are offered to approved prchasers only and are offered at teh discretion of the develpomers of <span class="indie">COTTONPARK</span>. The developers retain the right to withdraw this offer at anytime without notice.
		</div>

	</div>

	<?php
}
 
genesis();