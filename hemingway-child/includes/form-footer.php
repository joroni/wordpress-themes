
<div class="page-seperator">
	<hr/>
		<div class="right-image">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Right.png" alt="">
		</div>
		<div class="left-image">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Left.png" alt="">
		</div>
		<div class="clear"></div>
</div>
<!-- End of Bottom Section-->

<!--  Downloads Section-->
<div class='home-section downloads'>
	<div class='downloadscentered'>
		<div class="download-section first">
			<div class="downloads-sub-infotxt">
				<span>Get a free download on how you can benefit from LTSC</span>
			</div>
			<div class="downloads-sub-info">
				<a class="ltscDownloadButton scrollMe" href="#contactform" ><div class="download-image"></div></a>
			</div>
			<div class="downloads-sub-infotxtlowerleft">
				<span>LTSC</span>
			</div>
		</div>

		<div class="download-section">
			<div class="downloads-sub-infotxt">
				<span>Property Risk Disclosure Document</span>
			</div>
			<div class="downloads-sub-info">
				<a href="http://cottonparkestate.com/wp-content/uploads/2014/03/PROPERTY-RISK-DISCLOSURE-DOCUMENT.pdf" download ><div class="download-image"></div></a>
			</div>
			<div class="downloads-sub-infotxtlowercenter desktop-only">
				<span>PROPERTY <br/>RISK DISCLOSURE</span>
			</div>
			<div class="downloads-sub-infotxtlowercenter mobile-only">
				<span>PRDD</span>
			</div>
		</div>

		<div class="clear mobile-only"></div>

		<div class="download-section last">
				<div class="downloads-sub-infotxt">
					<span>Download Cotton Park Estate Info Memorandum</span>
				</div>
				<div class="downloads-sub-info">
					<a href="http://cottonparkestate.com/wp-content/uploads/2014/03/COTTON-PARK.pdf" download ><div class="download-image"></div></a>
				</div>
				<div class="downloads-sub-infotxtlowerright">
					<span><img src="<?php echo get_stylesheet_directory_uri() ?>/images/CottonParkLogo.jpg"  alt=""></span>
				</div>

		</div>

		<div class='clear'></div>
	</div>
</div>
<!-- End of Downloads Section-->

<!-- Contact Form Section-->
<div class="ContactFormSection">
		<div class="page-seperator">
		<div class="right-image">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Right.png" alt="">
		</div>
		<div class="left-image">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Liseret-Left.png" alt="">
		</div>
		<div class="clear"></div>
		</div>
		<div class="ContactFormSectionInner">
			<form id="contactform" action="<?php echo get_stylesheet_directory_uri() ?>/email/emailSender.php" method="get">
				<input type="hidden" name="redirect" value="<?php echo home_url(add_query_arg(array(),$wp->request)) ?>" />
				<div class='home-section'>
					<div class='centered'>
						<div class="downloadlinks downloadlink" style="display:none;"><p>Please enter your details below and </p><p>we will send you the download link via email.</p></div>
						<div class="downloadlinks downloadlinksent" style="display:none;"><p>Thank you for your interest. <p></p>We have sent you a guide to LTSC's via email.</p></div>
					</div>
				</div>
					<div class='home-section form'>


						<div class='centered'>
							<div class="bottomcontactform first">
								<label class="contactdetails" for='clientname'>Full Name:</label>
							<input class="contactdetails clientName" type='text' name="clientName" id="clientname" placeholder="Please enter your name here...">
							</div>


							<div class="bottomcontactform">
								<label class="contactdetails" for='clientemail'>Email:</label>
								<input class="contactdetails clientEmail" type='text' name="clientEmail"  placeholder="Please enter your email here...">
							</div>

							<div class="bottomcontactform">
								<label class="contactdetails" for='clientNumber'>Phone:</label>
								<input class="contactdetails clientNumber" type='text'  name="clientNumber"  placeholder="Please enter your contact number here...">
							</div>

							<div class="bottomcontactform message">
								<label class="contactdetails" for='clientMessage'>Message</label>
								<textarea class="contactmessage clientMessage" type='textarea' name="clientMessage" placeholder="Please enter your message here..."></textarea>
							</div>

							<div class="bottomcontactform webinarcheck">

								<input class="clientwebinar" type="checkbox" name="clientRequestWebinar"   >

									<label class="clientwebinar">Click here to book a webinar with an LTSC Specialist</label>


								<input  class="contactdetails clientltsc" type="hidden" name="clientRequestLtsc"  value="NO" >
							</div>

							<div class="bottomcontactform">
									<button class="emailSubmitButton" type="submit" autocomplete="off">
										<img  id="emailsubmit" src="<?php echo get_stylesheet_directory_uri() ?>/images/submitbutton.png" alt="submit" />
									</button>
									<img  id="emailsent" src="<?php echo get_stylesheet_directory_uri() ?>/images/emailsent.jpg" style="display:none" alt="e-sent" />
									<div id="contactform_errorloc" class="error_strings">
							</div>
							</div>
								<div class='centered'>
									<div class="csub-info">
										<div>contact@cottonparkestate.com</div>
										<div>1800 177 199</div>
									</div>
								</div>
						</div>
					</div>
			</form>
			<script language="javascript" src="http://j.maxmind.com/app/geoip.js"></script>

		</div>
</div>
<div class="page-footer">
	<div class='centered'>

		<div class='centered img desktop-only' id="back-top">
		<a class="scrollMe fadeInOnView" href="#top"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/littlegrey.jpg" alt="submit" /></a>
		<br/>		BACK TO TOP

	</div>

	<div class="desktop-only">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/footer.jpg"  width="1000px;" alt="">
	</div>
	<div class="mobile-only">
		<br/><br/><br/>
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-mobile.jpg"   alt="">
	</div>
	<br/>&#169;2013 COTTON PARK ESTATE
	</div>

</div>

