<?php
/*
Template Name: Slider LTSC 300x250

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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php the_title() ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
	</head>
	<body>
		<a href="http://ltsc.com.au/sm-april" target="_blank">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/ads/ltsc/300x250.gif" />
		</a>
	</body>
</html> 