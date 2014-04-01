<div id="secondary-content">
	<!-- secondary content left - top box -->
	<div class="bottomBox" >
		
		<h3 class="widgettitle borderbottom_title">
			<a href="<?php echo get_category_link(of_get_option('of_tr_cat10'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat10')); ?></a>
		</h3>	
		
		<div class="bottombox_wide left">
			
			<?php 
			gab_dynamic_sidebar( 'SecondaryTopLeft' ); 
			
			if (intval(of_get_option('of_tr_nr10a')) > 0 ) { 
				$count = 1;
				$args = array(
				  'posts_per_page' => of_get_option('of_tr_nr10a'),  
				  'cat' => of_get_option('of_tr_cat10')
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();						
				?>
					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr10a')) { echo " lastpost"; } ?>">
						<?php	
						gab_media(array(
							'name' => 'trns-sbox_big', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 1, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'video_id' => 'bot1', 
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '298', 
							'media_height' => '221', 
							'thumb_align' => 'alignnone margin_bot', 
							'enable_default' => of_get_option('of_tr_end10'),
							'default_name' => 'sbox_topleft.jpg'	
						)); 
						?>

						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>
							<?php print string_limit_words(get_the_excerpt(), 40); ?>&hellip;
						</p>
						
						<div class="clear"></div>
						
						<?php gab_postmeta(); ?>
						
					</div><!-- /featuredpost -->
				<?php $count++; endwhile; wp_reset_query(); ?>
			<?php } ?>		
		</div><!-- /bottombox_wide -->
					
		<div class="bottombox_narrow right">
			
			<?php 
			gab_dynamic_sidebar( 'SecondaryTopRight' );
			
			if (intval(of_get_option('of_tr_nr10b')) > 0 ) { 
				$count = 1;
				$args = array(
				  'posts_per_page' => of_get_option('of_tr_nr10b'),  
				  'offset' => of_get_option('of_tr_nr10a'),
				  'cat' => of_get_option('of_tr_cat10')
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();						
				
				?>

					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr10b')) { echo " lastpost"; } ?>">		
						
						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php
						gab_media(array(
							'name' => 'trns-sbox_small', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 0, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '55', 
							'media_height' => '55', 
							'thumb_align' => 'alignright', 
							'enable_default' => of_get_option('of_tr_end11'),
							'default_name' => 'sbox_topright.jpg'	
						));
						?>

						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>	
							<?php print string_limit_words(get_the_excerpt(), 15); ?>&hellip;
						</p>
							
						<div class="clear"></div>
						
						<?php gab_postmeta(); ?>
							
					</div><!-- /featuredpost -->
				<?php $count++; endwhile; wp_reset_query();
			} ?>	
		</div><!-- /bottombox_narrow -->
		
	</div><!-- /bottomBox -->

	<!-- secondary content left - bottom box -->
	<div class="bottomBox nomargin">
		
		<h3 class="widgettitle borderbottom_title">
			<a href="<?php echo get_category_link(of_get_option('of_tr_cat11'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat11')); ?></a>
		</h3>	
			<div class="bottombox_narrow left">
			
			<?php 
			gab_dynamic_sidebar( 'SecondaryBotLeft' );
			
			if (intval(of_get_option('of_tr_nr11b')) > 0 ) { 
				$count = 1;
				$args = array(
				  'posts_per_page' => of_get_option('of_tr_nr11b'),  
				  'offset' => of_get_option('of_tr_nr11a'),
				  'cat' => of_get_option('of_tr_cat11')
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();						
				
				?>

					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr11b')) { echo " lastpost"; } ?>">		
						
						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php
						gab_media(array(
							'name' => 'trns-sbox_small', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 0, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '55', 
							'media_height' => '55', 
							'thumb_align' => 'alignleft', 
							'enable_default' => of_get_option('of_tr_end12'),
							'default_name' => 'sbox_botleft.jpg'	
						));
						?>
						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>	
							<?php print string_limit_words(get_the_excerpt(), 15); ?>&hellip;
						</p>
							
						<div class="clear"></div>
						
						<?php gab_postmeta(); ?>
							
					</div><!-- /featuredpost -->
				<?php $count++; endwhile; wp_reset_query();
			} ?>	
		</div><!-- /bottombox_narrow -->
		
		<div class="bottombox_wide right">
			
			<?php 
			gab_dynamic_sidebar( 'SecondaryBotRight' );
			
			if (intval(of_get_option('of_tr_nr11a')) > 0 ) { 
				$count = 1;
				$args = array(
				  'post__not_in'=>$do_not_duplicate,
				  'posts_per_page' => of_get_option('of_tr_nr11a'),  
				  'cat' => of_get_option('of_tr_cat11')
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();						
				
					?>
					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr11a')) { echo " lastpost"; } ?>">
						<?php	
						gab_media(array(
							'name' => 'trns-sbox_big', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 1, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'video_id' => 'bot2', 
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '298', 
							'media_height' => '221', 
							'thumb_align' => 'alignnone margin_bot', 
							'enable_default' => of_get_option('of_tr_end13'),
							'default_name' => 'sbox_botright.jpg'	
						)); 
						?>

						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>
							<?php print string_limit_words(get_the_excerpt(), 40); ?>&hellip;
						</p>
						
						<div class="clear"></div>
						
						<?php gab_postmeta(); ?>
						
					</div><!-- /featuredpost -->
				<?php $count++; endwhile; wp_reset_query(); ?>
			<?php } ?>		
		</div><!-- /bottombox_wide -->
		
	</div><!-- /bottomBox -->
	
</div><!-- /secondary-content -->