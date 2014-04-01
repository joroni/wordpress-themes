<?php
/**
 *
 * Template Name: 5 Year Vendor Terms
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
add_action( 'genesis_loop', 'five_vendor_terms' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function five_vendor_terms() {
	?>

	<div class="vendor-terms-5">
		<div class="left-section">
			<p>LTSC provide a convenient hassle free way to invest in property at a fraction of the cost of traditional property investing methods while at the same time limiting your your downside risk <span class="red bold">WITH NO BANK DEBT.</span></p>

			<p>
				Heres a typical LTSC SNAPSHOT
			</p>

			<div class="table-row">
				<div class="table-left">
					Property Price
				</div>
				<div class="table-right">
					$440,000.00 <sup>*</sup>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					LTSC FEE
				</div>
				<div class="table-right">
					$<span class="red bold">11,000.00</span><sup>**</sup>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Stamp Duty
				</div>
				<div class="table-right">
					$<span class="red bold"> NIL</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Mortgage Registration Fee
				</div>
				<div class="table-right">
					$<span class="red bold"> NIL</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Transfer Fee
				</div>
				<div class="table-right">
					$<span class="red bold"> NIL</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Legals
				</div>
				<div class="table-right">
					$<span class="red bold">1,500.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Bank Application Fee
				</div>
				<div class="table-right">
					$<span class="red bold"> NIL</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Inspection/Misc Cost
				</div>
				<div class="table-right">
					$<span class="red bold"> NIL</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row total">
				<div class="table-left">
					<span class="bold red">TOTAL EQUITY OR CASH REQ</span>
				</div>
				<div class="table-right">
					<span class="red"><strong>$12,500.00</strong></span>
				</div>
				<div class="clear"></div>
			</div>

			<div class="disclaimer-text">
				*Based on vendor terms over 5 years. The full fee is 45,000.00 if paid on signing of the contract. purchaser will be required to make 60 equal monthly payments of $447.00 on the 1st of every month from the date of contract signing
			</div>
		</div>
		<div class="right-section">
			
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();