<?php

add_theme_support( 'genesis-responsive-viewport' );

require( get_stylesheet_directory() . '/includes/header.php');

wp_enqueue_script( 'mobile-menu', '/wp-content/themes/ArionProperty/js/mobile-menu.js', array('jquery') );
wp_enqueue_script( 'jqueryTransit', '/wp-content/themes/ArionProperty/js/jquery.transit.0.9.9.js', array('jquery') );