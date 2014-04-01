<?php
/*
Template Name: Sitemap
*/
?><?php get_header(); ?>
	<div id="container">	
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
		
			<h1 class="entry_title"><?php the_title(); ?></h1>
			
			<?php 
				// Theme innerpage slider
				if (of_get_option('of_tr_inslider') == 2) {
					require_once (GABFIRE_INC_PATH . '/theme-gallery.php');
				} 
				elseif (
						( of_get_option('of_tr_inslider') == 1) and (has_tag(of_get_option('of_tr_inslider_tag')) ) 
					or 
						(  has_term( of_get_option('of_tr_inslider_tag') , 'gallery-tag', '' )) ) 
				{
					require_once (GABFIRE_INC_PATH . '/theme-gallery.php');
				}
				elseif (of_get_option('of_tr_inslider') == 0) {
					// do nothing
				}

				// Display edit post link to site admin
				edit_post_link(__('Edit This Post','transcript'),'<p>','</p>'); 				
				
				// If there is a video, display it´				
				gab_media(array(
					'name' => 'gabfire', 
					'imgtag' => 0,
					'link' => 0,
					'enable_video' => 1, 
					'catch_image' => 0,
					'video_id' => 'post', 
					'enable_thumb' => 0, 
					'resize_type' => 'c', /* c to crop, h to resize only height, w to resize only width */
					'media_width' => '633', 
					'media_height' => '345', 
					'thumb_align' => 'aligncenter', 
					'enable_default' => 0
				)); 	
				
				// Display content
				the_content();
				
				// make sure any floated content gets cleared
				echo '<div class="clear"></div>';
				
				// Display pagination
				wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %');
			?>		
			
			<?php endwhile; else : endif; ?>
			
			<div style="width:40%" class="left">  
				<h3><?php _e( 'Pages', 'transcript' ) ?></h3>
				<ul class="sitemap">
					<?php wp_list_pages( 'depth=0&sort_column=menu_order&title_li=' ); ?>		
				</ul>
				</div>				
	
				<div style="width:30%" class="left">												  	    
				<h3><?php _e( 'Categories', 'transcript' ) ?></h3>
				<ul class="sitemap">
					<?php wp_list_categories( 'title_li=&hierarchical=0&show_count=1') ?>	
				</ul>
				</div>
				
				<div style="width:30%" class="left">												  	    
				<h3><?php _e( 'Media Gallery', 'transcript' ) ?></h3>
				<ul class="sitemap">
					<?php wp_list_categories('taxonomy=gallery-cat&hide_empty=0&title_li='); ?>
				</ul>	
				</div>					
				<div class="clear"></div>
					
				<?php
					   // This is where loop for archives list starts
						$cats = get_categories();
						foreach ($cats as $cat) {
						query_posts('cat='.$cat->cat_ID);
						?>
							<div class="widget">
							<h3><?php echo $cat->cat_name; ?></h3>
							<ul>	
								<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - (<?php echo $post->comment_count ?>)</li>
								<?php endwhile;  ?>
							</ul>
							</div>
						<?php } ?>
				
				        <h3><?php _e( 'Media Gallery Entries', 'transcript' ); ?></h3>
						<?php
					   // This is where loop for archives list starts
						query_posts('post_type=gab_gallery&showposts=999'); 
						?>
							<div class="widget">
							<ul>	
								<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - (<?php echo $post->comment_count ?>)</li>
								<?php endwhile;  ?>
							</ul>
							</div>
						<?php
						edit_post_link(__('Edit This Post','transcript'),'<p>','</p>'); 
					?>
		</div><!-- /post -->
		
	</div><!-- /container -->
	

	<div id="sidebar">
		<?php get_sidebar(); ?> 
	</div><!-- End of sidebar -->

	<div class="clear"></div>

<?php get_footer(); ?>