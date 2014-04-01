<?php
set_post_thumbnail_size( 50, 50, true); // Normal Post Thumbnails

if(of_get_option('of_wpmumode') == 0) {
	add_image_size( 'gab_featured', 800, 9999 ); /* Featured Big Image (this is the source image to be resized with timthumb */
} else {
	/* Theme thumbnail sizes for WordPress multi user
	 * network installations. The image sizes below will  
	 * be used only when WPMU mode is activated on 
	 * theme options -> under General settings tab
	 */
	add_image_size( 'trns-featured', 342, 256, true ); // Featured Big Image
	add_image_size( 'trns-below_featured', 90, 80, true ); // Below Featured
	add_image_size( 'trns-primary_midcol', 60, 55, true ); // Primary top mid, and secondary content boxes small images
	add_image_size( 'trns-mainpage_photogal', 150, 113, true ); // Photo Gallery Bar on Mainpage
	add_image_size( 'trns-primarybottomtabs', 269, 201, true ); // primary bottom tabs
	add_image_size( 'trns-sbox_big', 292, 9999 ); // Secondary content big thumbnail
	add_image_size( 'trns-sbox_small', 55, 55, true ); // Secondary content small thumbnail
	add_image_size( 'trns-sidebar_posts', 78, 83, true ); // Sidebar posts
	add_image_size( 'trns-media', 208, 180, true ); // Media template thumbnails
	add_image_size( 'trns-media-overlay', 638, 9999 ); // Overlay image size for media archive		
	add_image_size( 'trns-archive_media', 190, 100, true ); // Archive Pages
	add_image_size( 'trns-archive-big', 280, 200, true ); // Archive Pages
	add_image_size( 'trns-arc2col', 300, 135, true ); // Archive Pages
	add_image_size( 'trns-mag1', 400, 225, true ); // Archive Pages
	add_image_size( 'trns-mag2', 100, 78, true ); // Archive Pages
	add_image_size( 'trns-mag3', 80, 63, true ); // Archive Pages
	add_image_size( 'trns-innerslide', 629, 9999 ); // Archive Pages
	add_image_size( 'ajaxtabs', 30, 30, true ); // Ajaxtabs Widget
	
}