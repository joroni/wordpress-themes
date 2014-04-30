<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package PowerMag
 * @since PowerMag 1.0
 */

$boxed = of_get_option('pm_boxed') == 'boxed';
?>

			</div><!-- #main .site-main -->
		<?php if (!$boxed) { ?>
		</div><!-- .container.supermain -->
		<?php } ?>
		
		<div id="footer-wrap">
			<div id="full-footer">
				<footer class="container" id="widgetized-footer">
					
					<div class="row">
						
						<div class="span4 footer-item">
							<?php
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')): 
							endif;
							?>
						</div>
						
						<div class="span4 footer-item">
							<?php
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')): 
							endif;
							?>
						</div>	
						
						<div class="span4 footer-item">
							<?php
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')): 
							endif;
							?>
						</div>
					
					</div><!--row-->		
				</footer><!--.container-->
			</div><!-- #full-footer -->
				
			<div id="full-site-info">	
				<div id="colophon" class="site-footer container" role="contentinfo">
					<div class="site-info row">
						
						<div class="span12">
						
							<?php if ( of_get_option('pm_footer_logo') != NULL ) { ?>
							<div id="footer-logo">
								<img src="<?php echo of_get_option('pm_footer_logo') ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							</div>
							<?php } ?>
							
							<div class="utilities footer">
								<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'footer-menu', 'depth' => 1 ) ); ?>
							</div>
						
							<p><?php echo of_get_option('pm_credits') ?></p>
						</div>
						
					</div><!-- .site-info -->
				</div><!-- #colophon .site-footer -->
			</div>
		</div><!--#footer-wrap-->
				
	<!--</div> #page .hfeed .site -->
<div class="disclaimer" style="color:#888;margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;">
	<p>
		The Owner t/a Broadbent Media cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br/>
		The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br/>
		The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br/>
		The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br/>
		The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
	</p>
</div>
<?php if (of_get_option('pm_scrollup') ) echo '<i class="icon-chevron-up icon-large scrollup"></i>'; ?>
	<?php if ($boxed) { ?>
	</div><!-- .container.supermain -->
	<?php } ?>
	
<?php wp_footer(); ?>
</body>
</html>