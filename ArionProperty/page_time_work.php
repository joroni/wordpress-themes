<?php
/**
 *
 * Template Name: Make Time Work
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
add_action( 'genesis_loop', 'time_work' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function time_work() {
	?>

	<div class="time-work">
		<div class="left-section">
			<img src="/wp-content/themes/ArionProperty/images/masterplan.jpg" alt="">
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/woman-relaxed.jpg" alt="">

			<ul>
				<li>NO BANK DEBT</li>
				<li>NO MORTGAGE</li>
				<li>NO TENANTS</li>
				<li>NO CREDIT RISK</li>
				<li>NO INSURANCE COST</li>
				<li>NO EQUITY REQUIREMENTS</li>
				<li>NO RATES</li>
				<li>NO MAINTENANCE</li>
			</ul>
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			Growth Forecasts are indicative only and only used as an example. Prospective buyers should make their own equiries and investigations. The developers do not provide guarantees as to the future growth.
		</div>

	</div>

	<?php
}
 
genesis();