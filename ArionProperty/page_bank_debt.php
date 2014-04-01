<?php
/**
 *
 * Template Name: Bank Debt
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
add_action( 'genesis_loop', 'bank_debt' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function bank_debt() {
	?>

	<div class="bank-debt">
		<div class="left-section">
			<p>
				Traditional property purchasing methods are fast becoming a thing of the past. Thousands of savvy investors are now using LTSC* to benefit from the resurging property market.
			</p>
			<p>
				Here’s WHY! Below is a list of the funds required to buy property using the traditional property purchasing method:
			</p>
			<div class="table-row">
				<div class="table-left">
					Property Price <sup>*</sup>
				</div>
				<div class="table-right">
					$440,000.00
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Deposit Required <sup>**</sup>
				</div>
				<div class="table-right">
					<span class="red">$88,000.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Stamp Duty <sup>***</sup>
				</div>
				<div class="table-right">
					<span class="red">$21,470.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Mortgage Registration Fee
				</div>
				<div class="table-right">
					<span class="red">$108.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Transfer Fee
				</div>
				<div class="table-right">
					<span class="red">$1,214.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Legal Conveyancing
				</div>
				<div class="table-right">
					<span class="red">$1,000.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Bank Application Fee
				</div>
				<div class="table-right">
					<span class="red">$990.00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-row">
				<div class="table-left">
					Inspection/Misc Cost
				</div>
				<div class="table-right">
					<span class="red">$2,000.00</span>
				</div>
				<div class="clear"></div>
			</div>

			<div class="table-row total">
				<div class="table-left">
					<span class="bold red">TOTAL EQUITY OR CASH REQ</span>
				</div>
				<div class="table-right">
					<span class="red"><strong>$114,782.00</strong></span>
				</div>
				<div class="clear"></div>
			</div>

			<div class="disclaimer-text">
				**typical equity contribution of 20% of valuation. Some banks and institutions do accept a lesser contribution<br/>
				<br/>
				***Based on stamp duty in the state of Victoria. Stamp duty varies state by state.<br/>
				<br/>
				*A LTSC is an option contract to purchase land from the developer
			</div>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/house-cage.jpg" alt="">
		</div>
		<div class="clear"></div>

	</div>

	<?php
}
 
genesis();