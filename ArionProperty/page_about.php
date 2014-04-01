<?php
/**
 *
 * Template Name: About
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
add_action( 'genesis_loop', 'about_page' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function about_page() {
	?>

	<div class="about">
		<div class="left-section">
			<div class="text-section">
				<h2>COTTONPARK</h2>
				<img class='mobile-only' src="/wp-content/themes/ArionProperty/images/about-house-1.jpg" alt="">
				<p>
					<span class='indie'>COTTONPARK</span> will be a $650 million master planned residential community just 35 minutes west of Melbourne's CBD. Designed by world renowned architects DBI Internation and planned by Australias leading urban planners <span class='indie'>COTTONPARK</span> is located in Melbourne's hottest growth corridor - knows as the western "urban growth zone".
				</p>
				<p>
					Forecast to grow at a staggering 12% per annum for the next 20 years.
				</p>
				<p>
					State and federal governments have committed billions of dollars on infrastructure projects to satisfy the growing demand and needs of one of Australia's fastest growing and more sustainable municipalities.
				</p>

				<img class='mobile-only' src="/wp-content/themes/ArionProperty/images/about-house-2.jpg" alt="">

				<h3>Infrastructure Projects worth Billions</h3>

				<p>
					The total estimated investment for the <strong>Regional Rail Link Project</strong>, following the awarding of all major work package contracts and a cost review by the Victorian
					Coalition Government, is a staggering $5.507 billion. During Construction of the regional rail link more than 4000 jobs will be created.
				</p>
				<p>
					The outer ring road freeway which surrounds the cottonpark development is a further commitment by state and federal governments to the region with the freeway generating from than 3000 jobs, and and into the future and costing more than $2.1 billion dollars due to begin in the year 2020. In just 6 years time.
				</p>

				<img class='mobile-only' src="/wp-content/themes/ArionProperty/images/about-house-3.jpg" alt="">
			</div>
			<div class="image-section">
				<img class='desktop-only' src="/wp-content/themes/ArionProperty/images/about-house-1.jpg" alt="">
				<img class='desktop-only' src="/wp-content/themes/ArionProperty/images/about-house-2.jpg" alt="">
				<img class='desktop-only' src="/wp-content/themes/ArionProperty/images/about-house-3.jpg" alt="">
			</div>
			<div class="clear"></div>
		</div>
		<div class="right-section">
			<h3>An Increadible Opportunity</h3>
			<ul>
				<li>
					From 1976 to 2006 Melbourne property multiplied in value 7 times over, while land multiplied in value a staggering 14.5 times over, more than double the growth.
				</li>
				<li>
					Over the past 33 years in Australia land has multiplied in price by a minumum of 18 times (in one state by 68 times). Thats phenomenal growth in anyones language.
				</li>
				<li>
					Already committed infrastructure projects will continue to fuel this growth over the next twenty years with more than $10 billion committed to projects now and into the future.
				</li>
			</ul>

			<img src="/wp-content/themes/ArionProperty/images/about-house-4.jpg" alt="">
		</div>
		<div class="clear"></div>

		<div class="disclaimer-text">
			Images are inspirational only and may not depict actual properties.
		</div>

	</div>

	<?php
}

genesis();