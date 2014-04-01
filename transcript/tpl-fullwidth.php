<?php
/*
Template Name: No Sidebar
*/
?>
<?php get_header(); ?>
	<div id="container" style="width:970px">	
		
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
					'media_width' => '948', 
					'media_height' => '450', 
					'thumb_align' => 'aligncenter', 
					'enable_default' => 0
				)); 					

				// Display content
				the_content();
				
				// make sure any floated content gets cleared
				echo '<div class="clear"></div>';
				
				// Display pagination
				wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %');
				
				// Display edit post link to site admin
				edit_post_link(__('Edit This Post','transcript'),'<p>','</p>'); 
			?>		
			
			<?php endwhile; else : endif; ?>
		</div><!-- /post -->
		
	</div><!-- /container -->
	
	<div class="clear"></div>

<?php get_footer(); ?>