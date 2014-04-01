		</div> <!-- end wrapper -->
	</div> <!-- end main area wrap -->

		<div id="footer">
			<?php include( 'other-site-feeds.php' ); ?>

			<div class="contact-us">
				Contact Us: <a href="mailto:info@mwhealthandfitness.com">info@mwhealthandfitness.com</a>
				<br/>
				<strong>MW Health and Fitness is part of the <a href="http://broadbentmedia.com" target="_blank">Broadbent Media</a> Group.</strong>
			</div>

			<?php dynamic_sidebar( 'Header Widget Area' ); ?>
		</div> <!-- end footer -->
	</div> <!-- end container -->
</div> <!-- end content -->

<?php if ((is_home()) && (get_option('glow_featured') == 'on') ) { //scripts for featured area are loaded only on homepage / when Display Featured Articles is set to Display ?>
	<script type="text/javascript">
		jQuery(".js ul#page-menu, .js ul#cats-menu, .js img#logo, .js div.custom-sidebar-block").show(); //prevents a flash of unstyled content
	</script>
<?php } else { ?>
	<script type="text/javascript">
		jQuery(".js ul#page-menu, .js ul#cats-menu, .js img#logo, .js div.custom-sidebar-block").show(); //prevents a flash of unstyled content
	</script>
<?php };

get_template_part('includes/scripts');
wp_footer(); ?>
</body>
</html>