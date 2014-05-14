<?php

/*
Template Name: Contact - Main LTSC
 */

$tplUrl		= get_template_directory_uri();
$folderUrl	= $tplUrl . '/site';

include 'header.php';
?>

<div class="core contactPage page">
	<div class="coreInner heading">
		<h2>CONTACT</h2>
	</div>
	<div class="coreInner pageContent">
		<div class="addresses row-center">
			<div class="col-center block">
				<h2>HONG KONG</h2>
				<div class="text">
					Level 19<br/>
					Two International<br/>
					Finance Centre<br/>
					8 Finance Street, Central<br/>
					Hong Kong, China
				</div>
			</div>
			<div class="col-center block">
				<h2>SOUTHPORT</h2>
				<div class="text">
					Level 1<br/>
					Corner Nind Street/Marine Parade<br/>
					Southport QLD 4215<br/>
					PO Box 2445<br/>
					Southport BC QLD 4215<br/>
				</div>
			</div>
			<div class="col-center block">
				<h2>SYDNEY</h2>
				<div class="text">
					Level 36,<br/>
					Gateway Tower<br/>
					1 Macquarie Place, Sydney<br/>
					NSW 2000 
				</div>
			</div>
		</div>

		<p class="freeCall"><b>Free Call</b>: <span>1800</span><span> <span>177</span> 199</span></p>


		<?php if ( isset($_GET['submitted']) ) { ?>
			<div class="submittedMessage">
				Submission successful!
			</div>
		<?php } else { ?>
			<div class="contactForm">
				<form action="<?php echo $folderUrl ?>/contactSubmit.php" method="post">
					<input type="hidden" name="redirect" value="<?php echo home_url() ?>/contact?submitted" />
					<div class="inputBox">
						<label>FULL NAME</label><input name="name" />
					</div>
					<div class="inputBox">
						<label>PHONE</label><input name="phone" />
					</div>
					<div class="inputBox">
						<label>EMAIL</label><input name="email" />
					</div>
					<div class="inputBox">
						<textarea name="body" placeholder="..."></textarea>
					</div>
					<div class="submitBox">
						<button type="submit">SUBMIT MY REQUEST</button>
					</div>
				</form>
			</div>
		<?php } ?>

	</div>
</div>

<?php
include 'footer.php';

?>

