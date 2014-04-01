<div id="home_sidebar2">
	<?php gab_dynamic_sidebar( 'BottomSidebar1' ); ?>	

	<?php if (intval(of_get_option('of_tr_nr12')) > 0 ) { ?>
		<div class="home_sidebarPosts">
			<h3 class="widgettitle borderbottom_title">
				<a href="<?php echo get_category_link(of_get_option('of_tr_cat12'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat12')); ?></a>
			</h3>	
			<ul>
				<?php
				$count = 1;
				$args = array(
				  'posts_per_page' => of_get_option('of_tr_nr12'),  
				  'cat' => of_get_option('of_tr_cat12')
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();
				?>
				<li>

					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr12')) { echo " lastpost"; } elseif ($count == 1) { echo " firstpost"; } ?>">
						<?php	
						gab_media(array(
							'name' => 'trns-sidebar_posts', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 0, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '78', 
							'media_height' => '83', 
							'thumb_align' => 'alignleft', 
							'enable_default' => of_get_option('of_tr_end14'),
							'default_name' => 'sidebar_posts.jpg'	
						)); 
						?>
					
						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?> |</span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?></span><br /><?php } ?>

							<?php print string_limit_words(get_the_excerpt(), 8); ?>
						</p>

						<?php echo do_shortcode('[social_share]'); ?>
						
					</div>
				</li>
				<?php $count++; endwhile; wp_reset_query(); ?>
			</ul>
		</div><!-- /home_sidebarPosts -->
	<?php } ?>

	<div class="home_sidebar_ads">
		<?php include (TEMPLATEPATH . '/ads/home_300x250bot.php'); ?>	
	</div><!-- /home_sidebar_ads -->
	
	<?php gab_dynamic_sidebar( 'BottomSidebar2' ); ?>	
</div><!-- enf od home_sidebar -->
