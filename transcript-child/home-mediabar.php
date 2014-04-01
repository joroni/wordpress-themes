<?php if (intval(of_get_option('of_tr_nr4', 14)) > 0 ) { ?>
	<div id="mediabar">
		<h3 class="widgettitle"><a href="<?php echo get_category_link(of_get_option('of_tr_cat4'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat4')); ?></a></h3>
		
		<div id="previous_button"></div>
		<div id="next_button"></div>

		<div class="container">
			<ul>
				<?php 
				$count = 1;
				$args = array(
				  'posts_per_page' => of_get_option('of_tr_nr4', 14),  
				  'cat' => of_get_option('of_tr_cat4', 1)
				);
				$gab_query = new WP_Query();$gab_query->query($args); 
				while ($gab_query->have_posts()) : $gab_query->the_post();						
				
				?>
				<li class="car">
					<div class="thumb">		
						<?php 
						gab_media(array(
							'name' => 'trns-mainpage_photogal', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 1, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '150', 
							'media_height' => '113', 
							'thumb_align' => '', 
							'enable_default' => of_get_option('of_tr_end4'),
							'default_name' => 'mainpage_photogal.jpg'	
						)); 										
						?>
					</div>
			
					<div class="postinfo">
						<p><?php the_title(); ?></p>
						<?php if (($gab_flv == '') and ($gab_video == '') and ($gab_iframe == '') ) { ?>
							<p class="morePhoto"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e('Read More','transcript'); ?></a></p>
						<?php } else { ?>
							<p class="moreVideo"><a href="<?php the_permalink() ?>" rel="bookmark"><?php _e('Play Video','transcript'); ?></a></p>
						<?php } ?>
					</div>
				</li>
				<?php $count++; endwhile; wp_reset_query(); ?>
			</ul>
		</div><!-- end of container -->
	</div><!-- end of Mediabar -->
<?php } ?>	