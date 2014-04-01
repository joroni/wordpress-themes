<?php
/**
 *
 * Template Name: Ready to Move
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
add_action( 'genesis_loop', 'ready_to_move' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function ready_to_move() {
	?>

	<div class="ready-to-move">

		<div class="ready-move-image">
			<img src="/wp-content/themes/ArionProperty/images/beachchairsphoto.jpg" alt="">
			<div class="highlight"></div>
		</div>

		<div class="move-content">
			<div class="left-section">
				<p class='large'>
					MAKE A POSITIVE CHANGE TO YOUR LIFE TODAY. 
					<strong>ACT NOW ON THIS INCREDIBLE</strong> OPPORTUNITY CALL OR EMAIL 7 DAYS <span class="red">info@ariongroup.com.au</span>
				</p>
				<p class='disclaimer desktop'>
					DISCLAIMER<br/>
					While every care is taken by 1835 Development Company Pty Ltd (ACN 167 206 840) As trustee for
					the 1835 Development Trust to ensure the accuracy of the data and information provided to you,
					1835 Development Company Pty Ltd As trustee for the 1835 Development Trust does not make any representations or warranties about its accuracy, reliability, completeness or suitability for any particular purpose and, to the extent permitted by law, 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust, its officers, agents and employees, disclaim all responsibility and liability (including without limitation, liability in negligence) for all expenses, losses, damages (including indirect or consequential damages) and costs which might be incurred as a result of the data being inaccurate or incomplete in any way and for any reason. 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust and its related entities, directors, officers and agents disclaim all liability and responsibility for any direct or indirect loss
					or damage which may be suffered by any recipient through relying on anything contained in or omitted from the 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust and/or touching and concerning any publications by 1835 Development Company Pty Ltd (ACN 167
					206 840) As trustee for the 1835 Development Trust. Information published by 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust should not be regarded as a substitute for professional legal, financial or real estate advice.
				</p>
			</div>
			<div class="right-section">
				<p>
					<span class="red large"><strong>ACT NOW DON'T DELAY 1800 177 199</strong></span>
				</p>
				<ul>
					<li>
						Avoid being disappointed. <span class="indie">COTTONPARK</span> is due to launch on Australia Day 2014.
					</li>
					<li>
						First to makret investors have been provided with an early opportunity to register their interest NOW prior to the launch of this to be iconis project.
					</li>
					<li>
						The <span class="indie">COTTONPARK</span> website will launch on the same day with a limited number of available positions in each property category, incuding but not limited to, Residential land, Townhouses and Apartment complexes, as stages are released.
					</li>
					<li>
						Develpoer vendor terms are available on a very limited basis and <span class="red">only to approved purchasers</span>.
					</li>
					<li>
						Terms and conditions are made available upon written request and at the sole discretion of the developer, its employees agents and contractors.
					</li>
					<li>
						To secure your position today contact teh developer direct on 1800 177 199 or email the developer at <span class="red">info@ariongroup.com.au</span> to register your interest.
					</li>
				</ul>
			</div>
			<div class="clear"></div>

			<p class='disclaimer mobile'>
				DISCLAIMER<br/>
				While every care is taken by 1835 Development Company Pty Ltd (ACN 167 206 840) As trustee for
				the 1835 Development Trust to ensure the accuracy of the data and information provided to you,
				1835 Development Company Pty Ltd As trustee for the 1835 Development Trust does not make any representations or warranties about its accuracy, reliability, completeness or suitability for any particular purpose and, to the extent permitted by law, 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust, its officers, agents and employees, disclaim all responsibility and liability (including without limitation, liability in negligence) for all expenses, losses, damages (including indirect or consequential damages) and costs which might be incurred as a result of the data being inaccurate or incomplete in any way and for any reason. 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust and its related entities, directors, officers and agents disclaim all liability and responsibility for any direct or indirect loss
				or damage which may be suffered by any recipient through relying on anything contained in or omitted from the 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust and/or touching and concerning any publications by 1835 Development Company Pty Ltd (ACN 167
				206 840) As trustee for the 1835 Development Trust. Information published by 1835 Development Company Pty Ltd As trustee for the 1835 Development Trust should not be regarded as a substitute for professional legal, financial or real estate advice.
			</p>

		</div>

	</div>

	<?php
}
 
genesis();