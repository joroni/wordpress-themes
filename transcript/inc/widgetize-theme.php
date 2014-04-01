<?php
function gabfire_register_sidebar($args) {
	$common = array(
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget'  => "</div></div>\n",
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => "</h3>\n"
	);
	$args = wp_parse_args($args, $common);
	return register_sidebar($args);
}

gabfire_register_sidebar(array('name' => 'PrimaryLeft1','id' => 'PrimaryLeft1','description' => 'Below Featured Slider'));
gabfire_register_sidebar(array('name' => 'PrimaryLeft2','id' => 'PrimaryLeft2','description' => 'Below Featured Block'));
gabfire_register_sidebar(array('name' => 'PrimaryMid1','id' => 'PrimaryMid1','description' => 'Primary mid column, above entries'));
gabfire_register_sidebar(array('name' => 'PrimaryMid2','id' => 'PrimaryMid2','description' => 'Primary mid column, below entries'));
gabfire_register_sidebar(array('name' => 'PrimaryRight1','id' => 'PrimaryRight1','description' => 'Primary sidebar - top'));
gabfire_register_sidebar(array('name' => 'PrimaryRight2','id' => 'PrimaryRight2','description' => 'Primary sidebar - bottom'));
gabfire_register_sidebar(array('name' => 'PrimaryBottomAd','id' => 'PrimaryBottomAd','description' => 'Primary bottom - above ad'));
gabfire_register_sidebar(array('name' => 'SecondaryTopLeft','id' => 'SecondaryTopLeft','description' => 'Secondary content top box - left column'));
gabfire_register_sidebar(array('name' => 'SecondaryTopRight','id' => 'SecondaryTopRight','description' => 'Secondary content top box - right column'));
gabfire_register_sidebar(array('name' => 'SecondaryBotLeft','id' => 'SecondaryBotLeft','description' => 'Secondary content bottom box - left column'));
gabfire_register_sidebar(array('name' => 'SecondaryBotRight','id' => 'SecondaryBotRight','description' => 'Secondary content bottom box - left column'));
gabfire_register_sidebar(array('name' => 'BottomSidebar1','id' => 'BottomSidebar1','description' => 'Homepage bottom sidebar - top'));
gabfire_register_sidebar(array('name' => 'BottomSidebar2','id' => 'BottomSidebar2','description' => 'Homepage bottom sidebar - bottom'));
gabfire_register_sidebar(array('name' => 'PageWidget','id' => 'PageWidget','description' => 'Page widget, below entry for widgetized page template'));
gabfire_register_sidebar(array('name' => 'PostWidget','id' => 'PostWidget','description' => 'Post widget, below entry for post-pages'));
gabfire_register_sidebar(array('name' => 'InnerSidebar1','id' => 'InnerSidebar1','description' => 'Innerpage sidebar - top'));
gabfire_register_sidebar(array('name' => 'InnerSidebar2','id' => 'InnerSidebar2','description' => 'Innerpage sidebar - bottom'));