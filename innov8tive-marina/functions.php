<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'innovative' );
define( 'CHILD_THEME_URL', 'http://thepixelista.com/themes/innovative' );

$content_width = apply_filters( 'content_width', 470, 400, 910 );

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'generate_viewport_meta_tag' );
function generate_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Provides markup for the #mobilenav section */
register_nav_menu('mobilenav' , __('mobile Navigation Menu', 'innovative'));
add_action('genesis_before_header', 'innovative_do_mobilenav');
function innovative_do_mobilenav() { ?>
	<div id="mobilenav">
	<div class="wrap">
	<?php if ( function_exists('wp_nav_menu') ) {
	$mobilenav = wp_nav_menu(array(
	'theme_location' => 'mobilenav',
	'container' => '',
	'menu_class' => 'mobilenav superfish',
	'echo' => 0,
	'fallback_cb' => false
	));
	echo $mobilenav;
	} ?>
	</div><!-- end .wrap -->
	</div><!-- end #mobilenav -->
<?php }

/** Add new image sizes */
add_image_size( 'home-bottom', 150, 225, true );
add_image_size( 'home-middle', 265, 150, true );
add_image_size( 'home-mini', 80, 80, true );
add_image_size( 'home-supermini', 65, 45, true );
add_image_size( 'primary-sidebar', 290, 150, true );

/** Create additional color style options */
add_theme_support( 'genesis-style-selector', array( 'innovative-yellow' => 'Yellow & Orange', 'innovative-turquoise' => 'Turquoise & Red' ) );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

/** Add support for custom background */
add_custom_background();

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 960, 'height' => 120, 'header_callback' => 'innovative_admin_style' ) );

/** Register a custom callback to style the custom header */
function innovative_admin_style() {

            $headimg = sprintf( '#header { background: url(%s) no-repeat center; min-height: %spx; }', get_header_image(), HEADER_IMAGE_HEIGHT );

            printf( '<style type="text/css">%1$s</style>', $headimg);
}

/** Add support for 4-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 4 );

/** Reposition the primary navigation */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );

/** Customize search button text */
add_filter( 'genesis_search_button_text', 'custom_search_button_text' );
function custom_search_button_text($text) {
	return esc_attr('Search');
}

/** Customize the post info function */
add_filter( 'genesis_post_info', 'innovative_post_info_filter' );
function innovative_post_info_filter( $post_info ) {

    return '[post_date] &middot; by [post_author_posts_link] &middot; [post_comments] [post_edit]';
}

/** Customize the post meta function */
add_filter( 'genesis_post_meta', 'innovative_post_meta_filter' );
function innovative_post_meta_filter( $post_meta ) {

	return '[post_categories before="Filed Under: "] &#x00b7; [post_tags before="Tagged: "]';
}

/** Remove the archive thumbnail from the blog page */
add_action( 'genesis_before_content', 'innovative_conditional_actions' );
function innovative_conditional_actions() {
    if( is_page_template( 'page_blog.php' ) && 'full' == genesis_get_option( 'content_archive' ) )
        remove_action( 'genesis_post_content', 'genesis_do_post_image' );
}

if( is_single && ! is_single('post') ) {
remove_action('genesis_before_post_content', 'genesis_post_info');
remove_action('genesis_after_post_content', 'genesis_post_meta');
}

/** Register widget areas */
genesis_register_sidebar( array(
	'id'			=> 'home-top',
	'name'			=> __( 'Home Top', 'innovative' ),
	'description'	=> __( 'This is the home top section.', 'innovative' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home Left', 'innovative' ),
	'description'	=> __( 'This is the home left section.', 'innovative' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home Right', 'innovative' ),
	'description'	=> __( 'This is the home right section.', 'innovative' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-bottom',
	'name'			=> __( 'Home Bottom', 'innovative' ),
	'description'	=> __( 'This is the home bottom section.', 'innovative' ),
) );

add_filter( 'genesis_footer_output', 'innovative_footer_output_filter', 10, 3 );
/**
* Amend footer content.
*
* @since 1.0
*
* @param string $output
* @param string $creds_text
* @return string HTML markup
*/
function innovative_footer_output_filter( $output, $creds_text ) {

$backtotop_text = '[footer_backtotop]';

$part_of = "Fork and Kniv is part of the <a target='_blank' href='http://broadbentmedia.com'>Broadbent Media</a> Group.";

$contact_us = "Contact Us: <a href='mailto:info@forkandkniv.com'>info@forkandkniv.com</a>";

$output = '<div class="footer"><div class="creds">' . $contact_us . ' | ' . $part_of . '</div></div><div class="gototop">' . $backtotop_text . '</div>';
return $output;

}

add_action( 'genesis_before_footer', 'before_footer' );

function before_footer() {
	include( 'before_footer.php' );
}

function setup_sidebars() {
	if( function_exists( 'register_sidebar' ) ) {

		register_sidebar(array('name' => 'OtherSiteFeedsLeft1','id' => 'OtherSiteFeedsLeft1','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle1','id' => 'OtherSiteFeedsMiddle1','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight1','id' => 'OtherSiteFeedsRight1','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft2','id' => 'OtherSiteFeedsLeft2','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle2','id' => 'OtherSiteFeedsMiddle2','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight2','id' => 'OtherSiteFeedsRight2','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft3','id' => 'OtherSiteFeedsLeft3','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle3','id' => 'OtherSiteFeedsMiddle3','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight3','id' => 'OtherSiteFeedsRight3','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));

		register_sidebar(array('name' => 'OtherSiteFeedsLeft4','id' => 'OtherSiteFeedsLeft4','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsMiddle4','id' => 'OtherSiteFeedsMiddle4','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => 'OtherSiteFeedsRight4','id' => 'OtherSiteFeedsRight4','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<h4 class="widgettitle">', 'after_title' => '</h4>'));
	}
}

add_action( 'after_setup_theme', 'setup_sidebars' );

add_action( 'genesis_meta', 'custom_css' );

function custom_css() {
	?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen" />

	<?php
}