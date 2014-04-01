<?php
/**
 * Template Name: Default Template
**/

remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

add_action( 'genesis_header', 'genesis_header_markup_open', 5 );
add_action( 'genesis_header', 'custom_header' );
add_action( 'genesis_header', 'genesis_header_markup_close', 15 );

remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_sub_nav');
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

add_action( 'genesis_after_header', 'insert_vslider' );

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'contact_box' );

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

function insert_vslider() {
	if(function_exists('vslider')){ vslider('property_slider'); }
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