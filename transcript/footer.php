</div><!-- end of wrapper -->

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
		<?php /* Replace default text if option is set */
		if( of_get_option('of_tr_footer_right') == 1){ 
			echo of_get_option('of_tr_footer_right_text');
		} else {
			wp_loginout(); 
			if ( is_user_logged_in() ) { 
				echo '-'; ?>
				<a href="<?php bloginfo('url'); ?>/wp-admin/edit.php">Posts</a> - 
				<a href="<?php bloginfo('url'); ?>/wp-admin/post-new.php">Add New</a>
			<?php } ?> - 
		<?php } ?>
		<a href="http://wordpress.org/" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'transcript'); ?>" rel="generator"><?php _e('Powered by WordPress', 'transcript'); ?></a> - 
		Designed by <a href="http://www.gabfirethemes.com/" title="Premium WordPress Themes">Gabfire Themes</a> 
		<?php wp_footer(); ?>
	</div> <!-- #footer-right-side -->
	<div class="clear"></div>
</div><!-- /footer -->

</body>
</html>