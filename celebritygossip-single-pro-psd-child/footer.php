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
		<div class="contactAddress" style="text-align: center;padding: 12px">
			Level 19 Two International Finance Centre<br/>
			8 Finance Street, Central<br/>
			Hong Kong, China
		</div>

		<strong>Golly Goss is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong>
		<br/><br/>
<div style="margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;" class="disclaimer">
<p>
The Owner t/a Broadbent Media cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br>
The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br>
The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br>
The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br>
The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
</p>
</div>
	</div>

</div>
</div><!-- footer3-wrapper -->
</div><!-- #footer -->
  
<?php wp_footer(); ?>
<?php echo stripslashes( get_option_mmtheme('track_code') ) ?>   
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508dd6f042d9364c"></script>
</body>
</html>
