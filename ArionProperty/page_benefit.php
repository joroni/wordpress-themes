<?php
/**
 *
 * Template Name: Benefit
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
add_action( 'genesis_loop', 'benefits_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function benefits_page() {
	?>

	<div class="benefit">
		
		<div class="section">
			<div class="left">
				<img src="/wp-content/themes/ArionProperty/images/family-build-house.jpg" alt="">
			</div>
			<div class="right">
				<h5>FIRST HOME BUYERS</h5>
				<p>
					Planning for your future has never been easier, first home buyers looking to enter the market a long term property settlement allows you to accrue capital gains during the term of your long term settlement, growing your equity and giving you, the cash and greater ability to build your dream home first time. Borrow less and build your dream home. A must consider for first home buyer. This is very important in today’s market with housing affordability in Australia amongst the worst in the world.
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<div class="section">
			<div class="left">
				<img src="/wp-content/themes/ArionProperty/images/money-house.jpg" alt="">
			</div>
			<div class="right">
				<h5>PROPERTY INVESTORS</h5>
				<p>
					Long Term Property Settlements provider greater flexibility to serious property investors. For those investors planning to take advantage of healthy capital gains forecast over the next decade. Long Term Property Settlements are a must. Investors of Long Term Property Settlements get access to more flexible terms and capacity to access more markets and higher possible return without having the burden of interest cost, and out of pocket expenses as well as not having to concern yourself with rogue tenants and expensive insurance cost.
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<div class="section">
			<div class="left">
				<img src="/wp-content/themes/ArionProperty/images/happy-old-couple.jpg" alt="">
			</div>
			<div class="right">
				<h5>EMPTY NESTERS</h5>
				<p>
					Much like the first home buyer an empty nester may accrue additional equity in the property before settlement giving them more flexibility to put it towards additional investments, retirement planning or a better lifestyle.
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<div class="section">
			<div class="left">
				<img src="/wp-content/themes/ArionProperty/images/house-egg.jpg" alt="">
			</div>
			<div class="right">
				<h5>SELF MANAGED SUPER FUND TRUSTEES</h5>
				<p>
					Long Term Property Settlements are great for the longer term investment strategies of Self Managed Super Funds during the accumulation phase of a SMSF. A Long Term Property settlement can provide exposure to the property market without the complications of satisfying Self Managed Super Fund lending criteria and without the burden of any bank debt.
				</p>
			</div>
			<div class="clear"></div>
		</div>

		<div class="disclaimer-text">Prospective buyers should make their own investigations and enquiries when considering the purchase of a property of LTSC within <span class="indie">COTTONPARK</span></div>

	</div>

	<?php
}
 
genesis();