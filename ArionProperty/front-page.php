<?php

remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// add_action( 'genesis_header', 'genesis_header_markup_open', 5 );
// add_action( 'genesis_header', 'custom_header' );
// add_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_sub_nav');

remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_front_page' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function custom_front_page() {
	?>

	<div class="front-content">
		<div class="mobile-nav-container">
			<div class="toggle-mobile-nav mobile-menu-toggle"></div>
		</div>
		<div class="left-content">
			<div class="title">
				<a href="<?php echo home_url(); ?>">COTTONPARK</a>
			</div>
			<div class="site-tag">
				A Master Planned Residential Community
			</div>
			<div class="left-image">
				<img src="/wp-content/themes/ArionProperty/images/woman-blue-smoke.jpg" alt="">
			</div>
		</div>
		<div class="right-content">
			<div class="right-image">
				<img src="/wp-content/themes/ArionProperty/images/melbourne-morning.jpg" alt="">
			</div>
			<div class="location">
				Mount Cottrell, Melbourne, Victoria
			</div>
			<div class="cool-change">
				Time for a Cool Change
			</div>
		</div>

		<div class="clear"></div>
	</div>

	<?php
}

function contact_box() {
	?>

	<div class="contact-box">
		<div class="left-triangle"></div>
		<div class="right-triangle"></div>
		<div class="contact-box-content">
			<img class='background-image' src='/wp-content/themes/ArionProperty/images/leaf-background-right.png' />

			<div class="more-information">
				For more information call<br/>
				<span>1800 177 199</span><br/>
				Or fill out your details here
			</div>

			<div class="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="19" title="Footer Contact Form"]'); ?>
			</div>
		</div>
	</div>

	<?php
}


genesis();