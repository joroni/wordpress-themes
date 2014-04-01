<?php get_header(); ?> 
	<div id="primarytopwrapper">
		
		<div id="primary-content">
			<div id="featured-wrapper">
				<div id="paginate-featured-slider"></div>
				<?php if (intval(of_get_option('of_tr_fea_nr')) > 0 ) { ?>
					<!-- featured entries -->
					<div id="featured-slider" class="sliderwrapper">
						<?php 
						$count = 1;
									
						if ( of_get_option('of_tr_fea_recent') == 1 ) {
							$args = array(
						       'posts_per_page' => of_get_option('of_tr_fea_nr')
						);
						} else {
							if ( of_get_option('of_tr_fea_tag') <> "" ) {
								$args = array(
								  'posts_per_page' => of_get_option('of_tr_fea_nr'), 
								  'tag' => of_get_option('of_tr_fea_tag')
								);
							} else {
								$args = array(
								  'posts_per_page' => of_get_option('of_tr_fea_nr'),  
								  'cat' => of_get_option('of_tr_fea_cat')
								);				
							}
						}
									
						$gab_query = new WP_Query();$gab_query->query($args); 
						while ($gab_query->have_posts()) : $gab_query->the_post();						
						?>
						<div class="contentdiv">
							<div class="sliderPostPhoto">

								<?php 
								gab_media(array(
									'name' => 'trns-featured', 
									'imgtag' => 1,
									'link' => 1,
									'enable_video' => 1, 
									'catch_image' => of_get_option('of_tr_catch_img'),
									'video_id' => 'featured', 
									'enable_thumb' => 1, 
									'resize_type' => 'c', /* c to crop, h to resize only height, w to resize only width */
									'media_width' => '340', 
									'media_height' => '254', 
									'thumb_align' => 'alignnone', 
									'enable_default' => of_get_option('of_tr_end1'),
									'default_name' => 'featured.jpg'	
								)); 										
								?>

								<?php if (($gab_flv == '') and ($gab_video == '') and ($gab_iframe == '') ) { ?>
									<div class="sliderPostInfo">
										<h2 class="featuredTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									</div>
								<?php } ?>
							</div><!-- end of sliderphoto/video -->

							<!-- Slider Post Excerpt -->
							<div class="featuredpost lastpost">
								<p>
									<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
									<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>							
									<?php print string_limit_words(get_the_excerpt(), 30); ?>&hellip;
								</p>

								<?php //gab_postmeta(); ?>

								<?php echo do_shortcode('[social_share]'); ?>
								
							</div><!-- end of featuredpost (post excerpt) -->
							
						</div><!-- end of contentdiv -->
						<?php $count++; endwhile; wp_reset_query(); ?>
					</div><!-- end of #featured-slider -->

					<script type="text/javascript">
						featuredcontentslider.init({
							id: "featured-slider", //id of main slider DIV
							contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
							toc: "#increment", //Valid values: "#increment", "markup", ["label1", "label2", etc]
							nextprev: ["Prev", "Next"], //labels for "prev" and "next" links. Set to "" to hide.
							revealtype: "<?php if(of_get_option('of_tr_fea_reveal') == 'OnClick') { echo 'click'; } else { echo 'mouseover'; } ?>", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
							enablefade: [true, 0.4], //[true/false, fadedegree]
							autorotate: [<?php if(of_get_option('of_tr_fea_rotate') == 1) { echo 'true'; } else { echo 'false'; } ?>, <?php if ( of_get_option('of_tr_fea_pause') <> "" ) { echo of_get_option('of_tr_fea_pause').'000'; } else { echo '5000'; } ?>], //[true/false, pausetime]
							onChange: function(previndex, curindex){ //event handler fired whenever script changes slide
								//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
								//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
							}
						})
					</script>
					<!-- End of featured slider -->
				<?php } ?>
				
				<?php gab_dynamic_sidebar( 'PrimaryLeft1' );?>	
				
				<!-- Entries below the featured section -->

				<?php if (intval(of_get_option('of_tr_nr2')) > 0 ) { ?>
				<div id="belowfeatured">
					<span class="catname">
						<a href="<?php echo get_category_link(of_get_option('of_tr_cat2'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat2')); ?></a>
					</span>				
				
					<?php 
					$count = 1;
					$args = array(
					  'posts_per_page' => of_get_option('of_tr_nr2'),  
					  'cat' => of_get_option('of_tr_cat2')
					);
					$gab_query = new WP_Query();$gab_query->query($args); 
					while ($gab_query->have_posts()) : $gab_query->the_post();
					?>
					<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr2')) { echo " lastpost"; } ?>">
						<h2 class="posttitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							
						<?php 
						gab_media(array(
							'name' => 'trns-below_featured', 
							'imgtag' => 1,
							'link' => 1,
							'enable_video' => 0, 
							'catch_image' => of_get_option('of_tr_catch_img'),
							'enable_thumb' => 1, 
							'resize_type' => 'c',
							'media_width' => '90', 
							'media_height' => '80', 
							'thumb_align' => 'alignleft', 
							'enable_default' => of_get_option('of_tr_end2'),
							'default_name' => 'below_featured.jpg'	
						)); 										
						?>
						
						<p>
							<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
							<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>								
							<?php echo string_limit_words(get_the_excerpt(), 28); ?>&hellip;
						</p>
							
						<?php //gab_postmeta(); ?>
						<?php echo do_shortcode('[social_share]'); ?>
					</div>
				<?php $count++; endwhile; wp_reset_query(); ?>
				</div>
				<?php } ?>
				
				<?php gab_dynamic_sidebar( 'PrimaryLeft2' ); ?>	
				<!-- End of entries below the featured section -->
			</div><!-- Enf of featuredContent -->
			
			<div id="primarymid">

				<?php gab_dynamic_sidebar( 'PrimaryMid1' );  ?>	
				
				<?php if (intval(of_get_option('of_tr_nr3')) > 0 ) { ?>
					<!-- Entries on middle column on the right side of Featured section -->
					
					<span class="catname">
						<a href="<?php echo get_category_link(of_get_option('of_tr_cat3'));?>"><?php echo get_cat_name(of_get_option('of_tr_cat3')); ?></a>
					</span>				
					
					<?php 
					$count = 1;
					$args = array(
					  'posts_per_page' => of_get_option('of_tr_nr3'),  
					  'cat' => of_get_option('of_tr_cat3')
					);
					$gab_query = new WP_Query();$gab_query->query($args); 
					while ($gab_query->have_posts()) : $gab_query->the_post();						
					?>
						<div class="featuredpost<?php if ($count == of_get_option('of_tr_nr3') ) { echo " lastpost"; } ?>">
							
							<h2 class="posttitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							
							<?php 
							gab_media(array(
								'name' => 'trns-primary_midcol', 
								'imgtag' => 1,
								'link' => 1,
								'enable_video' => 0, 
								'catch_image' => of_get_option('of_tr_catch_img'),
								'enable_thumb' => 1, 
								'resize_type' => 'c',
								'media_width' => '60', 
								'media_height' => '55', 
								'thumb_align' => 'alignright', 
								'enable_default' => of_get_option('of_tr_end3'),
								'default_name' => 'primary_midcol.jpg'	
							)); 										
							?>
							
							<p>
								<?php if(of_get_option('of_tr_author') == 1) { ?><span class="author"><?php the_author_posts_link(); ?></span> <?php } ?>
								<?php if(of_get_option('of_tr_date') == 1) { ?><span class="date"><?php echo get_the_time(); ?> | </span><?php } ?>
								<?php echo string_limit_words(get_the_excerpt(), 15); ?>&hellip;
							</p>
					
							<?php //gab_postmeta(); ?>

							<?php echo do_shortcode('[social_share]'); ?>
						</div>
					<?php $count++; endwhile; wp_reset_query(); ?>
					<!-- End of entries on middle column on the right side of Featured section -->
				<?php } ?>

				<?php gab_dynamic_sidebar( 'PrimaryMid2' ); ?>	
			</div><!-- End of midColPosts -->
			
		</div><!-- primary-content end -->
		
		<div id="primarysidebar">
			<?php include (get_stylesheet_directory() . '/home-sidebar1.php'); ?>
		</div><!-- End of rightColAd -->
		
		<div class="clear"></div>
	</div><!-- End of PrimaryWrapper (Featured block + Mid colum block + 120+600 ad) -->

	<?php include (get_stylesheet_directory() . '/home-mediabar.php'); ?>
	
	<?php //include (TEMPLATEPATH . '/home-primarybottom.php'); ?>
		
	<div id="secondary-wrapper">
		<?php include (get_stylesheet_directory() . '/home-secondarycontent.php'); ?>
		<?php include (get_stylesheet_directory() . '/home-sidebar2.php'); ?>
	</div><!-- end of secondary-wrapper -->

	<div class="clear"></div>

<?php get_footer(); ?>