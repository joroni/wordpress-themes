<div class="post-holder">
<?php
$postCount = 0;
if (have_posts()) : while (have_posts()) :

the_post();

if ( $postCount === 3 ) { ?>
<div class="ad-outer-container ad-home-afterThirdPost">
	<div class="ad-container">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3525701263209076"
     data-ad-slot="8204212147"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>
</div>
<?php }

++$postCount;

if ( $meta_box = get_post_meta($post->ID, 'dbt_select1',true) == 'No Thumbnail') { ?>
<div class="homepost no-thumbnail">
	<div class="title-meta-holder">
		<div class="homepost-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> </div>
		<?php include("normalposts-meta.php"); ?> 
	</div>
		<div class="postarea">
				<div class="content-area"> <?php content('50'); ?> </div>
		</div>

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('35'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?> 
		
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
				<div class="content-area"> <?php content('35'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('40'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('40'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('54'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('54'); ?> </div>
				<div class="cb"></div>
		</div>

<?php get_template_part('home-gallery'); ?>

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

<?php get_template_part('home-gallery'); ?>

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
				<div class="content-area"> <?php content('36'); ?> </div>
				<div class="cb"></div>
			<?php } else { ?> 
				<div class="content-area no-thumb"> <?php content('54'); ?> </div>
			<?php } ?> 	
		</div>

<?php get_template_part('home-gallery'); ?>

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
