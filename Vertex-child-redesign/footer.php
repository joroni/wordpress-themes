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
				<br/><br/>
				<strong>Keep on Travellin is part of the <a href="http://broadbentmedia.com" target='_blank'>Broadbent Media</a> Group.</strong>
			</div>

			<div class="disclaimer">
						<p>Arion Group Pty Ltd t/a Broadbent Media (ACN: 163 361 144) cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. Arion Group Pty Ltd makes no warranties as to the availability or functionality.</p>

						<p>Arion Group Pty Ltd cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.</p>

						<p>Arion Group Pty Ltd may also not be held responsible for any kind of loss that is related to your use of content on websites operated by Arion Group Pty Ltd. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.v

						<p>Arion Group Pty Ltd takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.</p>

						<p>Arion Group Pty Ltd sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.</p>
					</div>
		</div> <!-- .container -->
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>