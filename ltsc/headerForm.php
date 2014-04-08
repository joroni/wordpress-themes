<div class="headerForm">
	<div class="headerForm-blurb">...</div>
	<form action="/wp-content/themes/ltsc/mail/email.php" method="GET"><!-- 1 -->
		<?php if ( $isVariant ) { ?>
			<input type="hidden" name="redirect" value="<?php echo home_url() ?>/thankyou-gold" />
		<?php } else { ?>
			<input type="hidden" name="redirect" value="<?php echo home_url() ?>/thankyou" />
		<?php } ?>
		<ul class="formList">
			<li>
				<label>Name :</label>
				<input name="name" />
			</li>
			<li>
				<label>Email :</label>
				<input name="email" />
			</li>
			<li>
				<label>Phone :</label>
				<input name="phone" />
			</li>
		</ul>
		
		<div class="headerForm-buttonBox">
			<button class="headerForm-button button" type="submit" autocomplete="off">Find Out How</button>
		</div>
	</form>
</div>