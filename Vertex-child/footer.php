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
				<br/><br/>
				<strong>Keep on Travellin is part of the <a href="http://broadbentmedia.com" target='_blank'>Broadbent Media</a> Group.</strong>
			</div>
		</div> <!-- .container -->
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>