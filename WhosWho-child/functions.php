<?php

if(function_exists( 'register_sidebar' ) ) {

	register_sidebar(array('name' => 'OtherSiteFeedsLeft1','id' => 'OtherSiteFeedsLeft1','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsMiddle1','id' => 'OtherSiteFeedsMiddle1','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsRight1','id' => 'OtherSiteFeedsRight1','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));

	register_sidebar(array('name' => 'OtherSiteFeedsLeft2','id' => 'OtherSiteFeedsLeft2','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsMiddle2','id' => 'OtherSiteFeedsMiddle2','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsRight2','id' => 'OtherSiteFeedsRight2','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));

	register_sidebar(array('name' => 'OtherSiteFeedsLeft3','id' => 'OtherSiteFeedsLeft3','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsMiddle3','id' => 'OtherSiteFeedsMiddle3','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsRight3','id' => 'OtherSiteFeedsRight3','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));

	register_sidebar(array('name' => 'OtherSiteFeedsLeft4','id' => 'OtherSiteFeedsLeft4','description' => 'Left column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsMiddle4','id' => 'OtherSiteFeedsMiddle4','description' => 'Middle column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));
	register_sidebar(array('name' => 'OtherSiteFeedsRight4','id' => 'OtherSiteFeedsRight4','description' => 'Right column, above footer', 'before_widget' => '<div>', 'after_widget' => '</div>', 'before_title' => '<span class="headings-sidebar">', 'after_title' => '</span>'));

	register_sidebar( array(
			'name' => 'Navigation Widget Area',
			'before_widget' => '<div class="widget-container %1$s">',
			'after_widget' => '</div>'
		)
	);

	register_sidebar( array(
			'name' => 'Sidebar 1',
			'before_widget' => '<div class="sidebar-box %1$s">',
			'after_widget' => '</div>',
			'before_title' => '<span class="headings-sidebar">',
			'after_title' => '</span>'
		)
	);

	register_sidebar( array(
			'name' => 'Featured Ad',
			'before_widget' => '<div class="%1$s">',
			'after_widget' => '</div>'
		)
	);

	register_sidebar( array( 'name' => 'Search Area', 'description' => 'Search area in top nav', 'before_widget' => '<div class="search-bar">', 'after_widget' => '</div>' ) );
}