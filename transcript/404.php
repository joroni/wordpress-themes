<?php get_header(); ?>
	<div id="container">	
	
		<div id="bcrum">
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php _e('Home','transcript'); ?></a> &raquo; <?php _e('404 Error','transcript'); ?>
		</div>
	
		<div class="post">
			<h2 class="archive_title"><?php _e('Apologies, but the page you requested could not be found.','transcript');?></h2>
		</div>
		
	</div><!-- /container -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="clear"></div>

<?php get_footer(); ?>