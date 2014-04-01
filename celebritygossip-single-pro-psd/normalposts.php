<div class="post-holder">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'No Thumbnail') { ?>
<div class="homepost no-thumbnail">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-area"> <?php the_content_limit('540'); ?> </div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 


 
<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Small thumbnail in Left') { ?>
<div class="homepost small-image-left">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'smallthumb-left' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('365'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?> 
		
	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
	

	
</div> 

 

<?php } elseif  ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Small thumbnail in Right') { ?>
<div class="homepost small-image-right">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'smallthumb-left' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('365'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Big left thumbnail') { ?>
<div class="homepost big-image-left">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'bigthumb-left' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('400'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Big right thumbnail') { ?>
<div class="homepost big-image-right">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'bigthumb-left' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('400'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Center Big Thumbnail') { ?>
<div class="homepost big-image-center">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'big-image-center' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('540'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>   
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Video') { ?>
<div class="homepost video">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-image"><?php echo get_post_meta($post->ID, "dbt_videocode", $single = true); ?> </div>
				<div class="content-area"> <?php the_content_limit('540'); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } elseif ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'Full Post') { ?>
<div class="homepost full-post">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-area"> <?php the_content(); ?> </div>
				<div class="cb"></div>
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 



<?php } else { ?>
<div class="homepost normal-post">

	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
			<?php if( has_post_thumbnail() ) { ?>	
				<div class="content-image"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'smallthumb-left' ); ?></a></div>
				<div class="content-area"> <?php the_content_limit('365'); ?> </div>
				<div class="cb"></div>
			<?php } else { ?> 
				<div class="content-area no-thumb"> <?php the_content_limit('540'); ?> </div>
			<?php } ?> 	
		</div>

<?php include("home-gallery.php"); ?>

	<div class="tags-readmore-holder">
		<div class="tags"><?php the_tags('<span>' . __('Tags:', 'mm') . '</span> ' ,', ' ); ?></div>
		<div class="readmore"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php _e("Continue Reading", "mm"); ?> </a></div>
		<div class="cb"></div>
	</div>
</div> 

<?php } ?> 

<?php endwhile; ?>

<div class="pagination-wrapper"><?php magazine3_pagination(); ?></div>

 <?php endif;  ?>  <br />
 </div>
