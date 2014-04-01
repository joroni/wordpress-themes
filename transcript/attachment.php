<?php get_header(); ?>
	<div id="container">	
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
		
			<h1 class="entry_title"><?php the_title(); ?></h1>

			<div class="metasingle">
				<span class="postdate"><?php echo get_the_date('') ?> | </span>
				<span class="postcat"><?php _e('Filed under','transcript'); ?>: <?php the_category(',') ?> | </span>
				<span class="postauthor"><?php _e('Posted by','transcript'); ?>: <?php the_author_posts_link(); ?></span> 
			</div><!-- /metas -->

				<?php
				if (of_get_option('of_wpmumode')==0) {
					if (wp_attachment_is_image($post->id)) {
						$att_image = wp_get_attachment_image_src( $post->id, "full");
					}
					if(is_multisite()) { ?>
						<img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo redirect_wpmu($att_image[0]); ?>&amp;q=90&amp;w=629&amp;zc=1" class="attachment-full" alt="" />
					<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $att_image[0]; ?>&amp;q=90&amp;w=629&amp;zc=1" class="attachment-full" alt="" />
					<?php }
				} else {
					if (wp_attachment_is_image($post->id)) {
						$att_image = wp_get_attachment_image_src( $post->id, "trns-innerslide");
					} ?>
					<img src="<?php echo $att_image[0]; ?>" alt="<?php the_title(); ?>" class="attachment-full" />
				<?php } ?>		
						
				<div class="attachment-nav">
					<?php previous_image_link( false, __('&laquo; Previous Image','transcript')); ?> | <a href="<?php echo get_permalink($post->post_parent); ?>"><?php _e('Back to Post','transcript'); ?></a> | <?php next_image_link( false, __('Next Image &raquo;','transcript')); ?>
				</div>
	
				<?php
					$args = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'order' => 'ASC',
					'post_parent' => $post->post_parent);
					$attachments = get_posts($args);

					if ($attachments) 
					{
					  foreach ($attachments as $attachment) 
					  {
						echo '<div class="attachment_more"><a href="'.get_attachment_link($attachment->ID, false).'">'.wp_get_attachment_image($attachment->ID, 'thumbnail').'</a></div>';
					  }
					}
				?>
	
			
			<div class="clear"></div>
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