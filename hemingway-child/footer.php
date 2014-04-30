
	<?php include 'includes/form-footer.php'; ?>

	<div class="footer section large-padding bg-dark">
		
		<div class="footer-inner section-inner">
		
			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
				<div class="column column-1 left">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-a' ); ?>
											
					</div>
					
				</div>
				
			<?php else : ?>
			
				<div class="column column-1 left">
				
					<div class="widgets">
				
						<div id="search" class="widget widget_search">
						
							<div class="widget-content">
							
								<h3 class="widget-title"><?php _e( 'Search form', 'hemingway' ); ?></h3>
								<?php get_search_form(); ?>
								
							</div>
							
		                </div>
										
					</div>
					
				</div>
				
			<?php endif; ?> <!-- /footer-a -->
				
			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
			
				<div class="column column-2 left">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-b' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php else : ?>
			
				<div class="column column-2 left">
				
					<div class="widgets">
					
						<div class="widget widget_recent_entries">
						
							<div class="widget-content">
							
								<h3 class="widget-title"><?php _e( 'Latest posts', 'hemingway' ); ?></h3>
								
								<ul>
					                <?php
										$args = array( 'numberposts' => '5' );
										$recent_posts = wp_get_recent_posts( $args );
										foreach( $recent_posts as $recent ){
											echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
										}
									?>
								</ul>
				                
							</div>
							
		                </div>
										
					</div> <!-- /widgets -->
					
				</div>
				
			<?php endif; ?> <!-- /footer-b -->
								
			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
			
				<div class="column column-3 left">
			
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-c' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php else : ?>
			
				<div class="column column-3 left">
				
					<div id="meta" class="widget widget_text">
						<div class="widget-content">
						
							<h3 class="widget-title"><?php _e( "Add some widgets, won't you?", "hemingway" ); ?></h3>
							<p><?php _e( "This message is displayed because you haven't added any widgets to the footer yet. You can do so in the settings page at Appearance > Widgets.", "hemingway" ); ?></p>
			                
						</div>
	                </div>
									
				</div>
				
			<?php endif; ?> <!-- /footer-c -->
			
			<div class="clear"></div>
		
		</div> <!-- /footer-inner -->
	
	</div> <!-- /footer -->
	
	<div class="credits section bg-dark no-padding">
	
		<div class="credits-inner section-inner">
	
			<p class="credits-left">
			
				&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
			
			</p>
			
			<p class="credits-right">
				
				<span><?php printf( __( 'Theme by <a href="%s">Anders Noren</a>', 'hemingway'), 'http://www.andersnoren.se' ); ?></span> &mdash; <a title="<?php _e('To the top', 'hemingway'); ?>" class="tothetop"><?php _e('Up', 'hemingway' ); ?> &uarr;</a>
				
			</p>
			
			<div class="clear"></div>
			

		</div> <!-- /credits-inner -->
		
	</div> <!-- /credits -->

	<div class="disclaimer">
		The Owner t/a Broadbent Media cannot be held responsible for damages directly or indirectly may be caused by users who use our websites.<br/>
		The Owner makes no warranties as to the availability or functionality.<br/>
		The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br/>
		The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner.<br/>
		This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br/>
		The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br/>
		The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
	</div>
</div> <!-- /big-wrapper -->

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/app.js"></script>

</body>
</html>