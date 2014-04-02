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
		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.bxslider.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/css/jquery.bxslider.css"></script>
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
		</style>
	</head>
	<body>
		<ul class="slider">
			<?php foreach($sliderItems as $key => $item) {
				if ( empty($item) ) continue;
				?>
				<li class="sliderItem">
					<?php if ( !empty($item['link']) ) { ?>
						<a href="<?php echo $item['link'] ?>">
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
		<pre>
		<?php
			print_r( $sliderItems );
		?>
		</pre>
		<script>
			$(document).ready(function() {
				var $slider = $('.slider')
				var sliderOptions = {

					speed	: parseInt( <?php echo "'{$_GET['speed']}'" ?> ) || 800
				,	mode	: <?php echo "'{$_GET['axis']}'" ?> || 'horizontal'
				,	easing	: <?php echo "'{$_GET['easing']}'" ?> || 'ease-in-out'

				}

				console.log(sliderOptions)


				$slider.bxSlider(sliderOptions)
			})
		</script>
	</body>
</html> 