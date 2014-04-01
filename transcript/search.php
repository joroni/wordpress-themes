<?php get_header(); ?>
	<div id="container">	
	
		<div id="bcrum">
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php _e('Home','transcript'); ?></a> &raquo;
			<?php _e('Search results for:','transcript'); ?> <strong>&#8220;<?php echo wp_specialchars($s, 1); ?>&#8221;</strong>
		</div>
	
		<?php 
		include (TEMPLATEPATH . '/loop-default.php');

		// load pagination
		if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
			pagination($additional_loop->max_num_pages);
		}			
			
		?>
		
	</div><!-- /container -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="clear"></div>

<?php get_footer(); ?>