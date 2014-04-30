<?php insertAd('ad-footerBanner') ?>

<?php if ( is_home() ) : ?>
	<div id="pre-footer">
		<div class="container">
			<p class="tagline"><?php bloginfo( 'description' ); ?></p>

			<br />

			<?php et_vertex_action_button(); ?>
		</div> <!-- .container -->
	</div> <!-- #pre-footer -->
<?php endif; ?>

	<footer id="main-footer">
		<div class="container">

			<?php include( 'other-site-feeds.php' ); ?>

			<?php get_sidebar( 'footer' ); ?>

			<div class="contact-us">
				Contact Us: <a href="mailto:info@keepontravellin.com">info@keepontravellin.com</a>
				<br/>
				<div class="contactAddress" style="text-align: center;padding: 12px">
					Level 19 Two International Finance Centre<br/>
					8 Finance Street, Central<br/>
					Hong Kong, China
				</div>
				<strong>Keep on Travellin is part of the <a href="http://broadbentmedia.com" target='_blank'>Broadbent Media</a> Group.</strong>
				<br/><br/>
				<div style="color:#6f6f6f;font-style:normal;margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;" class="disclaimer">
The Owner t/a Broadbent Media cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br>
The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br>
The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br>
The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br>
The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
</div>
			</div>
		</div> <!-- .container -->
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>