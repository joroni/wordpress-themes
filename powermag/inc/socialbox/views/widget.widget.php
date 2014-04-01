<?php
/*
 * SocialBox v.1.3.2
 * Copyright by Jonas Doebertin
 * Available at CodeCanyon: http://codecanyon.net/item/socialbox-social-wordpress-widget/627127
 */
?>


<!-- SocialBox Widget -->
<div class="socialbox">
	
	<ul>
		
		<?php foreach($networks as $network): ?>
			
		<li class="clearfix">
			<a href="<?php echo $network['link']; ?>" title="<?php echo $network['buttonHint']; ?>" <?php if($newWindow) echo 'target="_blank"'; ?>>
				<span class="sprite-sb sprite-<?php echo $network['type'] ?>_46"></span>
				<div class="social-box-txt">
					<span class="number"><?php echo $this->formatNumber($network['count'], $compactNumbers); ?></span><br />
					<span class="detail"><?php echo $network['metric']; ?></span>
				</div>
				<span class="socialbox-go"><i class="icon-chevron-right"></i></span>
			</a>
		</li>
			
		<?php endforeach; ?>
		
	</ul>
	
</div>
<!-- End SocialBox Widget -->