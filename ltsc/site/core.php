<?php

/*
Template Name: Main LTSC
 */

$tplUrl		= get_template_directory_uri();
$folderUrl	= $tplUrl . '/site';

include 'header.php';
?>

<div class="core">
	<div class="coreInner heading part1-Heading">
		<h2>LTSC - LONG TERM SETTLEMENT CONTRACT</h2>
	</div>
	<div class="coreSpan part1">
		<div class="coreInner">
			<div class="text text1">
				LTSC's will revolutionise the way people look at property investment forever. They provide investors and future homeowners with a chance to capatilise on the profits that can be made in the market without massive cash outlays.
			</div>
			<div class="seperator"></div>
			<div class="text text2">
				<img class="fileRibbon" src="<?php echo $folderUrl ?>/img/fileRibbon.png" />
				Using an LTSC an investor can secure property today, without being required to settle on that property for upto 10 years. And whats more any capital gain that occurs over that time is theirs to keep at settlement !
				<p></p>
				Investors can take advantage of this capital gain from as little as $4 per day. $4 per day is all that's required to secure your slice of the profits that will be made in the next 10 years.
			</div>
		</div>
	</div>

	<div class="coreSeperator"></div>

	<div id="howLtscWorks"></div>
	<div class="part2 coreSpan">
		<div class="coreInner heading part2-heading">
			<h2>HOW DOES LTSC WORK ?</h2>
		</div>
		<div class="coreInner row-center">
			<div class="block block1 col-center">
				<div class="image"></div>
				<div class="text">STAGE 1</div>
				<div class="text2">
					Secure your property in the greenfield stage when prices are at their lowest.
				</div>
			</div>
			<div class="block block2 col-center">
				<div class="image"></div>
				<div class="text">STAGE 2</div>
				<div class="text2">
					Take advantage of the hyper growth that occurs during the development cycle in any area.
				</div>
			</div>
			<div class="block block3 col-center">
				<div class="image"></div>
				<div class="text">STAGE 3</div>
				<div class="text2">
					Settle in the urbanization stage when prices are at their peak and an established community is in place.
				</div>
			</div>
		</div>
	</div>

	<div class="coreSeperator"></div>

	<div id="benefits"></div>
	<div class="coreInner heading part3-heading">
		<h2>BENEFITS</h2>
		<div class="text">Utilising LTSC's, property investors are able to profit from the consistent growth in the property market, while enjoying the added benefits of incurring:</div>
	</div>
	<div class="coreInner part3">
		<div class="row chartSection">
			<div class="col chart">
				<img class="chartImage" src="<?php echo $folderUrl ?>/img/graph.png" />
			</div>
			<div class="col list">
				<div>NO BANK DEBT</div>
				<div>NO INSURANCE COSTS</div>
				<div>NO LAND RATES AND TAXES</div>
				<div>NO TENANCY RISK</div>
				<div>NO PERSONAL GUARANTEES</div>
			</div>
		</div>
	</div>

	<div class="coreSeperator"></div>
	<div id="vendorTerms"></div>
	<div class="coreInner heading part4-heading">
		<h2>VENDOR TERM CALCULATOR</h2>
	</div>
	<div class="coreInner part4">
		<div class="text text1">
			Securing property using an LTSC is extremely affordable when compared to purshasing property using traditional methods. From as little as $5,500 upfront investors are able to take advantage of the growth in the property market and realise the potential for large profits as a result of the next property boom.
		</div>
		<div class="text text2">
			Use the calculator below to discover how affordable making money from the property market can be:
		</div>
		<div class="seperator"></div>
		<?php include __DIR__ . '/../vendorCalc/calc.php' ?>
	</div>
	<div class="coreSeperator"></div>
	
	<div class="coreSpan part5">
		<div class="coreInner">
			<h2>DOWNLOAD THE LTSC DOCUMENT</h2>
			<div class="text">To learn why LTSC's are fast becoming a cornerstone in all property investor portfolios, download your free guide here.</div>
			<a class="button" href="http://ltsc.wpengine.com/wp-content/uploads/2014/04/LTSC-OVERVIEW-VII.pdf" target="_blank">CLICK HERE TO DOWNLOAD</a>
		</div>
	</div>
	<div class="coreSeperator"></div>
</div>

<?php
include 'footer.php';

?>