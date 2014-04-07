<?php

function content($num) {
	$theContent = get_the_content();
	$output = preg_replace('/<img[^>]+./','', $theContent);
	$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
	$output = preg_replace( '/<style.*>.*<\/style>/', '', $output );
	$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
	$limit = $num+1;
	$content = explode(' ', $output, $limit);
	array_pop($content);
	$content = implode(" ",$content)."...";
	echo $content;
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

		register_sidebar( array(
				'name' => 'Contact Us',
				'id' => 'Contact1',
				'before_widget' => '<div class="contact-us %1$s">',
				'after_widget' => '</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>'
			)
		);
	}
}

add_action( 'after_setup_theme', 'setup_sidebars' );


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

registerWidget('ad-topBanner');
registerWidget('ad-home-belowFeatured');

registerWidget('ad-home-afterThirdPost');
registerWidget('ad-footer');