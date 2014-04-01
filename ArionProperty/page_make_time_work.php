<?php
/**
 *
 * Template Name: Make Time Work 2
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
add_action( 'genesis_loop', 'make_time_work' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function make_time_work() {
	?>

	<div class="make-time-work">
		<ul>
			<li>
				A LTSC gives you all the benefits of a traditional property purchase without the need for bank debt,equity, tenants and on going cost.
			</li>
			<li>
				Your contract is direct with the developer there are no third parties involved.No Banks No Agents.
			</li>
			<li>
				You can flip on resell your contract with anyone at any time at no cost.
			</li>
			<li>
				You are not locked in. If for any reason you wish to terminate your contract, you can terminate and walk away.No Questions asked.
			</li>
			<li>
				Buy Land today and settle on it after the gowth without any of the ongoing cost and risk involved with traditional property purchases.
			</li>
		</ul>

		<br/>

		<img src="/wp-content/themes/ArionProperty/images/warren_buffet.jpg" alt="">

	</div>

	<?php
}

genesis();