<?php
/*
Template Name: Thank You Gold

*/

$isVariant = true;

?>
<!DOCTYPE html>
<html class="fullSize">
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width" />

		<link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link media="screen" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/normalize.css" rel="stylesheet" />

		<?php if ( $isVariant ) { ?>
			<link media="screen" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/style.css?version=2" rel="stylesheet" />
		<?php } else { ?>
			<link media="screen" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/style.css?version=2" rel="stylesheet" />
		<?php } ?>

		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.js"></script>
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
						<a class="backLink" href="<?php echo home_url() . ( $isVariant ? '/gold' : '' ) ?>"><i class="backImage"></i>Click here to go back to LTSC.com.au</a>
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

		<!-- Google Code for LTSC_April Conversion Page -->
		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 987046676;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "zk_4CJyK1QgQlMbU1gM"; var google_remarketing_only = false;
			/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/987046676/?label=zk_4CJyK1QgQlMbU1gM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>

		<!-- Brandscreen Conversion Tag Code . Advertiser: LTSC. Name: thank you -->
		<img src="http://tags.rtbidder.net/convert?sid=5341ed8f8bc06f188000454c" width="0" height="0" border="0" alt="" />
	</body>
</html>
