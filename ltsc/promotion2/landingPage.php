
<?php include 'header.php' ?>

<div class="container">
	<div class="part1 row">
		<div class="section1 col">
			&nbsp;
		</div>
		<div class="section2 col">
			<a href="<?php home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" /></a>
			<div class="text">
				SECURE YOUR FAMILY'S<br/>
				FINANCIAL FUTURE<br/>
				FOR JUST <img class="coin" src="<?php echo get_template_directory_uri() ?>/img/coin.png" /> A DAY!*
			</div>
			<?php include __DIR__ . '/../buttons/top.php' ?>
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
			<?php include __DIR__ . '/../form.php' ?>
		</div>
	</div>
	
	<!--
	<div class="part3 row-center">
		<div class="section1 col-center">
			<span class="text">HOW DOES LTSC WORK ?</span>
		</div>
		<div class="section2 row-center">
			<div class="block  col-center">
				<div class="text">STAGE 1</div>
				<img alt="Stage 1" src="<?php echo get_template_directory_uri() ?>/promotion2/img/block1.jpg"/>
				<div class="text2">
					BUY IN<br/>
					GREENFIELDS STAGE
				</div>
			</div>
			<div class="block col-center">
				<div class="text">STAGE 2</div>
				<img alt="Stage 2" src="<?php echo get_template_directory_uri() ?>/promotion2/img/block2.jpg"/>
				<div class="text2">
					HOLD DURING<br/>
					DEVELOPMENT STAGE
				</div>
			</div>
			<div class="block col-center">
				<div class="text">STAGE 3</div>
				<img alt="Stage 3" src="<?php echo get_template_directory_uri() ?>/promotion2/img/block3.jpg"/>
				<div class="text2">
					SETTLE IN<br/>
					URBANISATION STAGE
				</div>
			</div>
		</div>
	</div>-->

	<div class="part4 row">
		<div class="section1 col-right">
			<div class="typewriter"><?php
				?>"<span class="content">SOMEONE'S SITTING IN
				THE SHADE TODAY BECAUSE
				SOMEONE PLANTED A TREE
				A LONG TIME AGO</span>"<?php
			?></div>
			<div></div>
			<div class="typewriterAuthor"><span class="content">WARREN BUFFET</span></div>
		</div>
		<div class="section2 col-left">
			<div class="downloadBox col-center">
				<div class="text">
					GET A FREE DOWNLOAD<br/>
					ON HOW YOU CAN BENEFIT<br/>
					FROM AN LTSC
				</div>
				<div class="arrow"></div>
				<?php include __DIR__ . '/../buttons/bottom.php'; ?>
			</div>
		</div>
	</div>

	<div class="part5 row-center">
		<div class="text col-center"><a href="<?php get_bloginfo('wpurl') ?>/terms">*Terms and conditions may apply</a>. <a href="<?php echo home_url() ?>/privacy">Privacy Policy</a></div>
	</div>
</div>

<?php include 'footer.php' ?>
