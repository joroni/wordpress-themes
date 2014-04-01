<?php
/**
 *
 * Template Name: Maximise Returns
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

	<div class="maximise-returns">
		<div class="maximise">
			<p>
				Long Term Settlement Contracts (LTSC) or an Call options as they are traditionally called, allow investors to BUY land NOW ( with a minimal capital outlay) at Todays Prices and capitalize on the capital growth during the term of the agreement, and settle on the property in a predetermined time frame, typically five (5) or ten (10) Years.
			</p>

			<p>
				Getting all the benefit of any capital gain over that period of time, <span class="red bold">without</span> being exposed to:
			</p>
			<ul>
				<li>
					Bank Debt
				</li>
				<li>
					Insurance Costs
				</li>
				<li>
					Land Rates and Taxes
				</li>
				<li>
					Tenancy Risk
				</li>
				<li>
					Personal Guarantees
				</li>
				<li>
					Interest Expenses
				</li>
				<li>
					Equity Risk
				</li>
			</ul>
		</div>

	</div>

	<?php
}
 
genesis();