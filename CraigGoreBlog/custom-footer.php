<?php


remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'custom_footer' );

function custom_footer() {
	?>
	<div class="footer-top">
		<div class="one-half first">
			<a href="<?php echo home_url(); ?>" class='footer-logo'></a>
		</div>
		<div class="one-half">
			<div class="social-wrap">
				<ul>
					<li>
						<a href="https://www.facebook.com/pages/Craig-CKG-Gore/259629004127938" target="_blank" class='social facebook'></a>
					</li>
					<li>
						<a href="https://twitter.com/Cgorepf" target="_blank" class='social twitter'></a>
					</li>
					<li>
						<a href="https://plus.google.com/107732337708201113738/posts" target="_blank" class='social googleplus'></a>
					</li>
					<li>
						<a href="http://au.linkedin.com/pub/dir/Craig/Gore" target="_blank" class='social linkedin'></a>
					</li>
					<li>
						<a href="http://www.youtube.com/user/youidiotable" target="_blank" class='social youtube'></a>
					</li>
				</ul>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>

	<div class="footer-bottom">
		<p>
			Copyright &copy; <?php echo date('Y'); ?> Craig K. Gore. All Rights Reserved.
		</p>

		<div class="disclaimer">
			<p>
				The Writer cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. The Writer makes no warranties as to the availability or functionality.

				The Writer cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.

				The Writer may also not be held responsible for any kind of loss that is related to your use of content on websites operated by The Writer. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.

				The Writer takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.

				The Writer sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
			</p>
		</div>
	</div>
	<?php
}

?>