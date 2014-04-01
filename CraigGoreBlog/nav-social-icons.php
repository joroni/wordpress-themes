<?php

add_action( 'genesis_after_header', 'social_icons' );

function social_icons() {
	?>
	<div class="nav-social-wrap">
		<ul>
			<li>
				<a href="https://www.facebook.com/pages/Craig-CKG-Gore/259629004127938" target="_blank" class="facebook social"></a>
			</li>
			<li>
				<a href="https://twitter.com/Cgorepf" target="_blank" class="twitter social"></a>
			</li>
			<li>
				<a href="https://plus.google.com/107732337708201113738/posts" target="_blank" class="googleplus social"></a>
			</li>
			<li>
				<a href="http://au.linkedin.com/pub/dir/Craig/Gore" target="_blank" class="linkedin social"></a>
			</li>
			<li>
				<a href="http://www.youtube.com/user/youidiotable" target="_blank" class="youtube social"></a>
			</li>
		</ul>
	</div>

	<?php
}