<?php

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

		register_sidebar( array(
			'name' => 'Header Widget Right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
			)
		);

		register_sidebar( array(
				'name' => 'Sidebar 1',
				'before_widget' => '<div class="sidebar-box">',
				'after_widget' => '</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>'
			)
		);
	}
}

add_action( 'after_setup_theme', 'setup_sidebars' );