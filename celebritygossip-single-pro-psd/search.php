<?php get_header(); ?>

	<div id="content-wrapper" class="site-content">
			<div id="content" role="main"> 
 	<header class="page-header">
					<h1 class="page-title">
						  <div id="newsmenu">	<div id="newsmenu0">
	<h1><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</div><div class="cb"></div>  </div>
					</h1>
					 
				</header>
 
<section> 



<?php include(TEMPLATEPATH . '/normalposts.php'); ?> 



</section>

			

 
			</div><!-- #content -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
