
<?php
/*
Template Name: LINKS PAGE
*/
?>

<?php get_header(); ?>
<body id="top">
	<div id="pagewrap" class="linksPage">
		<div class="home-section wrapper section-inner">
			<h2 class="page-location-title">
				PLANNING GUIDELINES
			</h2>
			<p class="linksPageText">Use these links to gain an understanding of the planning process in the Wyndham region.</p>

			<div class="imageLinks">
				<div class="imageLink">
					<div class="imageLinkButton">
						<a href="http://www.wyndham.vic.gov.au/aboutwyndham/planspolicieslocallaws/cityplan" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/links/1.png" />
						</a>
					</div>
					<div class="imageLinkText">
						____<br/>
						WYNDHAM CITY COUNCIL<br/>
						CITY PLAN 2013-2017
					</div>
				</div>
				<div class="imageLink">
					<div class="imageLinkButton">
						<a href="http://www.mpa.vic.gov.au/wp-content/uploads/2012/11/Wyndham-North-Precinct-Structure-Plans-Background-Report.pdf" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/links/2.jpg" />
						</a>
					</div>
					<div class="imageLinkText">
						____<br/>
						WYNDHAM NORTH<br/>
						PRECINCT STRUCTURE PLANS
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /wrapper -->

</div>
<?php include 'locationPopups.php'; ?>
<?php get_footer(); ?>
