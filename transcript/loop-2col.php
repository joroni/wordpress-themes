<div id="two-column">
<?php 
$count = 1;
if (have_posts()) : while (have_posts()) : the_post();			
$gab_thumb = get_post_meta($post->ID, 'thumbnail', true);
$gab_video = get_post_meta($post->ID, 'video', true);
$gab_flv = get_post_meta($post->ID, 'videoflv', true);
$gab_iframe = get_post_meta($post->ID, 'iframe', true);
?>
	<?php if($count % 2 == 0) { $align = 'entry right'; } else { $align = 'entry left'; } ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class($align);?>>
		<div class="archive_postheader border_bottom_20">
			<h2 class="archiveTitle">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php gab_posttitle(24, '&hellip;'); ?></a>
			</h2>
			
			<span class="entry_date"><?php echo get_the_date(''); ?></span>
			<span class="entry_comment"><?php comments_popup_link(__('No Comment','transcript'), __('1 Comment','transcript'), __('% Comments','transcript'));?></span>
			<div class="clear"></div>
		</div>
		
		<?php 
			gab_media(array(
				'name' => 'trns-arc2col',
				'imgtag' => 1,
				'link' => 1,
				'enable_video' => 1,
				'video_id' => 'archive',
				'catch_image' => of_get_option('of_catch_img'),
				'enable_thumb' => 1,
				'resize_type' => 'c',
				'media_width' => '300', 
				'media_height' => '135', 
				'thumb_align' => 'aligncenter', 
				'enable_default' => 0,
			)); 
			the_excerpt();
		?>
		<div class="clear"></div>

		<span class="read_on">
			<a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>"><?php _e('Continue reading &hellip;','transcript'); ?></a><?php edit_post_link(__('Edit','transcript'),' / ',''); ?>
		</span>
	</div><!-- /cat_post -->
	<?php if($count % 2 == 0) { echo '<div class="clear"></div>'; } ?>
<?php $count++; endwhile; else : ?>
<div class="post">
<h2 class="archiveTitle"><?php _e('Sorry, nothing matched your criteria','transcript');?></h2>
</div>
<?php endif; ?>
</div>