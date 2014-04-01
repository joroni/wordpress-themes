	<div id="container">	
	
		<div id="bcrum"><?php gab_breadcrumb(); ?></div>
	
		<?php 
			include (TEMPLATEPATH . '/loop-2col.php'); 

			// load pagination
		if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
			pagination($additional_loop->max_num_pages);
		} ?>	

		
	</div><!-- /container -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="clear"></div>