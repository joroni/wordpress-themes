<div class="headerForm">
	<div class="headerForm-blurb">...</div>
	<form action="<?php echo get_template_directory_uri() ?>/mail/email.php" method="GET"><!-- 1 -->
		<input type="hidden" name="redirect" value="<?php echo home_url() ?>/thankyou" />
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