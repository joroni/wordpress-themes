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
		</div>
		<br/>
		<?php dynamic_sidebar('footerDisclaimer') ?>
		
	</div>

	<?php wp_footer(); ?>
</body>
</html>