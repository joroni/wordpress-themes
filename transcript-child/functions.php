<?php

	define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/inc/admin/');
	define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/inc/admin/');
	define('OF_FILEPATH', TEMPLATEPATH);
	define('OF_DIRECTORY', get_bloginfo('template_directory'));

	define('GABFIRE_INC_PATH', OF_FILEPATH . '/inc');
	define('GABFIRE_INC_DIR', OF_DIRECTORY . '/inc');
	define('GABFIRE_FUNCTIONS_PATH', OF_FILEPATH . '/inc/functions');
	define('GABFIRE_JS_DIR', OF_DIRECTORY . '/inc/js');

	// OPTION PANEL
	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
	require_once (GABFIRE_INC_PATH . '/theme-init.php'); // Custom functions and plugins

	gabfire_register_sidebar(array('name' => 'Header1','id' => 'Header1','description' => 'In the header somewhere'));
	gabfire_register_sidebar(array('name' => 'NavRight1','id' => 'NavRight1','description' => 'In the navbar somewhere'));
	gabfire_register_sidebar(array('name' => 'Footer2','id' => 'Footer2','description' => 'In the footer somewhere'));


	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsLeft1','id' => 'OtherSiteFeedsLeft1','description' => 'Left column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsMiddle1','id' => 'OtherSiteFeedsMiddle1','description' => 'Middle column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsRight1','id' => 'OtherSiteFeedsRight1','description' => 'Right column, above footer'));

	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsLeft2','id' => 'OtherSiteFeedsLeft2','description' => 'Left column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsMiddle2','id' => 'OtherSiteFeedsMiddle2','description' => 'Middle column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsRight2','id' => 'OtherSiteFeedsRight2','description' => 'Right column, above footer'));

	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsLeft3','id' => 'OtherSiteFeedsLeft3','description' => 'Left column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsMiddle3','id' => 'OtherSiteFeedsMiddle3','description' => 'Middle column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsRight3','id' => 'OtherSiteFeedsRight3','description' => 'Right column, above footer'));

	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsLeft4','id' => 'OtherSiteFeedsLeft4','description' => 'Left column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsMiddle4','id' => 'OtherSiteFeedsMiddle4','description' => 'Middle column, above footer'));
	gabfire_register_sidebar(array('name' => 'OtherSiteFeedsRight4','id' => 'OtherSiteFeedsRight4','description' => 'Right column, above footer'));

?>