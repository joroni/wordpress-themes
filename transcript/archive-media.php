	<div id="container" class="fullwidth">	
	
		<div id="bcrum"><?php gab_breadcrumb(); ?></div>
	
		<?php 
			include (TEMPLATEPATH . '/loop-media.php'); 

			// load pagination
		if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
			pagination($additional_loop->max_num_pages);
		} ?>	
		
	</div><!-- /container -->

	<div class="clear"></div>