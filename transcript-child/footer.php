</div><!-- end of wrapper -->

<div id="other-site-feeds">
	<div id="other-site-feeds-left"><?php gab_dynamic_sidebar( 'OtherSiteFeedsLeft1' ); ?></div>
	<div id="other-site-feeds-middle"><?php gab_dynamic_sidebar( 'OtherSiteFeedsMiddle1' ); ?></div>
	<div id="other-site-feeds-right"><?php gab_dynamic_sidebar( 'OtherSiteFeedsRight1' ); ?></div>

	<div class="clear"></div>

	<div id="other-site-feeds-left"><?php gab_dynamic_sidebar( 'OtherSiteFeedsLeft2' ); ?></div>
	<div id="other-site-feeds-middle"><?php gab_dynamic_sidebar( 'OtherSiteFeedsMiddle2' ); ?></div>
	<div id="other-site-feeds-right"><?php gab_dynamic_sidebar( 'OtherSiteFeedsRight2' ); ?></div>

	<div class="clear"></div>

	<div id="other-site-feeds-left"><?php gab_dynamic_sidebar( 'OtherSiteFeedsLeft3' ); ?></div>
	<div id="other-site-feeds-middle"><?php gab_dynamic_sidebar( 'OtherSiteFeedsMiddle3' ); ?></div>
	<div id="other-site-feeds-right"><?php gab_dynamic_sidebar( 'OtherSiteFeedsRight3' ); ?></div>

	<div class="clear"></div>

	<div id="other-site-feeds-left"><?php gab_dynamic_sidebar( 'OtherSiteFeedsLeft4' ); ?></div>
	<div id="other-site-feeds-middle"><?php gab_dynamic_sidebar( 'OtherSiteFeedsMiddle4' ); ?></div>
	<div id="other-site-feeds-right"><?php gab_dynamic_sidebar( 'OtherSiteFeedsRight4' ); ?></div>
</div>

<div class="clear"></div>

<div id="footer">

	<div class="footerlist">
	<?php
	if(of_get_option('of_nav3') == 1) {
		wp_nav_menu( array('theme_location' => 'footer-nav1', 'container' => false, 'menu_class' => '' ));
	} else { ?>
		<ul>
			<li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php _e('Home','transcript'); ?></a></li>
			<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=&exclude='. of_get_option('of_ex_pages')); ?>
			<li class="last"><a href="<?php if ( of_get_option('of_tr_rssaddr') <> "" ) { echo of_get_option('of_tr_rssaddr'); } else { echo bloginfo('rss2_url'); } ?>" rel="nofollow" title="<?php _e('Subscribe to latest posts in RSS','transcript'); ?>"><?php _e('RSS','transcript'); ?></a></li>
		</ul>
	<?php } ?>
	</div>



	<div class="clear"></div>

	<div id="footer-left-side">
		<?php /* Replace default text if option is set */
		if( of_get_option('of_tr_footer_left') == 1){
			echo of_get_option('of_tr_footer_left_text');
		} else {
		?>
			<a href="#top" title="<?php bloginfo('name'); ?>" rel="home"><strong>&uarr;</strong> <?php bloginfo('name'); ?></a>
		<?php } ?>
	</div><!-- #site-info -->

	<div id="footer-right-side">

		<div class="header-widget-area">
			<?php gab_dynamic_sidebar( 'Footer2' );?>
		</div>

		<!-- <a href="http://wordpress.org/" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'transcript'); ?>" rel="generator"><?php _e('Powered by WordPress', 'transcript'); ?></a> -  -->
		<!-- Designed by <a href="http://www.gabfirethemes.com/" title="Premium WordPress Themes">Gabfire Themes</a>  -->
		<?php wp_footer(); ?>
	</div> <!-- #footer-right-side -->
	<div class="clear"></div>

	<div class="contact-info">
		Contact us: <a href="mailto:info@exclusivelynews.com">info@exclusivelynews.com</a><br/>
		<p><strong>Exclusively News is part of the <a target="_blank" href="http://broadbentmedia.com">Broadbent Media</a> Group.</strong></p>
	</div>
</div><!-- /footer -->

</body>
</html>