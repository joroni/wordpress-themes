		</div> <!-- end wrapper -->

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


	</div> <!-- end main area wrap -->

		<div id="footer">
			<?php include( 'other-site-feeds.php' ); ?>

			<div class="contact-us">
				Contact Us: <a href="mailto:info@mwhealthandfitness.com">info@mwhealthandfitness.com</a>
				<br/>
				<div class="contactAddress" style="text-align: center;padding: 12px">
					Level 19 Two International Finance Centre<br/>
					8 Finance Street, Central<br/>
					Hong Kong, China
				</div>
				<strong>MW Health and Fitness is part of the <a href="http://broadbentmedia.com" target="_blank">Broadbent Media</a> Group.</strong>
			</div>
<div class="disclaimer" style="margin: 0 auto;padding: 12px 10px; text-align: center; font-size: 11px; max-width: 960px;">
	<p>
		The Owner t/a Broadbent Media (ACN: 163 361 144) cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Owner makes no warranties as to the availability or functionality.<br/>
		The Owner cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.<br/>
		The Owner may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Owner. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.<br/>
		The Owner takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.<br/>
		The Owner's sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
	</p>
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