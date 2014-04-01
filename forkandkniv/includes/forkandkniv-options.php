<?php
 
/**
 * Social Settings
 *
 * This file registers the Social settings to the Theme Settings, to be used in the nav bar.
 *
 * @package      Client Name
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
 
 
/**
 * Register Defaults
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 * @param array $defaults
 * @return array modified defaults
 *
 */
 
function fk_social_defaults( $defaults ) {
 
	$defaults['fish_category'] = '';
	$defaults['swedish_category'] = '';
	$defaults['chicken_category'] = '';
	$defaults['pork_category'] = '';
	$defaults['lamb_category'] = '';
	$defaults['facebook_url'] = '';
	$defaults['twitter_url'] = '';
	$defaults['google_plus_url'] = '';
	$defaults['instagram_url'] = '';
	$defaults['pinterest_url'] = '';
 
	return $defaults;
}
add_filter( 'genesis_theme_settings_defaults', 'fk_social_defaults' );
 
 
/**
 * Sanitization
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 */
 
function fk_register_social_sanitization_filters() {
	genesis_add_option_filter( 'no_html', GENESIS_SETTINGS_FIELD,
		array(
			'fish_category',
			'swedish_category',
			'chicken_category',
			'pork_category',
			'lamb_category'
		) );
}
add_action( 'genesis_settings_sanitizer_init', 'fk_register_social_sanitization_filters' );
 
 
/**
 * Register Metabox
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 * @param string $_genesis_theme_settings_pagehook
 */
 
function fk_register_social_settings_box( $_genesis_theme_settings_pagehook ) {
	add_meta_box('fk-category-slugs', 'Category Slugs', 'fk_category_slugs', $_genesis_theme_settings_pagehook, 'main', 'high');
	add_meta_box('fk-social-settings', 'Social Links', 'fk_social_settings_box', $_genesis_theme_settings_pagehook, 'main', 'high');
}
add_action('genesis_theme_settings_metaboxes', 'fk_register_social_settings_box');
 
/**
 * Create Metabox
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 */
 
 function fk_social_settings_box() {
 	?>

 	<p>Facebook Url:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[facebook_url]" value="<?php echo esc_attr( genesis_get_option('facebook_url') ); ?>" size="50" /> </p>

	<p>Twitter Url:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[twitter_url]" value="<?php echo esc_attr( genesis_get_option('twitter_url') ); ?>" size="50" /> </p>

	<p>Google Plus Url:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[google_plus_url]" value="<?php echo esc_attr( genesis_get_option('google_plus_url') ); ?>" size="50" /> </p>

	<p>Instagram Url:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[instagram_url]" value="<?php echo esc_attr( genesis_get_option('instagram_url') ); ?>" size="50" /> </p>

	<p>Pinterest Url:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[pinterest_url]" value="<?php echo esc_attr( genesis_get_option('pinterest_url') ); ?>" size="50" /> </p>

	<?php

 }

function fk_category_slugs() {
	?>
 
	<p>Fish Category Slug:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[fish_category]" value="<?php echo esc_attr( genesis_get_option('fish_category') ); ?>" size="50" /> </p>
 
	<p>Swedish Category Slug:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[swedish_category]" value="<?php echo esc_attr( genesis_get_option('swedish_category') ); ?>" size="50" /> </p>

	<p>Chicken Category Slug:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[chicken_category]" value="<?php echo esc_attr( genesis_get_option('chicken_category') ); ?>" size="50" /> </p>

	<p>Pork Category Slug:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[pork_category]" value="<?php echo esc_attr( genesis_get_option('pork_category') ); ?>" size="50" /> </p>

	<p>Lamb Category Slug:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[lamb_category]" value="<?php echo esc_attr( genesis_get_option('lamb_category') ); ?>" size="50" /> </p>
 
	<?php
}