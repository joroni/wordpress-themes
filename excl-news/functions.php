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

	wp_enqueue_style('dark-style', CHILD_URL . '/dark.css' );
	
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

	if( function_exists( 'register_sidebar' ) ) {
		register_sidebar(array('name' => 'OtherSiteFeedsLeft1','id' => 'OtherSiteFeedsLeft1','description' => 'Left column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle1','id' => 'OtherSiteFeedsMiddle1','description' => 'Middle column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight1','id' => 'OtherSiteFeedsRight1','description' => 'Right column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft2','id' => 'OtherSiteFeedsLeft2','description' => 'Left column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle2','id' => 'OtherSiteFeedsMiddle2','description' => 'Middle column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight2','id' => 'OtherSiteFeedsRight2','description' => 'Right column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft3','id' => 'OtherSiteFeedsLeft3','description' => 'Left column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle3','id' => 'OtherSiteFeedsMiddle3','description' => 'Middle column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight3','id' => 'OtherSiteFeedsRight3','description' => 'Right column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft4','id' => 'OtherSiteFeedsLeft4','description' => 'Left column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle4','id' => 'OtherSiteFeedsMiddle4','description' => 'Middle column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight4','id' => 'OtherSiteFeedsRight4','description' => 'Right column, above footer', 'before_widget' => '<div class="small-logo">', 'after_widget' => '</div>', 'before_title' => '<h4 class="title">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'HomeMiddleAdSpace','id' => 'HomeMiddleAdSpace','description' => 'Wide Ad Space, middle of home page.', 'before_widget' => '<div>', 'after_widget' => '</div>'));
		register_sidebar(array('name' => 'HomeTopRightSidebar','id' => 'HomeTopRightSidebar','description' => 'Top Right Sidebar on Home Page', 'before_widget' => '<div class="widget-container">', 'after_widget' => '</div>'));
		register_sidebar(array('name' => 'HomeBottomRightSidebar','id' => 'HomeBottomRightSidebar','description' => 'Bottom Right Sidebar on Home Page', 'before_widget' => '<div class="widget-container">', 'after_widget' => '</div>'));

		register_sidebar(array('name' => 'SearchArea1','id' => 'SearchArea1','description' => 'Search box in header', 'before_widget' => '<div>', 'after_widget' => '</div>'));
		// register_sidebar(array('name' => 'TopWrapAd','id' => 'TopWrapAd','description' => 'The top ad', 'before_widget' => '', 'after_widget' => ''));


		register_sidebar(array('name' => 'TopStoriesAd','id' => 'TopStoriesAd','description' => 'Ad in Top Stories Section', 'before_widget' => '<div>', 'after_widget' => '</div>'));
		register_sidebar(array('name' => 'HomeSecondColumnAd','id' => 'HomeSecondColumnAd','description' => 'Ad in Second column of Home page', 'before_widget' => '', 'after_widget' => ''));
		register_sidebar(array('name' => 'HomeBottomMiddleAd','id' => 'HomeBottomMiddleAd','description' => 'Home Bottom Middle ad', 'before_widget' => '', 'after_widget' => ''));
		register_sidebar(array('name' => 'TopMiddleAd','id' => 'TopMiddleAd','description' => 'Ad at the top of every page', 'before_widget' => '', 'after_widget' => ''));
		register_sidebar(array('name' => 'SingleBottomMiddleAd','id' => 'SingleBottomMiddleAd','description' => 'Ad at the bottom of single pages', 'before_widget' => '', 'after_widget' => ''));
		register_sidebar(array('name' => 'InternationalColumnAd','id' => 'InternationalColumnAd','description' => 'Ad at the bottom of single pages', 'before_widget' => '', 'after_widget' => ''));
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

// CUSTOMIZATIONS

include( get_stylesheet_directory() . '/includes/excl-news-options.php');
include( get_stylesheet_directory() . '/includes/mobile-nav.php');
include( get_stylesheet_directory() . '/includes/social-media.php');

wp_enqueue_script( 'mobile-menu', '/wp-content/themes/excl-news/js/mobile-menu.js', array('jquery') );
wp_enqueue_script( 'topStories', '/wp-content/themes/excl-news/js/jquery.topstories.js', array('jquery') );
wp_enqueue_script( 'jqueryTransit', '/wp-content/themes/excl-news/js/jquery.transit.0.9.9.js', array('jquery') );

add_action( 'genesis_before_content_sidebar_wrap', 'page_top_banner_ad' );
add_action( 'genesis_before_footer', 'footer_ad' );

function footer_ad() {
	insertAd('SingleBottomMiddleAd', array(
		'class' => 'single-bottom-middle-ad'
	));
}

function page_top_banner_ad() {
	insertAd('TopMiddleAd', array(
		'class' => 'top-middle-banner-ad'
	));
}


/*
 *	Echo's a widget with the correct wrapping elements with options
 * 	By default $widgetId will also be added as class unless the 'idAsClass' option is false. 
 * 	'class' option param will always be used if it exists.
*/
function insertAd($widgetId, $options = array()) {
	$idAsClass = isset($options['idAsClass']) ? !! $options['idAsClass'] : true;

	if ( $idAsClass )
		$class = isset($options['class']) ? $options['class'] : $widgetId;
	else
		$class = isset($options['class']) ? $options['class'] : '';

	?>
	<div class="ad-outer-container <?php echo $class ?>">
		<div class="ad-container">
			<?php dynamic_sidebar($widgetId); ?>
		</div>
	</div>
	<?php
}

/*
 *	Registers a widget with defaults, a shortcut function
 *	@param $options {Array or String} Either an options array for register_sidebar() or a string corresponding to the 'id' options param
 *
 */
function registerWidget($options) {
	if ( ! is_array($options) ) {
		$options = array( 'id' => $options );
	}

	if( function_exists('register_sidebar') ) {
		$options['name']			= isset($options['name'])			? $options['name']			: $options['id'];
		$options['before_widget']	= isset($options['before_widget'])	? $options['before_widget']	: '';
		$options['after_widget']	= isset($options['after_widget'])	? $options['after_widget']	: '';
		$options['before_title']	= isset($options['before_title'])	? $options['before_title']	: '';
		$options['after_title']		= isset($options['after_title'])	? $options['after_title']	: '';

		register_sidebar($options);
	}
}

registerWidget('ad-headerBanner');

function adHeaderBanner() {
	insertAd('ad-headerBanner');
}

add_action( 'genesis_before_wrap', 'adHeaderBanner' );

registerWidget(array(
	'id' => 'footerDisclaimer',
));

function footerDisclaimer() {
	$name = get_bloginfo('name');

	if ( preg_match('/sport/i', $name) ) {
		?>
		<div class="contantDetails" style="text-align: center;">
			Contact Us: <a href="mailto:info@exclusivelysport.com">info@exclusivelysport.com</a>
			<br/>
			<div class="contactAddress" style="text-align: center;padding: 12px;font-size:90%">
				Level 19 Two International Finance Centre<br/>
				8 Finance Street, Central<br/>
				Hong Kong, China
			</div>

			<p><strong>Exclusively Sport is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong></p>
		</div>
		<?php
	} elseif ( preg_match('/news/i', $name) ) {
		?>
		<div class="contantDetails" style="text-align: center;">
			Contact us: <a href="mailto:info@exclusivelynews.com">info@exclusivelynews.com</a>
			<br/>
			<div class="contactAddress" style="text-align: center;padding: 12px;font-size:90%">
				Level 19 Two International Finance Centre<br/>
				8 Finance Street, Central<br/>
				Hong Kong, China
			</div>
			<p><strong>Exclusively News is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong></p>
		</div>
		<?php
	}
	?>
		<div style="margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;" class="disclaimer">
		<p>
		The Owner t/a Broadbent Media cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br>
		The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br>
		The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br>
		The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br>
		The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
		</p>
		</div>
	<?php
}

add_action( 'genesis_after_footer', 'footerDisclaimer' );



