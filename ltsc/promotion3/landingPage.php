
<?php include 'header.php' ?>

<div class="container">
	<div class="headerStrip"><img src="<?php echo get_template_directory_uri() ?>/promotion3/img/headerStrip.png" /></div>
	<div class="part1 row">
		<img class="messageImg" src="<?php echo get_template_directory_uri() ?>/promotion3/img/part1Message.png" />
	</div>
	<div class="part2 row">
		<div class="section1 col">
			<img class="textImg" src="<?php echo get_template_directory_uri() ?>/promotion3/img/part2Text.png" />
			<div class="messageImgWrap">
				<img class="messageImg" src="<?php echo get_template_directory_uri() ?>/promotion3/img/part2Message.png" />
			</div>
			<a href="<?php home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/promotion3/img/logo.png" /></a>
		</div>
		<div class="section2 col-center">
			<div class="text">
				<p>
				LTSC© is giving you the chance to win two tickets to any<br/>
				motorsport event in the country.
				</p>
				<p>
				Simply fill in the form on the right to enter. When you enter you will also receive a guide to Long Term Settlement Contracts free of charge.
				</p>
			</div>
			<?php include __DIR__ . '/form.php' ?>
		</div>
	</div>
	
	<div class="part3 row-center">

	</div>

	<div class="part5 row-center">
		<div class="text col-center"><a href="<?php get_bloginfo('wpurl') ?>/e3-terms">*Terms and conditions may apply</a></div>
	</div>
</div>

<?php include 'footer.php' ?>
