<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

	<div id="container">	
	
		<?php
		if ( get_query_var( 'paged') ) $paged = get_query_var( 'paged' ); elseif ( get_query_var( 'page') ) $paged = get_query_var( 'page' ); else $paged = 1;
		query_posts( "post_type=any&paged=$paged&showposts=8" ); 
		
			include (TEMPLATEPATH . '/loop-default.php'); 

			// load pagination
		if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
			pagination($additional_loop->max_num_pages);
		} 
		wp_reset_query();
		?>	
		
	</div><!-- /container -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>	
	
	<div class="clear"></div>
	
<?php get_footer(); ?>