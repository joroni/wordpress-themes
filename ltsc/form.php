<div class="contactForm" id="contactForm">
	<div class="blurb">
	</div>
	<form action="<?php echo get_template_directory_uri() ?>/mail/email.php" method="GET"><!-- 1 -->
		<input type="hidden" name="redirect" value="<?php echo home_url() ?>/thankyou" />
		<ul class="formList">
			<li>
				<label>Full name :</label>
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
			<li>
				<label>Post code :</label>
				<input name="postCode" />
			</li>
			<li>
				<label>Country :</label>
				<input name="country" />
			</li>
		</ul>
		
		<div class="buttonBox row-center">
			<?php include 'buttons/form.php' ?>
		</div>
	</form>
</div>