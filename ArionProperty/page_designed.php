<?php
/**
 *
 * Template Name: Designed
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
add_action( 'genesis_loop', 'designed_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function designed_page() {
	?>

	<div class="designed">
		<div class="left-section">
			<div class="dbi-logo">
				<img src="/wp-content/themes/ArionProperty/images/logo-DBI-Design1.jpg" alt="">
			</div>

			<p>
				DBI Design (then Media Five) was incorporated in Australia in 1980. The core expertise of the firm was drawn from specialist hotel and resort firms based in California and Hawaii. During the development boom of that decade DBI Design quickly established a reputation for innovative design of large scale resorts and mixed use master plans, hotels and multi-unit residential projects. Early landmark projects include the Mirage Resorts in Port Douglas, Gold Coast and Princeville Hawaii.
			</p>
			<p>
				In addition to its impressive track record for the design of hotels, resorts and urban master planning, DBI is now a leader in tall (+100m) and super tall (+300m) building design and construction and is a recognised leader in sustainable high rise technology.
			</p>
			<p>
				DBI’s collaborative and rigorous approach ensures the best possible outcomes for the client, community and environment. All of their projects seek to place the human being at the centre of the built environment and deliver environmentally, culturally, socially and economically sustainable outcomes for our future. DBI is structured around the input of active directors, each intimately involved with the particular requirements of the project and its clients.
			</p>
		</div>
		<div class="right-section">

			<div class="mini-left">
				<img src="/wp-content/themes/ArionProperty/images/barry_lee.jpg" alt="">
			</div>
			<div class="mini-right">
				<h5>BARRY LEE IS A REGISTERED ARCHITECT WITH A FIRST CLASS HONOURS DEGREE IN ARCHITECTURE FROM THE UNIVERSITY OF SOUTH AUSTRALIA.</h5>
				<p>
					Barry has been responsible for the design of a number of major internationally recognised hi-rise buildings including the “Wave Tower” and “Q1 worlds tallest residential tower”, both silver medal winners in the Emporis World Skyscraper Awards and has been responsible for more than thirty other significant high-rise developments many of which have received professional accolades. In addition Barry has extensive experience in the field of resort master planning and 5 star international hotel design.
Barry’s philosophy is to combine a focus on human quality of life and environmental sustainability with dynamic and expressive architectural forms in an attempt to comfort and inspire. He seeks to transform “buildings” into architecture, and believes that all areas of a project deserve careful investigation and that the human condition can be transformed by good design.
				</p>
			</div>
			<div class="clear"></div>

			<img class='scale-image' src="/wp-content/themes/ArionProperty/images/DBI_historyBW.jpg" alt="">

		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			DBI are not affiliated with <span class="indie">COTTONPARK</span> or the developers of <span class="indie">COTTONPARK</span>. None of the views or opinions expressed in this information memorandum are the views of the DBI.
		</div>

	</div>

	<?php
}

genesis();