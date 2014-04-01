<?php
/**
 *
 * Template Name: Total Freedom
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
add_action( 'genesis_loop', 'total_freedom' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function total_freedom() {
	?>

	<div class="freedom">
		<div class="left-section">
			<p>
				You can on sell your LTSC at <span class="underline">anytime</span> to:

				<ul>
					<li>
						Professional Investors
					</li>
					<li>
						Resellers
					</li>
					<li>
						Buyers just like yourself
					</li>
					<li>
						Or to anyone at anytime!!
					</li>
				</ul>
			</p>

			<p>
				Or you can hold on and sell your LTSC at or prior to settlement
			</p>
			<p>
				Or settle and build your dream home
			</p>
			<p>
				Gift to family, friends or charities
			</p>
			<p>
				There are no Foreign Investment Review Board restrictions for LTSC
			</p>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/beach-family.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			<span class="indie">COTTONPARK</span> and the developers do not guarantee your ability to on sell your long term settlement contract at anytime at any future date
		</div>

	</div>

	<?php
}
 
genesis();