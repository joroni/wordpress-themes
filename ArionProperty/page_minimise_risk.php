<?php
/**
 *
 * Template Name: Minimise Risk
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
add_action( 'genesis_loop', 'minimise_risk' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function minimise_risk() {
	?>

	<div class="minimise-risk">
		<div class="left-section">
			<p>
				Long Term Property Settlesments provide investors with all the benefits that come with direct property investment <strong>with greater upside potential.</strong>
			</p>
			<p>
				This is because you have:
			</p>
			<ul>
				<li>No interest rate risk</li>
				<li>No need to provide the bank with a personal guarantee upon signing the option;</li>
				<li>No need to apply for finance approval;</li>
				<li>No out of pocket expenses until settlement;</li>
				<li>No tenancy risk (You don't need tenants durng the option period);</li>
				<li>No tenancy insurance requirements;</li>
				<li>No mortgage insurance costs;</li>
				<li>No household insurance costs; and</li>
				<li>No security required</li>
			</ul>
			<br/>
			<p>
				Long Term Property Settlements provide investors with a secure way to take advantage of meduims to long term capital growth, whilst mitigating downside risks associated with a large market correction. At the same time options provide a fetile evnironment to take advantage of a growing secondary markey.
			</p>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/WallStreetSign.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			Prospective buyers should make their own investigations and enquiries when considering the purchase of a property or LTSC withing <span class="indie">COTTONPARK</span>.
		</div>

	</div>

	<?php
}
 
genesis();