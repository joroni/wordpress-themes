<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ) ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='//fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet' type='text/css'>

		<link media="screen" type="text/css" href="<?php echo $tplUrl ?>/css/normalize.css" rel="stylesheet" />
		<link media="screen" type="text/css" href="<?php echo $tplUrl ?>/site/style.css?<?php echo time() ?>" rel="stylesheet" />
		<link media="screen" type="text/css" href="<?php echo $tplUrl ?>/vendorCalc/style.css?<?php echo time() ?>" rel="stylesheet" />

		<script src="<?php echo $tplUrl ?>/js/jquery.js"></script>
		<script src="<?php echo $tplUrl ?>/js/jquery.scrollto.js"></script>
		<script src="<?php echo $tplUrl ?>/vendorCalc/assets/jquery.nouislider.min.js"></script>
	</head>
	<body>
		<div class="top"></div>
		<div class="mobileBasicMenu">
			<a href="<?php echo home_url() ?>"><img src="<?php echo $folderUrl ?>/img/logo.png" /></a>
			<div class="mobileMenuButton"></div>
			<div class="mobileMenuItems row">
				<div class="col">
					<a data-scroll="#whatIsLtsc" href="<?php echo home_url() ?>/#whatIsLtsc">What is LTSC?</a>
				</div>
				<div class="col">
					<a data-scroll="#howLtscWorks" href="<?php echo home_url() ?>/#howLtscWorks">How LTSC Works</a>
				</div>
				<div class="col">
					<a data-scroll="#benefits" href="<?php echo home_url() ?>/#benefits">Benefits</a>
				</div>
				<div class="col">
					<a data-scroll="#vendorTerms" href="<?php echo home_url() ?>/#vendorTerms">Vendor Terms</a>
				</div>
				<div class="col">
					<a title="Read the FAQ" href="<?php echo home_url() ?>/faq">FAQ</a>
				</div>
				<div class="col">
					<a title="Contact Us" href="<?php echo home_url() ?>/contact">Contact</a>
				</div>

			</div>
		</div>

		<div class="menu static">
			<div class="menuInner row-justify">
				<div class="col logo">
					<a href="<?php echo home_url() ?>"><img src="<?php echo $folderUrl ?>/img/logo.png" /></a>
				</div>
				<div class="col menuItem active">
					<a data-scroll="#whatIsLtsc" href="<?php echo home_url() ?>/#whatIsLtsc">What is LTSC?</a>
				</div>
				<div class="col menuItem">
					<a data-scroll="#howLtscWorks" href="<?php echo home_url() ?>/#howLtscWorks">How LTSC Works</a>
				</div>
				<div class="col menuItem">
					<a data-scroll="#benefits" href="<?php echo home_url() ?>/#benefits">Benefits</a>
				</div>
				<div class="col menuItem">
					<a data-scroll="#vendorTerms" href="<?php echo home_url() ?>/#vendorTerms">Vendor Terms</a>
				</div>
				<div class="col menuItem">
					<a title="Read the FAQ" href="<?php echo home_url() ?>/faq">FAQ</a>
				</div>
				<div class="col menuItem">
					<a title="Contact Us" href="<?php echo home_url() ?>/contact">Contact</a>
				</div>
			</div>
			<div class="underline"></div>
		</div>
		<div id="whatIsLtsc"></div>
		<div class="header">
			<div class="headerInner"></div>
		</div>