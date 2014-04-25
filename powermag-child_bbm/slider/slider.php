<?php
/*
Template Name: Slider

Create page "slider", use custom fields: imageSrc1, imageSrc2, imageSrc3
*/

/*
	Generate an array of slider items from wordpress custom_fields

	Custom field syntax:

	slider1_image, slider1_link, slider1_text
	slider2_image, slider2_link, slider2_text
	
	image: the <img src="">
	link: the <a href="">
	text: any html. will not be used if an image already exists

	Manage content in wordpress by creating a new page for each type of ad then adding the custom fields to it

	
 */
	
error_reporting(0);

function buildSlider($postId = '') {
	$customFields = get_post_custom($postId); # An array, [ 'fieldName' => [values, ...] ]

	$sliderItems = array();

	foreach($customFields as $key => $values) {
		if (
			preg_match('/^(slider\d)[_-](.+)/i', $key, $matches) and
			$itemKey = $matches[1] and
			$itemSubKey = $matches[2]
		) {
			if ( empty($sliderItems[$itemKey]) ) $sliderItems[$itemKey] = array();
			$sliderItems[$itemKey][$itemSubKey] = $values[0];
		}
	}

	return $sliderItems;
}

$sliderItems = buildSlider();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php the_title() ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<script src="<?php echo get_stylesheet_directory_uri() ?>/slider/jquery.1.9.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/slider/jquery.bxslider.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/slider/jquery.bxslider.css"></script>
		<style>
			.slider {
				position: relative;
				overflow: auto;
			}

			ul, li, body {
				padding: 0;
				margin: 0;
			}
			.slider li { list-style: none; }
			.slider ul li { float: left; }
			.slider a {
				display: inline-block;
			}

			.slider img {
				width: 100%;
			}
		</style>
	</head>
	<body>
		<ul class="slider">
			<?php foreach($sliderItems as $key => $item) {
				if ( empty($item) ) continue;
				?>
				<li class="sliderItem">
					<?php if ( !empty($item['link']) ) { ?>
						<a href="<?php echo $item['link'] ?>" target="_blank">
					<?php } ?>
					
						<?php if ( !empty($item['image']) ) { ?>
							<img class="sliderImage" src="<?php echo $item['image'] ?>" />
						<?php } elseif ( !empty($item['text']) ) { ?>
							<span class="sliderText"><?php echo $item['text'] ?></span>
						<?php } ?>

					<?php if ( $item['link'] ) { ?>
						</a>
					<?php } ?>
				</li>
			<?php } ?>
		</ul>
		<script>
			$(document).ready(function() {
				var $slider = $('.slider')
				var sliderOptions = {

					speed			: parseInt( <?php echo "'{$_GET['speed']}'" ?> )		|| 500
				,	mode			: <?php echo "'{$_GET['axis']}'" ?>						|| 'horizontal'
				,	autoDirection	: <?php echo "'{$_GET['direction']}'" ?>				|| 'next'
				,	easing			: <?php echo "'{$_GET['easing']}'" ?>					|| 'ease-in-out'
				,	pause			: parseInt(<?php echo "'{$_GET['pause']}'" ?>)			|| 6000
				,	autoDelay		: parseInt(<?php echo "'{$_GET['startDelay']}'" ?>)		|| 1000
				,	randomStart		: <?php echo $_GET['random'] ? $_GET['easing'] : 'null' ?>	|| true
				,	useCss			: true
				,	pager			: false
				,	controls		: false
				,	auto			: true
				}

				slider = $slider.bxSlider(sliderOptions)

				$(window).resize(function(){
					slider.reloadSlider();
				})
			})
		</script>
	</body>
</html> 