<?php 
$count = 1;
if (have_posts()) : while (have_posts()) : the_post();			
$gab_thumb = get_post_meta($post->ID, 'thumbnail', true);
$gab_video = get_post_meta($post->ID, 'video', true);
$gab_flv = get_post_meta($post->ID, 'videoflv', true);
$gab_iframe = get_post_meta($post->ID, 'iframe', true);

if(($count == 1) && !is_paged() && !is_search()) { ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('entry');?>>
	
		<?php
			gab_media(array(
				'name' => 'trns-archive-big',
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 1,
				'video_id' => 'archive',
				'catch_image' => of_get_option('of_tr_catch_img'),
				'enable_thumb' => 1,
				'resize_type' => 'c',
				'media_width' => '280', 
				'media_height' => '200', 
				'thumb_align' => 'alignleft',  /* post media will be wrapped with a span that is assigned with "thumb" class */
				'enable_default' => 0
			));
		?>
			
		<div class="postexcerpt">
			<h2 class="archive_title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
			</h2>
			
			<?php 
			the_excerpt(); 
			gab_postmeta();
			?>
			
		</div>			
		<div class="clear"></div>
	</div>
	
<?php } else { ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
		<div class="archive_postheader border_bottom_20">
			<h2 class="archive_title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<span class="entry_date"><?php echo get_the_date(''); ?></span>
			<span class="entry_comment"><?php comments_popup_link(__('No Comment','transcript'), __('1 Comment','transcript'), __('% Comments','transcript'));?></span>
			
			<div class="clear"></div>
		</div>
		
		<?php 
			if(($gab_flv !== '') or ($gab_video !== '') or ($gab_iframe !== ''))  {
				// If there is a video, display it´				
				gab_media(array(
					'name' => 'gabfire',
					'enable_video' => 0, 
					'imgtag' => 0,
					'link' => 1,
					'catch_image' => 0,
					'video_id' => 'post', 
					'enable_thumb' => 1, 
					'resize_type' => 'c', /* c to crop, h to resize only height, w to resize only width */
					'media_width' => '633', 
					'media_height' => '345', 
					'thumb_align' => 'aligncenter', 
					'enable_default' => 0
				)); 	
			} else {
				gab_media(array(
					'name' => 'trns-archive_media',
					'enable_video' => 1, 
					'imgtag' => 1,
					'enable_video' => 1,
					'video_id' => 'archive',
					'catch_image' => of_get_option('of_tr_catch_img'),
					'enable_thumb' => 1,
					'resize_type' => 'c',
					'media_width' => '190', 
					'media_height' => '100', 
					'thumb_align' => 'alignleft',  /* post media will be wrapped with a span that is assigned with "thumb" class */
					'enable_default' => 0
				)); 
			}
			the_excerpt();
		?>
		<div class="clear"></div>

		<span class="read_on">
			<a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>"><?php _e('Continue reading &hellip;','transcript'); ?></a><?php edit_post_link(__('Edit','transcript'),' / ',''); ?>
		</span>
	</div><!-- /cat_post -->
<?php } ?>	

<?php $count++; endwhile; else : ?>
<div class="post">
<h2 class="archive_title"><?php _e('Sorry, nothing matched your criteria','transcript');?></h2>
</div>
<?php endif; ?>