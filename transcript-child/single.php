<?php get_header(); ?>
<?php
	$disabled = TRUE;
?>
	<div id="container">	
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
		
			<h1 class="entry_title"><?php the_title(); ?></h1>

			<?php if( !$disabled ) { ?>
			<div class="metasingle">
				<span class="postdate"><?php echo get_the_date('') ?> | </span>
				<span class="postcat"><?php _e('Filed under','transcript'); ?>: <?php the_category(',') ?> | </span>
				<span class="postauthor"><?php _e('Posted by','transcript'); ?>: <?php the_author_posts_link(); ?></span> 
			</div><!-- /metas -->
			<?php } ?>
			
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
				
				// If there is a video, display it
				gab_media(array(
					'name' => 'gabfire',
					'imgtag' => 0,
					'link' => 0,
					'enable_video' => 1,
					'video_id' => 'post',
					'catch_image' => 0,
					'enable_thumb' => 0,
					'media_width' => '633', 
					'media_height' => '345', 
					'thumb_align' => 'aligncenter', 
					'enable_default' => 0,
				)); 

				if( has_post_thumbnail() ) {
					the_post_thumbnail( 'large', array( 'class' => 'main-post-image') );
				}
				
				// Display content
				the_content();
				
				// make sure any floated content gets cleared
				echo '<div class="clear"></div>';
				
				// Display pagination
				wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink= %');		
				
				//If there is a widget, display it
				gab_dynamic_sidebar('PostWidget');
			
				// Display edit post link to site admin
				edit_post_link(__('Edit This Post','transcript'),'<p>','</p>'); 
			?>		
			
			<?php if(of_get_option('of_entry_meta') == 1)  { ?>
				<div id="entryMeta">
					<?php echo get_avatar( get_the_author_email(), '27' ); ?>
					<?php _e('Posted by','transcript'); ?>  <?php the_author_posts_link(); ?> 
					<?php /* This is commented, because it requires a little adjusting sometimes.
						You'll need to download this plugin, and follow the instructions:
						http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
						/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
					<?php _e('on','transcript'); ?> <?php echo get_the_date(''); ?>. <?php _e('Filed under','transcript'); ?> <?php the_category(', ') ?>.
					<?php _e('You can follow any responses to this entry through the','transcript'); ?> <?php comments_rss_link('RSS 2.0'); ?>.
					<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Both Comments and Pings are open ?>
					<?php _e('You can leave a response or trackback to this entry','transcript'); ?>
					<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Only Pings are Open ?>
					<?php _e('Responses are currently closed, but you can trackback from your own site.','transcript'); ?>
					<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Comments are open, Pings are not ?>
					<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.','transcript'); ?>
					<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Neither Comments, nor Pings are open ?>
					<?php _e('Both comments and pings are currently closed.','transcript'); ?>
					<?php } ?>	
					<div class="clear"></div>	
				</div>
			<?php } ?>
		
			<?php endwhile; else : endif; ?>
		</div><!-- /post -->
		
		<?php if ( of_get_option('of_tr_ad8') <> "" ) {  ?>
		<div class="single_ad">
				<?php
					if(file_exists(TEMPLATEPATH . '/ads/inner_468x60/'.current_catID().'.php') && (is_single() || is_category())) {
						include_once(TEMPLATEPATH . '/ads/inner_468x60/'.current_catID().'.php');
					}
					else {
						include_once(TEMPLATEPATH . '/ads/inner_468x60.php');
					}
				?>
		</div>
		<?php } ?>

		<?php comments_template(); ?>
	</div><!-- /container -->
	

	<div id="sidebar">
		<?php get_sidebar(); ?> 
	</div><!-- End of sidebar -->

	<div class="clear"></div>

<?php get_footer(); ?>