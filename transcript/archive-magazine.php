		<?php if(!is_paged()) { ?>
								<div id="container" class="fullwidth">
													<div id="magazine-maincol">
												
													<div id="bcrum">
														<?php gab_breadcrumb(); ?>
													</div>		
													
													<?php 
													$count = 1;
													if (have_posts()) : while (have_posts()) : the_post();			
													$gab_thumb = get_post_meta($post->ID, 'thumbnail', true);
													$gab_video = get_post_meta($post->ID, 'video', true);
													$gab_flv = get_post_meta($post->ID, 'videoflv', true);
													$gab_iframe = get_post_meta($post->ID, 'iframe', true);
													 ?>		

													<?php if($count == 1) { ?>
														<div id="magazine-top-left">
													<?php } /* magazine layout left column */  ?>
															
													
																						<?php if($count <= 2) { ?>
																							<div class="featuredpost<?php if($count == 2) { echo ' lastpost'; } ?>">
																								<?php
																								if($count == 1) {
																									gab_media(array(
																										'name' => 'trns-mag1',
																										'imgtag' => 1,
																										'link' => 1,
																										'enable_video' => 1,
																										'video_id' => 'mag1',
																										'catch_image' => of_get_option('of_catch_img', 0),
																										'enable_thumb' => 1,
																										'resize_type' => 'c',
																										'media_width' => 400, 
																										'media_height' => 225, 
																										'thumb_align' => 'aligncenter',
																										'enable_default' => 0
																									));
																								}

																								if($count == 2) {
																									gab_media(array(
																										'name' => 'trns-mag2',
																										'imgtag' => 1,
																										'link' => 1,
																										'enable_video' => 1,
																										'video_id' => 'mag1',
																										'catch_image' => of_get_option('of_catch_img', 0),
																										'enable_thumb' => 1,
																										'resize_type' => 'c',
																										'media_width' => 100, 
																										'media_height' => 78, 
																										'thumb_align' => 'alignleft',
																										'enable_default' => 0
																									));
																								}
																								?>	
																								
																								<h2 class="posttitle">
																									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
																								</h2>
																								<p>
																								<?php if(of_get_option('of_ln_post_author') == 1) { ?>
																									<span class="author"><?php the_author_posts_link(); ?> | </span> 
																								<?php } ?>		
																								
																								<?php
																								if($count == 1) {
																									echo string_limit_words(get_the_excerpt(),24);
																								 } elseif ($count == 2) {
																									echo string_limit_words(get_the_excerpt(),15);
																								} ?>
																								
																								&hellip;</p>
																								
																								<?php gab_postmeta(); ?>
																							</div>	
																						<?php  } ?>					

													<?php if($count == 2) { ?>
														</div><!-- magazine-top-left -->
																			
														<div id="magazine-top-right">
													<?php } /* magazine layout right column */ ?>
													
																					<?php if (( $count > 2 ) and ( $count < 6)) { ?>
																						<div class="featuredpost<?php if ($count == 5) { echo " lastpost"; } ?>">
																							<h2 class="posttitle">
																								<a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
																							</h2>
																							<p>
																								<?php if(of_get_option('of_ln_post_author') == 1) { ?>
																									<span class="author"><?php the_author_posts_link(); ?> | </span> 
																								<?php } ?>					
																								<?php print string_limit_words(get_the_excerpt(), 18); ?>&hellip;<?php edit_post_link(' #',' / ',''); ?>
																							</p>
																							<span class="postmeta">
																								<?php echo get_the_date(''); ?> / 
																								<?php comments_popup_link(__('No Comment','transcript'), __('1 Comment','transcript'), __('% Comments','transcript'));?> / 
																								<a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>"><?php _e('More','transcript'); ?></a>
																								
																							</span>
																						</div>
																					<?php } ?>

													<?php if($count == 6) { ?>
														</div><!-- magazine-top-mid -->
											
														<div class="borderseparator"></div>
													<?php } /* magazine layout below left and mid column */ ?>
													
																					<?php if ( $count == 6 ) { ?>
																							<div id="magazine-bot-left">
																								<div class="featuredpost lastpost">
																										
																									<h2 class="posttitle">
																										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
																									</h2>
																									
																									<p>
																										<?php
																										gab_media(array(
																											'name' => 'trns-mag3',
																											'imgtag' => 1,
																											'link' => 1,
																											'enable_video' => 1,
																											'video_id' => 'mag1',
																											'catch_image' => of_get_option('of_catch_img', 0),
																											'enable_thumb' => 1,
																											'resize_type' => 'c',
																											'media_width' => 80, 
																											'media_height' => 63, 
																											'thumb_align' => 'alignleft',
																											'enable_default' => 0
																										));
																										?>
																										<?php if(of_get_option('of_ln_post_author') == 1) { ?>
																											<span class="author"><?php the_author_posts_link(); ?> | </span> 
																										<?php } ?>		
																										
																										<?php echo string_limit_words(get_the_excerpt(),30); ?>&hellip;
																									</p>
																									
																									<?php gab_postmeta(); ?>
																								</div>	
																							</div><!-- magazine-bot-left -->
																							
																							<div id="magazine-bot-right">
																					<?php } ?>
													
																					<?php if ( $count > 6 ) { ?>
																					
																							<div class="featuredpost<?php if($count == 8) { echo ' lastpost'; } ?>">
																								<?php
											
																									gab_media(array(
																										'name' => 'trns-mag2',
																										'imgtag' => 1,
																										'link' => 1,
																										'enable_video' => 1,
																										'video_id' => 'mag2',
																										'catch_image' => of_get_option('of_catch_img', 0),
																										'enable_thumb' => 1,
																										'resize_type' => 'c',
																										'media_width' => 100, 
																										'media_height' => 78, 
																										'thumb_align' => 'alignleft',
																										'enable_default' => 0
																									));
																
																								?>	
																								
																								<h2 class="posttitle">
																									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'transcript' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
																								</h2>
																								
																								<p>
																									<?php if(of_get_option('of_ln_post_author') == 1) { ?>
																										<span class="author"><?php the_author_posts_link(); ?> | </span> 
																									<?php } ?>		
																									
																									<?php echo string_limit_words(get_the_excerpt(),15); ?>&hellip;
																								</p>
																								
																								<?php gab_postmeta(); ?>
																							</div>	
																					
																					<?php } ?>

																					<?php if ( $count == 8 ) { ?></div><!-- magazine-bot-right --><?php } ?>
													<?php $count++; endwhile; endif; ?>				
																					
																					
													</div><!--magazine-maincol -->
													
													<div id="sidebar">
														<?php get_sidebar(); ?>
													</div>
														
													<div class="borderseparator"></div>
													<?php
													// load pagination if needed
													if (($wp_query->max_num_pages > 1) && (function_exists("pagination"))) {
														pagination($additional_loop->max_num_pages);
													}
													wp_reset_query();
													?>				
												</div><!-- /container -->
												<div class="clear"></div>
								<?php } else {

													include (TEMPLATEPATH . '/archive-default.php'); 

								} ?>		