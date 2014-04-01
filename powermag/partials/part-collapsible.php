<div id="collapse-trigger">
	<a class="collapse" data-toggle="collapse" data-target="#newsletter">
		<?php if ( of_get_option('pm_collapsible_newsletter') AND !of_get_option('pm_collapsible_custom')  ) { 
			echo '<i class="icon-envelope-alt"></i>';
		} else {
			echo '<i class="icon-plus"></i>'; }
		?>
	</a>
</div><!--#collapse-trigger-->

<div id="full-collapsible">
	<div class="container hidden-box">
		<div id="newsletter" class="accordion-body collapse">
			<div class="hidden-box-inner">
		
<?php if ( of_get_option('pm_collapsible_newsletter') ) { ?>
				<h2><?php echo of_get_option('pm_collapsible_nl_catch')?></h2>
				<div class="input-append newsletter-form">
				<!-- Begin MailChimp Signup Form -->
					<form action="<?php echo of_get_option('pm_collapsible_nl_action'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="email span4" id="mce-EMAIL" placeholder="<?php _e('Enter your email address', 'powermag'); ?>" required>
						<input type="submit" value="<?php _e('Go!', 'powermag'); ?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn-inverse">
					</form>
				<!--End mc_embed_signup-->
				</div>
<?php } ?>

<?php if ( of_get_option('pm_collapsible_custom') ) { ?>
				<div class="collapsible-custom">
					<?php echo of_get_option('pm_toggle_textarea'); ?>
				</div>
<?php } ?>

			</div> <!-- hidden-box-inner-->
		</div><!-- #newsletter -->
	</div><!-- .hidden-box -->
</div><!-- #full-collapsible -->