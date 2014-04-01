<?php
/**
 *
 * Template Name: 10 Year Vendor Terms
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
add_action( 'genesis_loop', 'ten_year_vendor' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function ten_year_vendor() {
	?>

	<div class="vendor-terms-10">
		<div class="left-section">
			<p>The developer is also offering investors 10 Year LTSC on vendor terms. This will provide investors with exposure to the property market for 10* years allowing them to benefit from any capital gain that occurs over that period.</p>

			<p>
				<strong>10 Year LTSC Vendor Terms Secure property worth $220,000.00 for only:</strong>
			</p>

			<div class="table-row">
				<div class="table-left">
					Initial payment =
				</div>
				<div class="table-right">
					$11,000
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Legal fees =
				</div>
				<div class="table-right">
					$1,500
				</div>
				<div class="clear"></div>
			</div>
			<br/>
			<p>
				<span class="red">PLUS weekly payments are only $104 per week or:</span>
			</p>

			<div class="table-row">
				<div class="table-left">
					Monthly Payments =
				</div>
				<div class="table-right">
					$445.83 <sup>**</sup>
				</div>
			</div>

			<div class="table-row">
				<div class="table-left">
					Deferred Payment =
				</div>
				<div class="table-right">
					$24,000 <sup>***</sup>
				</div>
			</div>
			<br/>
			<div class="disclaimer-text">
				* this offer is available for a limited time only and may be withdrawn at anytime<br/>
				**based on 120 equal monthly payment over a ten year period<br/>
				***Deferred payments are on an approved basis only, all purchasers are subject to approval by the developer, the developer in its sole discretion has the right to withdraw this offer at anytime without giving notice in writing to do so.
			</div>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/donald_trump.jpg" alt="">
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();