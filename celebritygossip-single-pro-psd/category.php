<?php get_header(); ?>
<div id="content-wrapper" class="site-content">


<div id="content" role="main">

           <div class="cat-title-b0-1"> 
		   <h1><center>
			<span><?php _e("You Are Browsing ", "mm"); ?> <b>&#8216;<?php single_cat_title(); ?>&#8217;</b> <?php _e("Category ", "mm"); ?></span>
			<center></h1>
				<div class="cb"></div> 
			</div>

 
		
<section> 
 <?php if ( get_option_mmtheme('ad_5_on_off') == 'true' ) { ;?> 
<center> 
<div class="ad-5">
<?php echo stripslashes( get_option_mmtheme('ad_5') ) ?>  		
</div>
</center>
<?php 	} ?>


<?php include(TEMPLATEPATH . '/normalposts.php'); ?> 


<?php if ( get_option_mmtheme('ad_6_on_off') == 'true' ) { ;?> 
<center> 
<div class="ad-6">
<?php echo stripslashes( get_option_mmtheme('ad_6') ) ?>  		
</div>
</center>
<?php 	} ?>



</section>

 

			</div><!-- #content -->
<?php get_sidebar(); ?>		
<?php get_footer(); ?>
