<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<body id="top">
	<div id="pagewrap">
		<div class="wrapper section-inner">
			<!-- Top Section-->
				<div class="home-section">
					<div class="left">
						<h2 class="subtitle">
							PROJECT
						</h2>

						<div class="sub-info">
							<a href="<?php echo home_url() ?>/project/#theproject"><div>THE PROJECT</div></a>
							<a href="<?php echo home_url() ?>/project/#projectheader"><div>MASTER PLAN</div></a>
							<a href="<?php echo home_url() ?>/project/#dbi"><div>DEVELOPMENT CONSULTANTS</div></a>
						</div>
					</div>

					<div class="right">
						<div class="project-image colorViewFade">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/black-and-white/part1.jpg" alt="" class="greyscale">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/colour/part1.jpg" alt="" class="colour">
						</div>

						<div class="section-desc">
							Cotton Park Estate has enlisted the help of industry leading town planners and architects to ensure the estate is an amazing place to call home now and into the future.
						</div>
					</div>

					<div class="info-right more-info">
						<a href="<?php echo home_url() ?>/project/#top" ><img src="<?php echo get_stylesheet_directory_uri() ?>/images/More_Info.jpg" alt="">&nbsp;MORE INFO</a>
					</div>

					<div class="clear"></div>
				</div>

				<div class="page-seperator">
					<hr/>
					<div class="right-image">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Right.png" alt="">
					</div>
					<div class="left-image">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Left.png" alt="">
					</div>
					<div class="clear"></div>
				</div>
			<!-- End of Top Section-->
			<!-- Mid Section-->
			<div class="home-section">
				<div class="center">
					<h2 class="locationsubtitle">
						LOCATION
					</h2>
				</div>
				<div class="mid-sub-info desktop-only">
					<a href="<?php echo home_url() ?>/location/#locationmap"><span>MAP</span></a><span >&nbsp;&nbsp;-&nbsp;</span>
					<a href="<?php echo home_url() ?>/location/#locationinfra"><span>INFRASTRUCTURE</span></a><span>&nbsp;&nbsp;-&nbsp;</span>
					<a href="<?php echo home_url() ?>/location/#locationurban"><span>URBAN GROWTH ZONE</span></a>
				</div>
				<div class="mid-sub-info mobile-only">
					<div><a href="<?php echo home_url() ?>/location/#locationmap">MAP</a></div>
					<div><a href="<?php echo home_url() ?>/location/#locationinfra">INFRASTRUCTURE</a></div>
					<div><a href="<?php echo home_url() ?>/location/#locationurban">URBAN GROWTH ZONE</a></div>
				</div>


				<div class="small-midsection-desc">
					Cotton Park is situated in Wyndham, one of Australia's fast growing municipalities. Well positioned to benefit from the projected growth in Melbourne's Western Growth Zone and only 30km from the CBD.
				</div>
				<div class="bottom">
					<a href="<?php echo home_url() ?>/location"><div class="location-image colorViewFade">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/black-and-white/part2.jpg" alt="" class="greyscale">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/colour/part2.jpg" alt="" class="colour">
					</div></a>
				</div>

				<div class="clear"></div>
			</div>
				<div class="page-seperator">
					<hr/>
					<div class="right-image">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Right.png" alt="">
					</div>
					<div class="left-image">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Left.png" alt="">
					</div>
					<div class="clear"></div>
				</div>
			<!-- End of Mid Section-->
			<!-- Bottom Section-->
			<div class="home-section">
					<div class="right bottomright">
						<h2 class="ltscsubtitle">
							LTSC
						</h2>

						<div class="ltsc-mid-sub-info">
							<span>LONG TERM SETTLEMENT CONTRACT</span>
						</div>

						<div class="ltsc-sub-info">
							<a href="<?php echo home_url() ?>/ltsc/#ltsctop"><div>WHAT IS AN LTSC ?</div></a>
							<a href="<?php echo home_url() ?>/ltsc/#vendertermscalc"><div>VENDOR TERMS CALCULATOR</div></a>
							<a href="<?php echo home_url() ?>/ltsc/#ltscfaq"><div>LTSC - FAQ</div></a>
						</div>

						<div class="ltsc-section-desc mobile-only">
							Long Term Settlement Contracts (LTSC) provide property investors and future homeowners with a revolutionary way to secure property in the land mark Cotton Park Estate. Secure your residential lot today without having to settle for up to 10 years.
							 During this time investors keep all of the capital gain that occurs while dramatically limiting their downside risk.
						</div>

					</div>


					<div class="left bottomleft">
						<div class="ltsc-image colorViewFade">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/black-and-white/part3.jpg" alt="" class="greyscale">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/colour/part3.jpg" alt="" class="colour">
						</div>
					</div>

					<div class="clear"></div>
					<br>
					<div class="ltsc-section-desc desktop-only">
							Long Term Settlement Contracts (LTSC) provide property investors and future homeowners with a revolutionary way to secure property in the land mark Cotton Park Estate. Secure your residential lot today without having to settle for up to 10 years.
							During this time investors keep all of the capital gain that occurs while dramatically limiting their downside risk.
					</div>
					<div class="info-right more-info">
						<a href="<?php echo home_url() ?>/ltsc" ><img src="<?php echo get_stylesheet_directory_uri() ?>/images/More_Info.jpg" alt="">&nbsp;MORE INFO</a>
					</div>
					<div class='clear'></div>
			</div>
		</div> <!-- /wrapper -->
</div>

<?php get_footer(); ?>