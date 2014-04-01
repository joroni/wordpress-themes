<?php
/**
 *
 * Template Name: Environment
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
add_action( 'genesis_loop', 'environment_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function environment_page() {
	?>

	<div class="environment">
		<div class="left-section">
			<img src="/wp-content/themes/ArionProperty/images/planit_consulting.png" alt="">
			<img class='boyd' src="/wp-content/themes/ArionProperty/images/boyd.jpg" alt="">
			<br/><br/>
			<p>
				Planit Consulting’s strategic and statutory planning skills are in high demand for the formation of Hope Island, a rapidly developing area of the Gold Coast. With the focus on modern, high quality outcomes, Planit is extensively involved with numerous major projects in this locality. Hope Island is one of the largest brownfield developments in recent years and multiple ownership has been an impediment to its development. Representing various clients, Planit has been actively engaged in coordinating development and planning.
			</p>
			<p>
				One of the larger and more significant developments Planit has been obtaining approvals for is Australand’s Cova, a $600 million master-planned marina community with over 1.5 kms of water frontage, individual dwellings, duplexes and apartments.
			</p>
			<p>
				Located on the point of the created internal island at the confluence of the eastern canal is Marina Point. A series of high rise towers of various heights has been designed around the marina to create a vibrant waterfront community.
			</p>
			<p>
				Marina Point, with its expansive waterfront vistas, will also include a small café/restaurant overlooking the water and public plaza. This feature will bring additional activity to the site’s waterfront, complementing its medium density residential nature.
			</p>
			<p>
				Planit brings years of expertise in truly integrated approaches to ecological, sustainable development across Australia.
			</p>
		</div>
		<div class="right-section">
			<img src="/wp-content/themes/ArionProperty/images/residential-house.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">Planit Consulting are not affiliated with <span class="indie">COTTONPARK</span> or the developers of <span class="indie">COTTONPARK</span></div>

	</div>

	<?php
}
 
genesis();