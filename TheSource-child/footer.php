<?php $fullWidthPage = is_page_template('page-full.php'); ?>

			</div> <!-- end #main-content -->
		</div> <!-- end #main-content-wrap -->
	</div> 	<!-- end .container -->
</div> <!-- end #content -->



<?php /* ad-footer */?>

<div class="ad-outer-container ad-footerBanner">
	<div class="ad-container">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Excl-news HomeMiddleAd -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3525701263209076"
     data-ad-slot="5359993747"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>
</div>


<div id="content-bottom">
	<div class="container<?php if ($fullWidthPage) echo(' nobg'); ?>"></div>
</div>

<div id="footer">
	<div class="container clearfix">

		<?php include( 'other-site-feeds.php' ); ?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
		<?php endif; ?>
		<div class="clear"></div>

		<div class="contact-us">
			Contact Us: <a href="mailto:info@a-museyourself.com">info@a-museyourself.com</a>
			<br/>
			<div class="contactAddress" style="text-align: center;padding: 12px">
				Level 19 Two International Finance Centre<br/>
				8 Finance Street, Central<br/>
				Hong Kong, China
			</div>
			<strong>A-muse Yourself is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong>
			<br/>
<div class="disclaimer" style="margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;">
	<p>
		The Owner t/a Broadbent Media (ACN: 163 361 144) cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br/>
		The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br/>
		The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br/>
		The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br/>
		The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
	</p>
</div>
			<br/>
		</div>

	</div> <!--end .container -->
</div> <!-- end #footer -->

<div id="footer-bottom">
	<div class="container clearfix">
		<?php global $is_footer;
		$is_footer = true; ?>

		<?php $menuClass = 'bottom-nav';
		$footerNav = '';

		if (function_exists('wp_nav_menu')) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false, 'depth' => '1' ) );
		if ($footerNav == '') show_page_menu($menuClass);
		else echo($footerNav); ?>

		<p id="copyright"><?php esc_html_e('Designed by ','TheSource'); ?> <a href="http://www.elegantthemes.com" title="Elegant Themes">Elegant Themes</a> | <?php esc_html_e('Powered by ','TheSource'); ?> <a href="http://www.wordpress.org">Wordpress</a></p>
	</div> <!--end .container -->
</div> <!-- end #footer-bottom -->


	<?php get_template_part('includes/scripts'); ?>

	<?php wp_footer(); ?>
</body>
</html>