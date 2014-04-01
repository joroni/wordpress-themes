<div id="footer">
	<div class="footer-top">
		<div id="other-site-feeds">
			<div id="other-site-feeds-left"><?php dynamic_sidebar( 'OtherSiteFeedsLeft1' ); ?></div>
			<div id="other-site-feeds-middle"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle1' ); ?></div>
			<div id="other-site-feeds-right"><?php dynamic_sidebar( 'OtherSiteFeedsRight1' ); ?></div>

			<div class="clear"></div>

			<div id="other-site-feeds-left"><?php dynamic_sidebar( 'OtherSiteFeedsLeft2' ); ?></div>
			<div id="other-site-feeds-middle"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle2' ); ?></div>
			<div id="other-site-feeds-right"><?php dynamic_sidebar( 'OtherSiteFeedsRight2' ); ?></div>

			<div class="clear"></div>

			<div id="other-site-feeds-left"><?php dynamic_sidebar( 'OtherSiteFeedsLeft3' ); ?></div>
			<div id="other-site-feeds-middle"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle3' ); ?></div>
			<div id="other-site-feeds-right"><?php dynamic_sidebar( 'OtherSiteFeedsRight3' ); ?></div>

			<div class="clear"></div>

			<div id="other-site-feeds-left"><?php dynamic_sidebar( 'OtherSiteFeedsLeft4' ); ?></div>
			<div id="other-site-feeds-middle"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle4' ); ?></div>
			<div id="other-site-feeds-right"><?php dynamic_sidebar( 'OtherSiteFeedsRight4' ); ?></div>
		</div>

		<div class="clear"></div>
	</div>
	<div class="footer-bottom">
		<div class='about-us'>
			<a href="http://exclusivelysport.com/exclusively-sport/">About Exclusively Sport!</a>
		</div>
		&nbsp;
		<div class="custom-social-container">
			<?php dynamic_sidebar( 'Navigation Widget Area' ); ?>
		</div>
	</div>
	<div class="contact-us">
		Contact Us: <a href="mailto:info@exclusivelysport.com">info@exclusivelysport.com</a>
		<br/>
		<strong>Exclusively Sport is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong>
	</div>
</div>
<div style="clear: both;"></div>
</div>

<?php get_template_part('includes/scripts'); ?>
<?php wp_footer(); ?>