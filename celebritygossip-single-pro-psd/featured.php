<?php if ( get_option_mmtheme('featured_slider') == 'true' ) { ;?> 
 
 
<?php if( is_home() ){ ?> 

 
  
			<!-- featured-wrapper -->
			<div class="featured-wrapper">
					<div class="big">
						<?php $recent = new WP_Query('showposts=1&cat='.get_option('slider_cats_area').'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>
						<div class="featured-post-big">
							<div class="big-image"><a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_post_thumbnail( 'featuredbig' ); ?> </a> </div>
							<div class="big-title"><h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2> </div>
						</div>
						<?php endwhile; ?>  
					</div>
					
					
					<div class="small">
						<?php $recent = new WP_Query('showposts=1&cat='.get_option('slider_cats_area').'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>
						<div class="featured-post-small small-post1">
							<div class="small-image"><a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_post_thumbnail( 'featuredsmall' ); ?> </a></div>
							<div class="small-title"><h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
						</div>
						<?php endwhile; ?>
						<?php $recent = new WP_Query('showposts=1&cat='.get_option('slider_cats_area').'&offset=2'); while($recent->have_posts()) : $recent->the_post();?>
						<div class="featured-post-small small-post2"> 
							<div class="small-image"><a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_post_thumbnail( 'featuredsmall' ); ?> </a></div>
							<div class="small-title"><h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>		
						</div>						
						<?php endwhile; ?>
						<?php $recent = new WP_Query('showposts=1&cat='.get_option('slider_cats_area').'&offset=3'); while($recent->have_posts()) : $recent->the_post();?>
						<div class="featured-post-small small-post3">
							<div class="small-image"><a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_post_thumbnail( 'featuredsmall' ); ?> </a></div>
							<div class="small-title"><h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>	
						</div>
						<?php endwhile; ?>
						<?php $recent = new WP_Query('showposts=1&cat='.get_option('slider_cats_area').'&offset=4'); while($recent->have_posts()) : $recent->the_post();?>						
						<div class="featured-post-small small-post4"> 
							<div class="small-image"><a href="<?php the_permalink(); ?>" rel="bookmark">  <?php the_post_thumbnail( 'featuredsmall' ); ?> </a></div>
							<div class="small-title"><h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
						</div>
						<?php endwhile; ?>
						<div class="cb"></div>
					</div>
				<div class="cb"></div>

<?php if ( get_option_mmtheme('ad_2_on_off') == 'true' ) { ;?> 
<div class="ad-2">
<?php echo stripslashes( get_option_mmtheme('ad_2') ) ?>  		
</div>
<?php } ?> 				
				
			</div>
			<!-- end featured-wrapper --> 
<?php } } ?>			
<!-- #featuredbg Starts -->   
 
<!-- #featuredbg Ends --> 


