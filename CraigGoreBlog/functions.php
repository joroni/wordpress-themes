<?php

/**
 * Custom amendments for the theme.
 *
 * @category   Genesis_Sandbox
 * @package    Functions
 * @subpackage Functions
 * @author     Travis Smith and Jonathan Perez
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://surefirewebservices.com/
 * @since      1.1.0
 */

// Initialize Sandbox ** DON'T REMOVE **
require_once( get_stylesheet_directory() . '/lib/init.php');

add_action( 'genesis_setup', 'gs_theme_setup', 15 );

//Theme Set Up Function
function gs_theme_setup() {
	/** 
	 * 01 Set width of oEmbed
	 * genesis_content_width() will be applied; Filters the content width based on the user selected layout.
	 *
	 * @see genesis_content_width()
	 * @param integer $default Default width
	 * @param integer $small Small width
	 * @param integer $large Large width
	 */
	$content_width = apply_filters( 'content_width', 600, 430, 920 );

	add_filter( 'stylesheet_uri', 'custom_replace_default_style_sheet', 10, 2 );
	function custom_replace_default_style_sheet() {
		return CHILD_URL . '/style.css?' . time();
	}
	
	//Custom Image Sizes
	add_image_size( 'featured-image', 225, 160, TRUE );
	
	// Enable Custom Background
	add_theme_support( 'custom-background' );

	// Enable Custom Header
	//add_theme_support('genesis-custom-header');


	// Add support for structural wraps
	add_theme_support( 'genesis-structural-wraps', array(
		'header',
		'nav',
		'subnav',
		'inner',
		'footer-widgets',
		'footer'
	) );

	/**
	 * 07 Footer Widgets
	 * Add support for 3-column footer widgets
	 * Change 3 for support of up to 6 footer widgets (automatically styled for layout)
	 */
	add_theme_support( 'genesis-footer-widgets', 3 );

	/**
	 * 08 Genesis Menus
	 * Genesis Sandbox comes with 4 navigation systems built-in ready.
	 * Delete any menu systems that you do not wish to use.
	 */
	add_theme_support(
		'genesis-menus', 
		array(
			'primary'   => __( 'Primary Navigation Menu', CHILD_DOMAIN ), 
			'secondary' => __( 'Secondary Navigation Menu', CHILD_DOMAIN ),
			'footer'    => __( 'Footer Navigation Menu', CHILD_DOMAIN ),
			'mobile'    => __( 'Mobile Navigation Menu', CHILD_DOMAIN ),
		)
	);
	
	// Add Mobile Navigation
	add_action( 'genesis_before', 'gs_mobile_navigation', 5 );
	
	// Enable Custom Footer
	remove_action( 'genesis_footer', 'genesis_do_footer' );
	add_action( 'genesis_footer', 'gs_do_footer' );
	
	//Enqueue Sandbox Scripts
	add_action( 'wp_enqueue_scripts', 'gs_enqueue_scripts' );
	
	/**
	 * 13 Editor Styles
	 * Takes a stylesheet string or an array of stylesheets.
	 * Default: editor-style.css 
	 */
	//add_editor_style();
	
	
	// Register Sidebars
	gs_register_sidebars();
	
	// Unregister SuperFish - Won't be needed in 2.0	
	add_action( 'wp_enqueue_scripts', 'gs_unregister_superfish' );
	function gs_unregister_superfish() {
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );
	}

} // End of Set Up Function

// Register Sidebars
function gs_register_sidebars() {
	$sidebars = array(
		array(
			'id'			=> 'home-top',
			'name'			=> __( 'Home Top', CHILD_DOMAIN ),
			'description'	=> __( 'This is the top homepage section.', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'home-left',
			'name'			=> __( 'Home Left', CHILD_DOMAIN ),
			'description'	=> __( 'This is the homepage left section.', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'home-right',
			'name'			=> __( 'Home Right', CHILD_DOMAIN ),
			'description'	=> __( 'This is the homepage right section.', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'home-bottom',
			'name'			=> __( 'Home Bottom', CHILD_DOMAIN ),
			'description'	=> __( 'This is the homepage right section.', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'portfolio',
			'name'			=> __( 'Portfolio', CHILD_DOMAIN ),
			'description'	=> __( 'This is the portfolio page template', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'home-blog',
			'name'			=> __( 'Home Blog', CHILD_DOMAIN ),
			'description'	=> __( 'This is the home page blog section', CHILD_DOMAIN ),
		),
		array(
			'id'			=> 'home-media',
			'name'			=> __( 'Home Media', CHILD_DOMAIN ),
			'description'	=> __( 'This is the home page media section', CHILD_DOMAIN ),
		),
	);
	
	foreach ( $sidebars as $sidebar )
		genesis_register_sidebar( $sidebar );
}

/**
 * Enqueue and Register Scripts - Twitter Bootstrap, Font-Awesome, and Common.
 */
require_once('lib/scripts.php');

/**
 * Add navigation menu 
 * Required for each registered menu.
 * 
 * @uses gs_navigation() Sandbox Navigation Helper Function in gs-functions.php.
 */

//Add Mobile Menu
function gs_mobile_navigation() {
	
	$mobile_menu_args = array(
		'echo' => true,
	);
	
	gs_navigation( 'mobile', $mobile_menu_args );
}

//Add Footer Menu
function gs_footer_navigation() {
	
	$footer_menu_args = array(
		'echo' => true,
		'depth' => 1,
	);
	
	gs_navigation( 'footer', $footer_menu_args );
}

add_filter( 'genesis_nav_items', 'nav_to_upper', 10, 2 );
add_filter( 'wp_nav_menu_items', 'nav_to_upper', 10, 2 );

function nav_to_upper( $menu, $args ) {
	$pattern = "/(<li[^>]+><a[^>]+>)(.+)(<\/a><\/li>)/";
	$menu = preg_replace_callback( $pattern, 'to_upper_case', $menu );
	return $menu;
}

function to_upper_case( $text ) {
	return $text[1] . strtoupper( $text[2] ) . $text[3];
}

include( 'custom-footer.php' );

include( 'nav-social-icons.php' );

include( 'widgets/widgets.php' );

add_action( 'genesis_before', 'insert_facebook_js' );

function insert_facebook_js() {
	?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
}