<div class="cb"></div>
	<?php insertAd('ad-footer'); ?>
	<div class="footer-menu">
			<div id="fnav"> 
				<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'forth', 'container_id' => 'fotnav', 'container_class' => 'ddsmoothmenu1', 'fallback_cb'=>'primarymenu3') );?> 
			</div> 	
	</div>

		</div><!-- #content-wrapper .site-content -->
	</div><!-- #main -->
 
<div id="footer">

<div class="footer2-wrapper">
<div class="footer2-area">

	<?php include( 'other-site-feeds.php' ); ?>

    <div id="footerwrapper1"> 
 
		<!-- social-holder -->
					<div class="social-holder">							
							<ul class="social-networks">
							<?php if ( get_option_mmtheme('social8_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social8_link') ) ?>" class="rss">rss</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social12_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social12_link') ) ?>" class="youtube">youtube</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social10_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social10_link') ) ?>" class="twitter">twitter</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social7_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social7_link') ) ?>" class="pinterest">pinterest</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social3_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social3_link') ) ?>" class="flickr">flickr</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social5_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social5_link') ) ?>" class="gplus">gplus</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social6_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social6_link') ) ?>" class="linkedin">linkedin</a></li>
							<?php 	} ?>									
							<?php if ( get_option_mmtheme('social11_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social11_link') ) ?>" class="vimeo">vimeo</a></li>
							<?php 	} ?>								
							<?php if ( get_option_mmtheme('social2_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social2_link') ) ?>" class="facebook">facebook</a></li>
							<?php 	} ?>
							</ul> 
					</div>
		
		<div class="box-hold footerwrapper">                      
			<div class="box footer1">                   
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 1') ) : ?> 		
				<?php endif; ?>     <div class="cb"></div>       
			</div>
			<div class="box footer2">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 2') ) : ?> 		
				<?php endif; ?>           <div class="cb"></div> 
			</div>
			<div class="box footer3">                  
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 3') ) : ?> 		
				<?php endif; ?>            <div class="cb"></div>
			</div>
			<div class="box footer4">                    
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 4') ) : ?> 		
				<?php endif; ?>            <div class="cb"></div> 	
			</div>
		</div>
				
				
    </div>

</div>
</div><!-- footer2-wrapper -->


<div class="footer3-wrapper">
<div class="footer3-area">


	
					<div id="bottomfooter">
						<div class="site-footer">
						<?php echo stripslashes( get_option_mmtheme('copy_text') ) ?> | <a href="#top"> <?php _e("Back to top", "mm"); ?> </a>  
						</div>	<!-- .site-footer .site-footer -->
						<div class="cb"> </div> 	 	 

</div><!-- #bottomfooter -->
	<div class="contact-us">
		Contact Us: <a href="mailto:info@gollygoss.com">info@gollygoss.com</a>
		<br/>
		<strong>Golly Goss is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong>
	</div>
</div>
</div><!-- footer3-wrapper -->
</div><!-- #footer -->
  
<?php wp_footer(); ?>
<?php echo stripslashes( get_option_mmtheme('track_code') ) ?>   
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508dd6f042d9364c"></script>
</body>
</html>
