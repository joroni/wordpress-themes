<?php
	if ( !isset($isVariant) )
		$isVariant = isset($_GET['v']) ? true : false;
?>
<!DOCTYPE html>
<html>
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
			<link media="screen" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/style.css?version=13" rel="stylesheet" />
		<?php } ?>

		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.viewport.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.scrollto.js"></script>

		<?php # wp_head(); ?>

	</head>
	<body>
