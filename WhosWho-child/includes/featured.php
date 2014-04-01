<!--Begin Featured Section-->

<div id="featured-div">
    <!--Begin Featured Article-->
    <div id="feautred-article">
        <?php $featured_cat = get_option('whoswho_feat_cat');
			  query_posts("posts_per_page=4&cat=".get_catId($featured_cat));

				?>
				<div class="flex-container">
					<div class="flexslider">
						<ul class="slides">
							<?php while (have_posts()) : the_post(); ?>
								<?php $thumb = '';
									  $width = 175;
									  $height = 175;
									  $classtext = 'no_border';
									  $titletext = get_the_title();

									  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
									  $thumb = $thumbnail["thumb"]; ?>

									<?php if($thumb != '') { ?>
										<li>
											<a class='slider-image-container' href="<?php the_permalink() ?>" title="<?php printf(esc_attr__('Permanent Link to %s','WhosWho'), get_the_title()) ?>">
												<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
											</a>
											<div class="flex-caption">
												<h2><a href="<?php the_permalink() ?>" title="<?php printf(esc_attr__('Permanent Link to %s','WhosWho'), get_the_title()) ?>"><?php the_title() ?></a></h2>
												<p><?php truncate_post( 310 ); ?></p>

												<?php echo do_shortcode('[social_share]'); ?>
											</div>
										</li>
									<?php }; ?>
							<?php endwhile; wp_reset_query(); ?>z
						</ul>
					</div>
				</div>

			  

					

					<div class="featured-content">
						&nbsp;
					</div>

					<?php get_template_part( '/partials/social' , $post->post_type );  // http://yoast.com/wordpress-template-part/ ?>
			  
    </div>
    <!--End Feautred Article-->

	<div class='featured-ad'>
		<?php dynamic_sidebar( 'Featured Ad' ); ?>
	</div>

    <div style="clear: both;"></div>

</div>
<!--End Feautred Section-->