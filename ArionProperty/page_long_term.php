<?php
/**
 *
 * Template Name: Long Term Property
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
add_action( 'genesis_loop', 'long_term_plan' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function long_term_plan() {
	?>

	<div class="long-term">
		<div class="right-section">
			<ul>
				<li>
					Long term property settlements are used by professional property developers and investors to maximise potential upside capital gains.
				</li>
				<li>
					A long term property settlement is essentially a right to purchase a residential lot or lots, now at TODAYS price, and Settle at time in the future that you choose.
				</li>
				<li>
					LTSC offer greater upside potential with less risk.
				</li>
				<li>
					Higher return on capital with no out of pocket holding cost or expenses.
				</li>
				<li>
					This means investors can lock in today's prices and take advantage of the capital growth forecast between the date of purchase on sale and or settlement.
				</li>
			</ul>
		</div>
		<div class="left-section">
			<img src="/wp-content/themes/ArionProperty/images/ltsc-4.jpg" alt="">
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();