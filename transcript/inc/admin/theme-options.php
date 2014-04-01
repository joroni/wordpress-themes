<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */
 
function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 * 
 */

function optionsframework_options() {

	// VARIABLES
	$GLOBALS['template_path'] = OF_DIRECTORY;
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$shortname = "of";
	$themeid = "_tr";
	
	// Image Alignment radio box
	$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

	// Image Links to Options
	$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

	//Default Arrays 
	$options_revealtype = array('OnMouseover', 'OnClick');
	$options_nr = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
	$options_inslider = array("Disable", "Tag-based", "Site Wide");
	$options_sort = array("ASC" => 'asc', 'desc' => 'desc');
	$options_order = array('id' => "id", 'name' => 'name', "count" => "count");
	$options_logo = array('text' => "Text Based Logo", "image" => "Image Based Logo");
	$options_feaslide = array("scrollUp", "scrollDown", "scrollLeft", "scrollRight", "turnUp", "turnDown", "turnLeft", "turnRight", "fade");

	//Stylesheets Reader
	$alt_stylesheet_path = OF_FILEPATH . '/styles/';
	$alt_stylesheets = array();
	
	// Pull all the categories into an array
	$options_categories = array(); 
	$options_categories_obj = get_categories('hide_empty=0');
	foreach ($options_categories_obj as $category) {
 	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	//Access the WordPress Pages via an Array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order'); 
	foreach ($options_pages_obj as $of_page) {
		$options_pages[$of_page->ID] = $of_page->post_name; }
	$options_pages_tmp = array_unshift($options_pages, "Select a page:");
	
	if ( is_dir($alt_stylesheet_path) ) {
		if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
			while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
				if(stristr($alt_stylesheet_file, ".css") !== false) {
					$alt_stylesheets[] = $alt_stylesheet_file;
				}
			} 
		}
	}

	//More Options
	$uploads_arr = wp_upload_dir();
	$all_uploads_path = $uploads_arr['path'];
	$all_uploads = get_option('of_uploads');
	$other_entries = array("Select a number:",1,"2","3",4,"5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
	$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
	$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
	
	// Pull all the pages into an array
	$options_pages = array(); 
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
 	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath = get_bloginfo('stylesheet_directory') . '/images/';
		
	$options = array();
		
$options[] = array( "name" => "General Settings",
                    "type" => "heading");
					
		$options[] = array( "name" => "Theme Stylesheet",
							"desc" => "Select your themes alternative color scheme (i.e., active style).",
							"id" => $shortname."_alt_stylesheet",
							"std" => "default.css",
							"type" => "select",
							"options" => $alt_stylesheets);
							
		$url =  get_bloginfo('stylesheet_directory') . '/inc/admin/images/';
		$options[] = array( "name" => "Select header style",
							"desc" => "Set your header either to display a single image or logo and 728px banner side by side.",
							"id" => $shortname."_header_type",
							"std" => "",
							"type" => "images",
							"options" => array(
								'logobanner' => $url . 'logobanner.gif',
								'singleimage' => $url . 'single-image.gif'));

		$options[] = array( "name" => "Header image (if single image selected)",
							"desc" => "If single image option is selected as header type, upload a header banner that is set to 970px width.",
							"id" => $shortname."_himageurl",
							"std" => "",
							"type" => "upload");
							
		$options[] = array( "name" => "Logo Type",
							"desc" => "If text-based logo is selected, set sitename and tagline on WordPress settings page.",
							"id" => $shortname."_logo_type",
							"std" => "Text Based Logo",
							"type" => "select",
							"options" => $options_logo); 

		$options[] = array( "name" => "Custom Logo",
							"desc" => "If image-based logo is selected, upload a logo for your theme, or specify the image address of your online logo. (http://yoursite.com/logo.png)",
							"id" => $shortname."_logo",
							"std" => "",
							"type" => "upload");
							
		$options[] = array( "name" => "Logo Padding Top",
							"desc" => "Set a padding value between logo and top line.",
							"id" => $shortname."_padding_top",
							"std" => "15",
							"class" => "mini",
							"type" => "text");	

		$options[] = array( "name" => "Logo Padding Bottom",
							"desc" => "Set a padding value between logo and bottom line.",
							"id" => $shortname."_padding_bottom",
							"std" => "15",
							"class" => "mini",
							"type" => "text");
							
		$options[] = array( "name" => "Logo Padding Left",
							"desc" => "Set a padding value between logo and left line.",
							"id" => $shortname."_padding_left",
							"std" => "15",
							"class" => "mini",
							"type" => "text");
							
		$options[] = array( "name" => "Custom Favicon",
							"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
							"id" => $shortname."_custom_favicon",
							"std" => "",
							"type" => "upload"); 
							
		$options[] = array( "name" => "RSS",
							"desc" => "Link to third party feed handler. <br/> [http://www.url.com]",
							"id" => $shortname."_rssaddr",
							"std" => "",
							"type" => "text"); 							

		$options[] = array( "name" => "Subscribe via Email",
							"desc" => "Email subscribe link. <br/> [http://feeds.feedburner.com/feedname]",
							"id" => $shortname."_feedemail",
							"std" => "",
							"type" => "text"); 							
		
		$options[] = array( "name" => "Tracking Code",
							"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
							"id" => $shortname."_google_analytics",
							"std" => "",
							"type" => "textarea"); 

			$options[] = array( "name" => "Post Meta",
							"desc" => "Display post details below single post page",
							"id" => $shortname."_entry_meta",
							"std" => 0,
							"type" => "checkbox");								
		
$options[] = array( "name" => "Navigation",
				"type" => "heading");			

		$options[] = array( "name" => "Custom Navigation",
							"desc" => "Replace primary navigation with a custom menu. [If selected, create a <a href='nav-menus.php' target='_blank'>custom menu</a>]",
							"id" => $shortname."_nav1",
							"std" => 0,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Replace secondary navigation with a custom menu. [If selected, create a <a href='nav-menus.php' target='_blank'>custom menu</a>]",
							"id" => $shortname."_nav2",
							"std" => 0,
							"type" => "checkbox");				

		$options[] = array( "desc" => "Replace footer navigation with a custom menu. [If selected, create a <a href='nav-menus.php' target='_blank'>custom menu</a>]",
							"id" => $shortname."_nav3",
							"std" => 0,
							"type" => "checkbox");											
														
		$options[] = array( "name" => "Sort Categories",
							"desc" => "Display categories in ascending or descending order",
							"id" => $shortname."_sort_cats",
							"std" => "Disable",
							"type" => "select",
							"class" => "mini",
							"options" => $options_sort);
							
		$options[] = array( "name" => "Order Categories",
							"desc" => "Display categories in alphabetical order, by category ID, or by the count of posts",
							"id" => $shortname."_order_cats",
							"std" => "name",
							"type" => "select",
							"class" => "mini",
							"options" => $options_order);
							
		$options[] = array( "name" => "Exclude Categories",
							"desc" => "ID number of cat(s) to exclude from navigation (eg 1,2,3,4) <a href='http://www.gabfirethemes.com/how-to-check-category-ids/' target='_blank'>How check category/page ID</a>",
							"id" => $shortname."_ex_cats",
							"std" => "",
							"class" => "mini",
							"type" => "text"); 
							
		$options[] = array( "name" => "Exclude Pages",
							"desc" => "ID number of page(s) to exclude from navigation (eg 1,2,3,4) <a href='http://www.gabfirethemes.com/how-to-check-category-ids/' target='_blank'>How check category/page ID</a>",
							"id" => $shortname."_ex_pages",
							"std" => "",
							"class" => "mini",
							"type" => "text");

$options[] = array( "name" => "Categories",
					"type" => "heading");

		$options[] = array( "name" => "Featured Slider",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_fea_cat",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
							
		$options[] = array( "desc" => "Display posts assigned this tag to be listed on featured slider. <br/> [Note: Category will be disregarded if a tag name is filled in].",
							"id" => $shortname.$themeid."_fea_tag",
							"class" => "mini",
							"type" => "text"); 
	
		$options[] = array( "desc" => "Display most recent post entries on featured slider instead of category or tag.",
							"id" => $shortname.$themeid."_fea_recent",
							"std" => 0,
							"type" => "checkbox");		

		$options[] = array( "desc" => "Number of posts to display.",
							"id" => $shortname.$themeid."_fea_nr",
							"std" => "6",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 				
		
		$options[] = array( "name" => "Below featured slider",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat2",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display.",
							"id" => $shortname.$themeid."_nr2",
							"std" => "2",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
							
		$options[] = array( "name" => "Primary middle column",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat3",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display.",
							"id" => $shortname.$themeid."_nr3",
							"std" => "6",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
								
		$options[] = array( "name" => "Media slider",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat4",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display.",
							"id" => $shortname.$themeid."_nr4",
							"std" => "14",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
							
		$options[] = array( "name" => "Tabbed Content #1",
							"desc" => "Select a category for tab #1.",
							"id" => $shortname.$themeid."_cat5",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Caption title for tab #1 <br />[If empty, selected category name will be used as caption].",
							"id" => $shortname.$themeid."_tabname1",
							"std" => "",
							"class" => "mini",
							"type" => "text");

		$options[] = array( "name" => "Tabbed Content #2",
							"desc" => "Select a category for tab #2.",
							"id" => $shortname.$themeid."_cat6",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Caption title for tab #2 <br />[If empty, selected category name will be used as caption].",
							"id" => $shortname.$themeid."_tabname2",
							"std" => "",
							"class" => "mini",
							"type" => "text");

		$options[] = array( "name" => "Tabbed Content #3",
							"desc" => "Select a category for tab #3.",
							"id" => $shortname.$themeid."_cat7",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Caption title for tab #3 <br />[If empty, selected category name will be used as caption].",
							"id" => $shortname.$themeid."_tabname3",
							"std" => "",
							"class" => "mini",
							"type" => "text");

		$options[] = array( "name" => "Tabbed Content #4",
							"desc" => "Select a category for tab #4.",
							"id" => $shortname.$themeid."_cat8",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Caption title for tab #4 <br />[If empty, selected category name will be used as caption].",
							"id" => $shortname.$themeid."_tabname4",
							"std" => "",
							"class" => "mini",
							"type" => "text");

		$options[] = array( "name" => "Tabbed Content #5",
							"desc" => "Select a category for tab #5.",
							"id" => $shortname.$themeid."_cat9",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Caption title for tab #5 <br />[If empty, selected category name will be used as caption].",
							"id" => $shortname.$themeid."_tabname5",
							"std" => "",
							"class" => "mini",
							"type" => "text");								
							
		$options[] = array( "name" => "Secondary content left top box",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat10",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display with big thumbnails.",
							"id" => $shortname.$themeid."_nr10a",
							"std" => "1",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
							
		$options[] = array( "desc" => "Number of posts to display with small thumbnails.",
							"id" => $shortname.$themeid."_nr10b",
							"std" => "3",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
							
		$options[] = array( "name" => "Secondary content left bottom box",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat11",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display with big thumbnails.",
							"id" => $shortname.$themeid."_nr11a",
							"std" => "1",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 
							
		$options[] = array( "desc" => "Number of posts to display with small thumbnails.",
							"id" => $shortname.$themeid."_nr11b",
							"std" => "3",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 					
							
							
		$options[] = array( "name" => "Home bottom sidebar",
							"desc" => "Select a category for entries.",
							"id" => $shortname.$themeid."_cat12",
							"std" => "1",
							"type" => "select",
							"options" => $options_categories);
													
		$options[] = array( "desc" => "Number of posts to display.",
							"id" => $shortname.$themeid."_nr12",
							"std" => "6",
							"class" => "mini",
							"type" => "select",
							"options" => $options_nr); 	
								
	
$options[] = array( "name" => "Sliders",
				"type" => "heading");
								
		$options[] = array( "name" => "Featured Slider",
							"desc" => "Enable auto rotation on featured slider.",
							"id" => $shortname.$themeid."_fea_rotate",
							"std" => 0,
							"type" => "checkbox");			
														
		$options[] = array( "desc" => "If auto rotation is enabled, define the pause time between 2 slides. [in seconds]",
							"id" => $shortname.$themeid."_fea_pause",
							"std" => "5",
							"class" => "mini",
							"type" => "text");

		$options[] = array( "desc" => "Change post when navigation link is clicked or hovered.",
							"id" => $shortname.$themeid."_fea_reveal",
							"std" => "OnClick",
							"type" => "select",
							"class" => "mini",
							"options" => $options_revealtype);

		$options[] = array( "name" => "Mainpage media gallery slider",
							"desc" => "Enable auto rotation on media gallery slider.",
							"id" => $shortname.$themeid."_media_rotate",
							"std" => 0,
							"type" => "checkbox");			
														
		$options[] = array( "desc" => "Pause time: between 2 consecutive slides. [in seconds]",
							"id" => $shortname.$themeid."_media_pause",
							"std" => "5",
							"class" => "mini",
							"type" => "text");
							
		$options[] = array( "desc" => "Specify the number of items to scroll. Value 2 will scroll 2 items at a time.",
							"id" => $shortname.$themeid."_media_scroll",
							"std" => "2",
							"class" => "mini",
							"type" => "text");
							
		$options[] = array( "desc" => "Rotation Speed: The speed of rotation when slider scrolls. [in seconds]",
							"id" => $shortname.$themeid."_media_speed",
							"std" => "2",
							"class" => "mini",
							"type" => "text");
	
		$options[] = array( "name" => "Inner-Page Slider",
							"desc" => "Automatically create slideshow of uploaded photos in post entries to be displayed below post title. [Note: Select options include displaying slider site-wide, tag-based, or to disable completely].",
							"id" => $shortname.$themeid."_inslider",
							"std" => "Disable",
							"type" => "select",
							"class" => "mini",
							"options" => $options_inslider);
							
		$options[] = array( "desc" => "If tag-based option is selected, display posts assigned this tag to be shown in inner-page slider. <br/> [Note: Posts with multiple image attachments and tagged with this key will display within slider].",
							"id" => $shortname.$themeid."_inslider_tag",
							"std" => "",
							"class" => "mini",
							"type" => "text"); 
							
		$options[] = array( "desc" => "Enable auto rotation for innerpage slider.",
							"id" => $shortname.$themeid."_inner_rotate",
							"std" => 0,
							"type" => "checkbox");	
							
		$options[] = array( "desc" => "(If auto rotate enabled) define pause time between 2 slides. [in seconds]",
							"id" => $shortname.$themeid."_inner_pause",
							"std" => "5",
							"class" => "mini",
							"type" => "text");
								
$options[] = array( "name" => "IMAGE HANDLING",
				"type" => "heading");

		$options[] = array( "name" => "Catch First Image",
							"desc" => "If enabled, built-in theme functions will scan post from top to bottom, catch the first image, and auto-generate a thumbnail for posts that do not have an image attached or custom field defined.",
							"id" => $shortname."_catch_img",
							"std" => 0,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Disable TimThumb and use WordPress Post Thumbnails instead [WPMU Mode] [Check only if you are having problems with front page thumbnails].",
							"id" => $shortname."_wpmumode",
							"std" => 0,
							"type" => "checkbox");

		$options[] = array( "name" => "Default 'No Image Found' photo",
							"desc" => "Enable on Featured slider",
							"id" => $shortname.$themeid."_end1",
							"std" => 1,
							"type" => "checkbox");

		$options[] = array( "desc" => "Enable below featured slider",
							"id" => $shortname.$themeid."_end2",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on right hand of featured slider",
							"id" => $shortname.$themeid."_end3",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on media slider",
							"id" => $shortname.$themeid."_end4",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on ajax tab #1",
							"id" => $shortname.$themeid."_end5",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on ajax tab #2",
							"id" => $shortname.$themeid."_end6",
							"std" => 1,
							"type" => "checkbox");
					
		$options[] = array( "desc" => "Enable on ajax tab #3",
							"id" => $shortname.$themeid."_end7",
							"std" => 1,
							"type" => "checkbox");
					
		$options[] = array( "desc" => "Enable on ajax tab #4",
							"id" => $shortname.$themeid."_end8",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on ajax tab #5",
							"id" => $shortname.$themeid."_end9",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on secondary content left block - top box",
							"id" => $shortname.$themeid."_end10",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on secondary content right block - top box",
							"id" => $shortname.$themeid."_end11",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on secondary content left block - bottom box",
							"id" => $shortname.$themeid."_end12",
							"std" => 1,
							"type" => "checkbox");
							
		$options[] = array( "desc" => "Enable on secondary content right block - bottom box",
							"id" => $shortname.$themeid."_end13",
							"std" => 1,
							"type" => "checkbox");							
							
		$options[] = array( "desc" => "Enable on sidebar posts",
							"id" => $shortname.$themeid."_end14",
							"std" => 1,
							"type" => "checkbox");		

$options[] = array( "name" => "MANAGE ADS",
				"type" => "heading");			

		$options[] = array( "name" => "728x90 Sitewide",
							"desc" => "728x90 sitewide ad - top of site",
							"id" => $shortname.$themeid."_ad1",
							"std" => "",
							"type" => "textarea"); 
							
		$options[] = array( "name" => "468x60 Sitewide",
							"desc" => "468x60 sitewide ad -  header of site",
							"id" => $shortname.$themeid."_ad2",
							"std" => "",
							"type" => "textarea"); 
			
		$options[] = array( "name" => "300x250 home - Sidebar",
							"desc" => "300x250 sidebar ad - Above widgets on mainpage upper sidebar",
							"id" => $shortname.$themeid."_ad3",
							"std" => "",
							"type" => "textarea"); 
							
		$options[] = array( "name" => "300x250 home - Ajax Tabs",
							"desc" => "300x250 Mainpage mid - On the left hand of ajax tabs on mainpage.",
							"id" => $shortname.$themeid."_ad4",
							"std" => "",
							"type" => "textarea"); 
		
		$options[] = array( "name" => "300x250 home - Sidebar",
							"desc" => "300x250 sidebar ad - Below widgets on mainpage bottom sidebar",
							"id" => $shortname.$themeid."_ad5",
							"std" => "",
							"type" => "textarea"); 
							
		$options[] = array( "name" => "300x250 Inner Sidebar",
							"desc" => "300x250 Innerpage sidebar ad - top",
							"id" => $shortname.$themeid."_ad6",
							"std" => "",
							"type" => "textarea"); 
							
		$options[] = array( "name" => "300x250 Inner Sidebar",
							"desc" => "300x250 Innerpage sidebar ad - bottom",
							"id" => $shortname.$themeid."_ad7",
							"std" => "",
							"type" => "textarea"); 
							
		$options[] = array( "name" => "468x60 Innerpage",
							"desc" => "468x60 Between post and comments",
							"id" => $shortname.$themeid."_ad8",
							"std" => "",
							"type" => "textarea"); 

$options[] = array( "name" => "Footer Options",
				"type" => "heading");

		$options[] = array( "name" => "Enable Custom Footer (Left)",
							"desc" => "Activate to add the custom text below to the theme footer.",
							"id" => $shortname.$themeid."_footer_left",
							"std" => 0,
							"type" => "checkbox");    

		$options[] = array( "name" => "Custom Text (Left)",
							"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
							"id" => $shortname.$themeid."_footer_left_text",
							"std" => "",
							"type" => "textarea");
								
		$options[] = array( "name" => "Enable Custom Footer (Right)",
							"desc" => "Activate to add the custom text below to the theme footer.",
							"id" => $shortname.$themeid."_footer_right",
							"std" => 0,
							"type" => "checkbox");    

		$options[] = array( "name" => "Custom Text (Right)",
							"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
							"id" => $shortname.$themeid."_footer_right_text",
							"std" => "",
							"type" => "textarea");
			
$options[] = array( "name" => "Miscellaneous",
					"type" => "heading");	
						
		$options[] = array(	"name" => "Media Category Template",
							"desc" => "ID number of cat(s) to use media gallery template for (seperate with comma if more than 1 category is entered)",
							"id" => $shortname.$themeid."_mediatmp",
							"std" => "",
							"class" => "mini",
							"type" => "text"); 

		$options[] = array(	"name" => "2 col category template",
							"desc" => "ID number of cat(s) to use 2 column category template (seperate with comma if more than 1 category is entered)",
							"id" => $shortname.$themeid."_2col",
							"std" => "",
							"class" => "mini",
							"type" => "text"); 	
							
		$options[] = array(	"name" => "Magazine style category template",
							"desc" => "ID number of cat(s) to use magazine style category template (seperate with comma if more than 1 category is entered)",
							"id" => $shortname.$themeid."_mag",
							"std" => "",
							"class" => "mini",
							"type" => "text"); 						

		$options[] = array( "desc" => "Display post author before excerpt on front page",
							"id" => $shortname.$themeid."_author",
							"std" => 0,
							"type" => "checkbox");	

		$options[] = array( "desc" => "Display post date before excerpt on front page",
							"id" => $shortname.$themeid."_date",
							"std" => 0,
							"type" => "checkbox");								
							
		$options[] = array( "name" => "Facebook",
							"desc" => "Link to Facebook account. <br/> [http://www.facebook.com/url]",
							"id" => $shortname.$themeid."_facebook",
							"std" => "",
							"type" => "text"); 
							
		$options[] = array( "name" => "Twitter",
							"desc" => "Link to Twitter Account. <br/> [http://www.twitter.com/username]",
							"id" => $shortname.$themeid."_twitter",
							"std" => "",
							"type" => "text"); 
										
		$options[] = array( "name" => "Facebook Meta Tags",
							"desc" => "Extract Facebook meta tags on header [Enable only if you are going to use Gabfire Share Widget]",
							"id" => $shortname."_fbonhead",
							"std" => 0,
							"type" => "checkbox");		
									
		$options[] = array( "name" => "Widget Map",
							"desc" => "Display the location of widgets on front page. After reviewing widget locations be sure to disable this option.",
							"id" => $shortname.$themeid."_widget",
							"std" => 0,
							"type" => "checkbox");

$options[] = array( "name" => "Custom Styling", "type" => "heading");	
	
		$options[] = array( "name" => "Custom CSS",
							"desc" => "Quickly add some CSS to your theme by adding it to this block.",
							"id" => $shortname."_custom_css",
							"std" => "",
							"type" => "textarea");	
								
	update_option('of_template',$options); 			 
	update_option('of_themename',$themename); 
	update_option('of_shortname',$shortname);

	return $options;
}
?>