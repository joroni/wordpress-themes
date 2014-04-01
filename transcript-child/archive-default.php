	<div id="container">	
	
		<div id="bcrum"><?php gab_breadcrumb(); ?></div>
		
		<?php if (is_author()) { ?>
			<div class="gab_authorInfo">
				<?php global $wp_query; $curauth = $wp_query->get_queried_object(); ?>
				<div class="gab_authorPic">
					<?php echo get_avatar( $curauth->user_email, '55' ); ?>
				</div>
				<strong><?php _e('Entries posted by','transcript'); ?> <?php echo $curauth->nickname; ?></strong><br /><?php echo $curauth->description; ?>
				<div class="clear"></div>
			</div>			
		<?php } ?>
	
		<?php 
			include (get_stylesheet_directory() . '/loop-default.php'); 

			// load pagination
		if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
			pagination($additional_loop->max_num_pages);
		} ?>	

		
	</div><!-- /container -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="clear"></div>