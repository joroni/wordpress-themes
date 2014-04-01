<div class="cb"></div>

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
    <div id="footerwrapper1"> 
 
		
		
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
</div>
</div><!-- footer3-wrapper -->
</div><!-- #footer -->
  
<?php wp_footer(); ?>
<?php echo stripslashes( get_option_mmtheme('track_code') ) ?>   
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508dd6f042d9364c"></script>
</body>
</html>
