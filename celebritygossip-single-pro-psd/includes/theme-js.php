<?php
if (!is_admin()) add_action( 'wp_print_scripts', 'm3_js' );
function m3_js( ) {
	wp_enqueue_script('jquery');    
	wp_enqueue_script( 'flexslider', get_bloginfo('template_directory').'/js/jquery.flexslider-min.js', array( 'jquery' ) );
	wp_enqueue_script( 'js', get_bloginfo('template_directory').'/js/js.js', array( 'jquery' ) );
	wp_enqueue_script( 'smallslider', get_bloginfo('template_directory').'/js/smallslider.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'ddsmoothmenu1', get_bloginfo('template_directory').'/js/ddsmoothmenu1.js', array( 'jquery' ) );
	}  
?>
