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
 
function en_defaults( $defaults ) {
 
	$defaults['home_cat_1'] = '';
	$defaults['home_cat_2'] = '';
	$defaults['home_cat_3'] = '';
	$defaults['home_cat_4'] = '';
	$defaults['home_cat_5'] = '';
	$defaults['home_cat_6'] = '';
 
	return $defaults;
}
add_filter( 'genesis_theme_settings_defaults', 'en_defaults' );
 
 
/**
 * Sanitization
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 */
 
function en_register_social_sanitization_filters() {
	genesis_add_option_filter( 'no_html', GENESIS_SETTINGS_FIELD,
		array(
			'home_cat_1',
			'home_cat_2',
			'home_cat_3',
			'home_cat_4',
			'home_cat_5',
			'home_cat_6',
		) );
}
add_action( 'genesis_settings_sanitizer_init', 'en_register_social_sanitization_filters' );
 
 
/**
 * Register Metabox
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 * @param string $_genesis_theme_settings_pagehook
 */
 
function en_register_social_settings_box( $_genesis_theme_settings_pagehook ) {
	add_meta_box('en-home-cats', 'Home Page Categories', 'en_home_categories', $_genesis_theme_settings_pagehook, 'main', 'high');
}
add_action('genesis_theme_settings_metaboxes', 'en_register_social_settings_box');
 
/**
 * Create Metabox
 * @author Bill Erickson
 * @link http://www.billerickson.net/genesis-theme-options/
 *
 */
 
 function en_home_categories() {
 	?>

 	<p>Category 1:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_1]" value="<?php echo esc_attr( genesis_get_option('home_cat_1') ); ?>" size="50" /> </p>

	<p>Category 2:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_2]" value="<?php echo esc_attr( genesis_get_option('home_cat_2') ); ?>" size="50" /> </p>

	<p>Category 3:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_3]" value="<?php echo esc_attr( genesis_get_option('home_cat_3') ); ?>" size="50" /> </p>

	<p>Category 4:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_4]" value="<?php echo esc_attr( genesis_get_option('home_cat_4') ); ?>" size="50" /> </p>

	<p>Category 5:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_5]" value="<?php echo esc_attr( genesis_get_option('home_cat_5') ); ?>" size="50" /> </p>

	<p>Category 6:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[home_cat_6]" value="<?php echo esc_attr( genesis_get_option('home_cat_6') ); ?>" size="50" /> </p>

	<?php

 }