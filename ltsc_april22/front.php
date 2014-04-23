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
<div class="core">
	<section class="coreSection1">
		<div class="coreTopText mediumText">
			Using an LTSC, you can secure property with :
		</div>
		<div class="showcaseBoxWrap">
			<div class="showcaseBox">
				<div class="showcaseImage imageBox">
					<img src="<?php echo get_template_directory_uri() ?>/img/showcase_image.jpg" />
				</div>
				<div class="showcaseText mediumText">
					<ul class="showcaseList">
						<li>NO BANK DEBT</li>
						<li>NO INSURANCE COSTS</li>
						<li>NO LAND RATES AND TAXES</li>
						<li>NO TENANCY RISK</li>
						<li>NO PERSONAL GUARANTEES</li>
						<li>NO INTEREST EXPENSES</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="coreSection2 row">
		<div class="coreSection2-text col-2">
			<h2>LTSC</h2>
			<p>
				LTSC's will revolutionise the way people look at property investment forever. They provide investors and future homeowners with a chance to capatilise on the profits that can be made in the market without massive cash outlays.
			</p>
			<p>
				Using an LTSC an investor can secure property today, without being required to settle on that property for upto 10 years. And whats more any capital gain that occurs over that time is theirs to keep at settlement !
			</p>
		</div>
		<div class="coreSection2-graph col-2">
			<div class="chartImage invisible">
				<?php 
					$graphImage = $isVariant
						? get_template_directory_uri() . '/variant/img/graph.png'
						: get_template_directory_uri() . '/img/graph.png'
					;
				?>
				<img src="<?php echo $graphImage ?>" />
			</div>
			<!--<div id="amchart1" class="amchart"></div>-->
			<div class="graphText">
				<div class="floatLeft">BUY LOW</div>
				<div class="floatRight">SETTLE HIGH</div>
			</div>
		</div>
	</section>
	<section class="seperator">
		<div class="seperatorLine"></div>
		<div class="seperatorButtonWrap"><a class="seperatorButton button">BOOK A PRESENTATION</a></div>
	</section>
	<section class="coreSection3 row">
		<div class="coreSection3-text col-3">
			LTSC allow investors to maximize profits like never before,<br/>
			capitalizing on the three unique stages of a development,<br/>
			never before available to the general public.
			<div id="webinarButtonEvent"></div>
		</div>
	</section>
	<section class="coreSection4 row">
		<div class="coreSection4-image col-3">
			<div class="coreSection4-heading">STAGE 1</div>
			<div class="imageBox imageBox-field">
				<img src="<?php echo get_template_directory_uri() ?>/img/field.jpg" />
			</div>
			<div class="coreSection4-text">
				BUY IN</br>
				GREENFIELDS STAGE
			</div>
		</div>
		<div class="coreSection4-image col-3">
			<div class="coreSection4-heading">STAGE 2</div>
			<div class="imageBox imageBox-map">
				<img src="<?php echo get_template_directory_uri() ?>/img/map.png" />
			</div>
			<div class="coreSection4-text">
				HOLD DURING<br/>
				DEVELOPMENT STAGE
			</div>
		</div>
		<div class="coreSection4-image col-3">
			<div class="coreSection4-heading">STAGE 3</div>
			<div class="imageBox imageBox-house">
				<img src="<?php echo get_template_directory_uri() ?>/img/house.jpg" />
			</div>
			<div class="coreSection4-text">
				SETTLE IN<br/>
				URBANISATION STAGE
			</div>
		</div>
	</section>
</div>
<div class="footerWrap">
	<div class="footer">
		<div class="footerRight">
			<div class="footerTypewriter">
				<div class="typewriterText"><?php
					?>"SOMEONE'S SITTING IN
					THE SHADE TODAY BECAUSE
					SOMEONE PLANTED A TREE
					A LONG TIME AGO"<?php
				?></div>
				<div class="typewriterAuthor">
					WARREN BUFFET
				</div>
			</div>
			<div class="footerGuide">
				<div class="footerGuide-text mediumText">
					Get a free download on<br/>
					how you can benefit<br/>
					from LTSC
				</div>
				<div class="clearfix"></div>
				<div class="footerGuide-arrow"></div>
				<div class="clearfix"></div>
				<a class="footerGuide-button button" href="#">GUIDE TO LTSC</a>
			</div>
		</div>
	</div>
</div>
<div id="subFooter" class="subFooter">
	* Terms and Conditions may apply.
</div>