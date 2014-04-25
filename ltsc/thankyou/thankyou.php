<?php
/*
Template Name: Thank You - Base

*/
?>
<!DOCTYPE html>
<html class="fullSize">
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width" />

		<link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link media="screen" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" rel="stylesheet" />
		<link media="screen" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" />

		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
	</head>
	<body class="thankYouPage fullSize">
		<div class="fader fullSize">
			<div class="gradient">
				<div class="container fullSize">
					<div class="logo"></div>
					Thank you for your inquiry!<br/>
					<p>
						<small>You will recieve an email momentarily.</small>
					</p>
					<p>
						<a class="backLink" href="<?php echo home_url() . $page['path'] ?>"><i class="backImage"></i>Click here to go back to LTSC.com.au</a>
					</p>
				</div>
				<div class="footerMsg">Terms and Conditions may apply</div>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				setTimeout(
					function() { $('.fader').addClass('faded') },
					500
				)
			})
		</script>
		
		<?php include __DIR__ . $page['trackingGoogle']; ?>
		<?php include __DIR__ . $page['trackingImage']; ?>

	</body>
</html>
