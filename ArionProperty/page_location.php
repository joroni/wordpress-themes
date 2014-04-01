<?php
/**
 *
 * Template Name: Superb Location
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
add_action( 'genesis_loop', 'location' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function location() {
	?>

	<div class="location">
		<div class="text-section">
			<p>
				<span class="indie">COTTONPARK</span> is superbly located to take advantage of the <a href="http://www.vicroads.vic.gov.au/Home/RoadProjects/PlanningAndProposals/Melbourne/OuterMetropolitanRingE6TransportCorridor/" target="_blank">Outer Metropolitan Ring Road</a>, and the <a href="http://www.regionalraillink.vic.gov.au/" target="_blank">Regional Rail Link</a> which is already under construction due for completion in early 2016.
			</p>
			<p>
				Both projects will transform the transport corridors in Melbourne's western suburbs, making it easier to commute to the city and the northern suburbs, adding billions of dollars to property values as these projects complete.
			</p>
			<p>
				The billions of dollars in infrastructure spending in the area highlights the importance of the locality as a residential area to assist in supporting the continued growth of Melbourne.
			</p>
		</div>

		<img src="/wp-content/themes/ArionProperty/images/melbourne-life.jpg" alt="">

		<div class="disclaimer-text">
			Images are inspirational only
		</div>

	</div>

	<?php
}
 
genesis();