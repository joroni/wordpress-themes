
<?php include 'header.php' ?>

<div class="container">
	<div class="part1 row">
		<div class="section1 col">
			&nbsp;
		</div>
		<div class="section2 col">
			<a href="<?php home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" /></a>
			<div class="text">
				SECURE PROPERTY<br/>
				FOR JUST <img class="coin" src="<?php echo get_template_directory_uri() ?>/img/coin.png" /> A DAY!*
			</div>
			<?php #include 'buttons/top.php' ?>
		</div>
	</div>
	<div class="part2 row">
		<div class="section1 col">
			<ul class="list">
				<li><i></i>No Bank Debt</li>
				<li><i></i>No Tenancy Issues</li>
				<li><i></i>No Rates Cost</li>
				<li><i></i>No Insurance Cost</li>
				<li><i></i>No Land Tax</li>
				<li><i></i>No Interest Cost</li>
				<li><i></i>Completely Limited Downside Risk</li>
			</ul>
		</div>
		<div class="section2 col-center">
			<div class="text">
				Learn how to secure a property for just $4 a day.<br/>
				Download our free guide.
			</div>
			<?php include 'form.php' ?>
		</div>
	</div>
	<div class="part5 row-center">
		<div class="text col-center">*Terms and conditions may apply</div>
	</div>
</div>

<?php include 'footer.php' ?>