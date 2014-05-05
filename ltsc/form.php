<?php

include 'data.php';

?>
<div class="contactForm" id="contactForm">
	<form action="<?php echo get_template_directory_uri() ?>/email/emailSender.php" method="GET">
		<input type="hidden" name="redirect" value="<?php echo home_url() . $page['thankyou'] ?>" />
		<input type="hidden" name="googleEvent" value="<?php echo $page['googleEvent'] ?>" />
		<input type="hidden" name="page" value="<?php echo $page['path'] ?>" />
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
			<!--<li>
				<label>Post code :</label>
				<input name="postCode" />
			</li>
			<li class="contactCountry">
				<label>Country :</label>

				<select id="selectCountry" name="country" class="selectize" placeholder="Select a country...">
					<option value="">Select a country...</option>
					<?php foreach($data['countries'] as $code => $name) {
						$selected = $code === 'AU'  ? true : false;
						?>
						<option
							value="<?php echo $code ?>"
							<?php echo $selected ? 'selected' : '' ?>
						><?php echo $name ?></option>
						
					<?php } ?>
					
				</select>
			</li>
			-->
		</ul>
		
		<div class="buttonBox row-center">
			<?php include 'buttons/form.php' ?>
		</div>
	</form>
</div>