<?php

include __DIR__ . '/../data.php';

?>
<div class="contactForm" id="contactForm">
	<form action="<?php echo get_template_directory_uri() ?>/email/emailSender.php" method="GET">
		<input type="hidden" name="redirect" value="<?php echo home_url() . $page['thankyou'] ?>" />
		<input type="hidden" name="googleEvent" value="<?php echo $page['googleEvent'] ?>" />
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
				<label>Income :</label>
				<input name="income" />
			</li>
			<li class="ownProperty">
				<label>Do you own property ?</label>
				<span class="radioBoxes">
					<label>YES</label><input type="radio" name="ownsProperty" value="1" />
					<label>NO</label><input type="radio" name="ownsProperty" value="0" />
				</span>
			</li>
			<li>
				<label>Date of birth :</label>
				<input name="birthDate" />
			</li>
			<li>
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
			<li class="message">
				In 30 words or less tell us why you deserve the tickets.<br/>
				You must complete this field in order to be eligible.
			</li>
			<li class="fullInput">
				<textarea name="text" placeholder="..."></textarea>
			</li>
		</ul>
		
		<div class="buttonBox row-center">
			<button class="contact-button col button" type="submit" autocomplete="off">PLAY NOW</button>
		</div>
	</form>
</div>