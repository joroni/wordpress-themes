		<div class="footer-banner">
			<?php insertAd('ad-footerBanner') ?>
		</div>

		<?php include('other-site-feeds.php'); ?>
		
		<?php get_sidebar( 'footer' ); ?>

		<div id="footer-bottom">
		<?php
			$menu_class = 'bottom-nav';
			$footerNav = '';

			$footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );

			if ( '' === $footerNav )
				show_page_menu( $menu_class );
			else
				echo( $footerNav );
		?>
		</div> <!-- #footer-bottom -->
	</div> <!-- .page-wrap -->

	<div id="footer-info" class="container">
		<div class="contact-us">
			Contact Us: <a href="mailto:info@takeonproperty.com">info@takeonproperty.com</a> | Take on Property is part of the <a href="http://broadbentmedia.com" target="_blank">Broadbent Media</a> Group.
			<br/>
			<div class="contactAddress" style="text-align: right;padding: 12px">
				Level 19 Two International Finance Centre<br/>
				8 Finance Street, Central<br/>
				Hong Kong, China
			</div>

		</div>
		<br/>
<p style="text-align:center;" class="footerLinks"><a href="http://broadbentmedia.com/privacy/">Privacy Policy</a></p>
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

	<?php wp_footer(); ?>
</body>
</html>