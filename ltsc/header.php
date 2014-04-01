<!DOCTYPE html>
<html>
	<head>
		<title><?php the_title() ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width" />

		<link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

		<link media="screen" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" rel="stylesheet" />
		<link media="screen" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" />

		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.viewport.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.scrollto.js"></script>

		<?php # wp_head(); ?>

	</head>
	<body>
		<div class="headerWrap">
			<div class="header">
				<div class="headerLeft">
					<div class="headerLeft-box1 ">
						<?php
							// could probably add text like this via wordpress
						?>
						<div class="headerLeft-content1">
							Making money in the<br/>
							property market has<br/>
							never been easier....
						</div>

					</div>
					<div class="headerLeft-box2">
						<div class="headerLeft-content2">
							Secure property<br/>
							for just <span class="headerLeft-numberImage"></span> a day!<span class="asterisk">*</span>
						</div>
					</div>
				</div>
				<div class="headerRight">
					<a href="<?php echo home_url() ?>">
						<div class="logo"></div>
					</a>
					<?php include 'headerForm.php'; ?>
				</div>
			</div>
		</div>