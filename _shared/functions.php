<?php

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

?>
