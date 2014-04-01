<?php
/**
 *
 * Template Name: Masterplan
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
add_action( 'genesis_loop', 'masterplan_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function masterplan_page() {
	?>

	<div class="masterplan">
		<div class="left-section">
			<img src="/wp-content/themes/ArionProperty/images/masterplan.jpg" alt="">
		</div>
		<div class="right-section">
			<p>
				When completed the $650M Master planned <span class='indie'>COTTONPARK</span> will be home to more than 2000 mixed residential, dwellings and over 9500 residents. Superb architecturally designed homes, beautiful sophisticated townhouses precincts are dotted throughout the development and a mix of European inspired designed low and medium rise apartment complexes draws you towards the town center. The town center is surrounded by a thoughtfully designed community and retail precinct abundant with restaurants and cafes, that characterise the rich multicultural essences the <span class='indie'>COTTONPARK</span> development. There is an plentiful array of quality day care centers and kindergartens, conveniently located within <span class='indie'>COTTONPARK</span>.
			</p>
			<p>
				The masterplan is currently traversing through the complex planning stages and being developed in consultation with the State and Local governments utilising the skills and expertise of Australia's leading environmental planners, Planit consulting group, who have planned some of Australia's most prestigious residential communities.
			</p>
			<ul>
				<li>
					An excellent selection of public and private schools, including western Melbourne's most prestigious Grammar school, renowned catholic schools and and an islamic college.
				</li>
				<li>
					Local campuses for the University of Melbourne and Victoria University are a short drive away.
				</li>
				<li>
					Long established shopping centers are close by, including Woodgrove Shopping center, Caroline Springs, Point Cook Town Centre and Werribee Plaza, and there are plans to develop a new Supercenter in the region to coincide with the completeion of the outer ring road..
				</li>
				<li>
					Surrounded by infrastructure and close to rail and freeways connections draws <span class='indie'>COTTONPARK</span> closer to Melbourne's CBD.
				</li>
			</ul>
		</div>
		<div class="clear"></div>

		<div class="masterplan-image-bottom">
			<img src="/wp-content/themes/ArionProperty/images/masterplan-2.jpg" alt="">
		</div>

		<div class="disclaimer-text">
			Cottonpark is a staged development, cost and dwelling numbers are estimates only.
		</div>

	</div>

	<?php
}
 
genesis();