	<?php 
	$disabled = TRUE;

	if(!$disabled) {
		?>
		<!-- PRIMARY BOTTOM -->
		<div id="primaryBottom">
			<div id="primaryBottomSidebar">
				<?php
				gab_dynamic_sidebar( 'PrimaryBottomAd' );
				include (TEMPLATEPATH . '/ads/home_300x250mid.php'); 
				?>
			</div>
			
			<div id="primaryBottomTabs">	
				<script type="text/javascript">
					(function($) { $(document).ready(function(){
						var tabContainers = $('div.siteTabs > div');
							tabContainers.hide().filter(':first').show();
								$('div.siteTabs ul.siteTabs_title a').click(function () {
								tabContainers.hide();
								tabContainers.filter(this.hash).show();
								$('div.siteTabs ul.siteTabs_title a').removeClass('selected');
								$(this).addClass('selected');
							return false;
						}).filter(':first').click();
					})})(jQuery)
				</script>

				<div class="siteTabs">
					<ul class="siteTabs_title">
						<li><a href="#priBotTab1"><?php if ( of_get_option('of_tr_tabname1') <> "" ) { echo of_get_option('of_tr_tabname1'); } else { echo get_cat_name(of_get_option('of_tr_cat5')); } ?></a></li>
						<li><a href="#priBotTab2"><?php if ( of_get_option('of_tr_tabname2') <> "" ) { echo of_get_option('of_tr_tabname2'); } else { echo get_cat_name(of_get_option('of_tr_cat6')); } ?></a></li>
						<li><a href="#priBotTab3"><?php if ( of_get_option('of_tr_tabname3') <> "" ) { echo of_get_option('of_tr_tabname3'); } else { echo get_cat_name(of_get_option('of_tr_cat7')); } ?></a></li>
						<li><a href="#priBotTab4"><?php if ( of_get_option('of_tr_tabname4') <> "" ) { echo of_get_option('of_tr_tabname4'); } else { echo get_cat_name(of_get_option('of_tr_cat8')); } ?></a></li>
						<li><a href="#priBotTab5"><?php if ( of_get_option('of_tr_tabname5') <> "" ) { echo of_get_option('of_tr_tabname5'); } else { echo get_cat_name(of_get_option('of_tr_cat9')); } ?></a></li>
					</ul>


					<!-- Tab 1 -->
					<div id="priBotTab1">
						<div class="primaryBottomTabs_body">
							<?php 
							$count = 1;
							$args = array(
							  'posts_per_page' => 1,  
							  'cat' => of_get_option('of_tr_cat5')
							);
							$gab_query = new WP_Query();$gab_query->query($args); 
							while ($gab_query->have_posts()) : $gab_query->the_post();
							?>
							
								<div class="text">
									<h2 class="posttitle"><a href="<?php /* Do not use rel=bookmark for titles of tab content, that will break tabbing */ the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									
									<p>
										<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
										<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>
										<?php print string_limit_words(get_the_excerpt(), 55); ?>&hellip;
									</p>
									
									<div class="clear"></div>								
								</div><!-- /text -->
								
								<?php gab_postmeta(); ?>
								
								<div class="tabmedia">
									<?php 
									gab_media(array(
										'name' => 'trns-primarybottomtabs', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 1, 
										'video_id' => 'tab1', 
										'catch_image' => of_get_option('of_tr_catch_img'),
										'enable_thumb' => 1, 
										'resize_type' => 'c',
										'media_width' => '269', 
										'media_height' => '191', 
										'thumb_align' => 'alignright', 
										'enable_default' => of_get_option('of_tr_end5'),
										'default_name' => 'primary_bottomtabs1.jpg'	
									)); 										
									?>
								</div>

							<?php endwhile; wp_reset_query(); ?>
						</div><!-- /primaryBottomTabs_body -->
					</div><!-- /priBotTab1 -->
					
					<!-- Tab 2 -->
					<div id="priBotTab2">
						<div class="primaryBottomTabs_body">
							<?php 
							$count = 1;
							$args = array(
							  'post__not_in'=>$do_not_duplicate,
							  'posts_per_page' => 1,  
							  'cat' => of_get_option('of_tr_cat6')
							);
							$gab_query = new WP_Query();$gab_query->query($args); 
							while ($gab_query->have_posts()) : $gab_query->the_post();						
							
							?>
									<div class="text">
									<h2 class="posttitle"><a href="<?php /* Do not use rel=bookmark for titles of tab content, that will break tabbing */ the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									
									<p>
										<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
										<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>
										<?php print string_limit_words(get_the_excerpt(), 55); ?>&hellip;
									</p>
									
									<div class="clear"></div>								
								</div><!-- /text -->
								
								<?php gab_postmeta(); ?>
								
								<div class="tabmedia">
									<?php 
									gab_media(array(
										'name' => 'trns-primarybottomtabs', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 1, 
										'video_id' => 'tab2', 
										'catch_image' => of_get_option('of_tr_catch_img'),
										'enable_thumb' => 1, 
										'resize_type' => 'c',
										'media_width' => '269', 
										'media_height' => '191', 
										'thumb_align' => 'alignright', 
										'enable_default' => of_get_option('of_tr_end6'),
										'default_name' => 'primary_bottomtabs2.jpg'	
									)); 										
									?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- /primaryBottomTabs_body -->
					</div><!-- /priBotTab2 -->
				
					<!-- Tab 3 -->
					<div id="priBotTab3">
						<div class="primaryBottomTabs_body">
							<?php 
							$count = 1;
							$args = array(
							  'post__not_in'=>$do_not_duplicate,
							  'posts_per_page' => 1,  
							  'cat' => of_get_option('of_tr_cat7')
							);
							$gab_query = new WP_Query();$gab_query->query($args); 
							while ($gab_query->have_posts()) : $gab_query->the_post();						
							
							?>

								<div class="text">
									<h2 class="posttitle"><a href="<?php /* Do not use rel=bookmark for titles of tab content, that will break tabbing */ the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									
									<p>
										<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
										<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>	
										<?php print string_limit_words(get_the_excerpt(), 55); ?>&hellip;
									</p>
									
									<div class="clear"></div>								
								</div><!-- /text -->
								
								<?php gab_postmeta(); ?>
							
								<div class="tabmedia">
									<?php 
									gab_media(array(
										'name' => 'trns-primarybottomtabs', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 1, 
										'video_id' => 'tab3', 
										'catch_image' => of_get_option('of_tr_catch_img'),
										'enable_thumb' => 1, 
										'resize_type' => 'c',
										'media_width' => '269', 
										'media_height' => '191', 
										'thumb_align' => 'alignright', 
										'enable_default' => of_get_option('of_tr_end7'),
										'default_name' => 'primary_bottomtabs3.jpg'	
									)); 										
									?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- /primaryBottomTabs_body -->
					</div><!-- /priBotTab3 -->			
					
					<!-- Tab 4 -->
					<div id="priBotTab4">
						<div class="primaryBottomTabs_body">
							<?php 
							$count = 1;
							$args = array(
							  'post__not_in'=>$do_not_duplicate,
							  'posts_per_page' => 1,  
							  'cat' => of_get_option('of_tr_cat8')
							);
							$gab_query = new WP_Query();$gab_query->query($args); 
							while ($gab_query->have_posts()) : $gab_query->the_post();						
							
							?>

								<div class="text">
									<h2 class="posttitle"><a href="<?php /* Do not use rel=bookmark for titles of tab content, that will break tabbing */ the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
										
									<p>
										<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
										<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>	
										<?php print string_limit_words(get_the_excerpt(), 55); ?>&hellip;
									</p>
									
									<div class="clear"></div>								
								</div><!-- /text -->
								
								<?php gab_postmeta(); ?>
								
								<div class="tabmedia">
									<?php 
									gab_media(array(
										'name' => 'trns-primarybottomtabs', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 1, 
										'video_id' => 'tab4', 
										'catch_image' => of_get_option('of_tr_catch_img'),
										'enable_thumb' => 1, 
										'resize_type' => 'c',
										'media_width' => '269', 
										'media_height' => '191', 
										'thumb_align' => 'alignright', 
										'enable_default' => of_get_option('of_tr_end8'),
										'default_name' => 'primary_bottomtabs4.jpg'	
									)); 										
									?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- /primaryBottomTabs_body -->
					</div><!-- /priBotTab4 -->
						
					<!-- Tab 5 -->
					<div id="priBotTab5">
						<div class="primaryBottomTabs_body">
							<?php 
							$count = 1;
							$args = array(
							  'post__not_in'=>$do_not_duplicate,
							  'posts_per_page' => 1,  
							  'cat' => of_get_option('of_tr_cat9')
							);
							$gab_query = new WP_Query();$gab_query->query($args); 
							while ($gab_query->have_posts()) : $gab_query->the_post();						
							
							?>
								<div class="text">
									<h2 class="posttitle"><a href="<?php /* Do not use rel=bookmark for titles of tab content, that will break tabbing */ the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									
									<p>
										<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
										<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>	
										<?php print string_limit_words(get_the_excerpt(), 55); ?>&hellip;
									</p>
									
									<div class="clear"></div>								
								</div><!-- /text -->
								
								<?php gab_postmeta(); ?>
								
								<div class="tabmedia">
									<?php 
									gab_media(array(
										'name' => 'trns-primarybottomtabs', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 1, 
										'video_id' => 'tab5', 
										'catch_image' => of_get_option('of_tr_catch_img'),
										'enable_thumb' => 1, 
										'resize_type' => 'c',
										'media_width' => '269', 
										'media_height' => '191', 
										'thumb_align' => 'alignright', 
										'enable_default' => of_get_option('of_tr_end9'),
										'default_name' => 'primary_bottomtabs5.jpg'	
									)); 										
									?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div><!-- /primaryBottomTabs_body -->
					</div><!-- /priBotTab5 -->
				</div><!-- /siteTabs -->
				<div class="clear"></div>
			</div><!-- End of primaryBottomTabs -->
		</div>
		<?php
	}
	?>