
<div class="page-seperator">
	<hr/>
		<div class="right-image">
			<img src="/wp-content/themes/hemingway-child/images/Liseret-Right.png" alt="">
		</div>
		<div class="left-image">
			<img src="/wp-content/themes/hemingway-child/images/Liseret-Left.png" alt="">
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
				<a href="javascript:clientsetFocus();" ><div class="download-image"></div></a>
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
					<span><img src="/wp-content/themes/hemingway-child/images/CottonParkLogo.jpg"  alt=""></span>
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
			<img src="/wp-content/themes/hemingway-child/images/Liseret-Right.png" alt="">
		</div>
		<div class="left-image">
			<img src="/wp-content/themes/hemingway-child/images/Liseret-Left.png" alt="">
		</div>
		<div class="clear"></div>
		</div>
		<div class="ContactFormSectionInner">
			<script type="text/javascript">var submitted=false;</script><iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location='http://www.cottonparkestate.com';}"></iframe>
			<form id="contactform" action="javascript:SendAnEmail();" method="post" target="hidden_iframe" name="request" onsubmit="return validateForm();submitted=true;">

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
							<input class="contactdetails clientName" type='text' name="clientname" id="clientname" placeholder="Please enter your name here...">
							</div>


							<div class="bottomcontactform">
								<label class="contactdetails" for='clientemail'>Email:</label>
								<input class="contactdetails clientEmail" type='text' name="clientemail"  placeholder="Please enter your email here...">
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

								<input class="clientwebinar" type="checkbox" name="clientwebinar"   >

									<label class="clientwebinar">Click here to book a webinar with an LTSC Specialist</label>


								<input  class="contactdetails clientltsc" type="hidden" name="clientltsc"  value="NO" >
							</div>

							<div class="bottomcontactform">
									<button type="submit" style="border: 0; background: transparent" onclick="return validateForm();">
			   					 		<img  id="emailsubmit" src="/wp-content/themes/hemingway-child/images/submitbutton.png" alt="submit" />
									</button>
									<img  id="emailsent" src="/wp-content/themes/hemingway-child/images/emailsent.jpg" style="display:none" alt="e-sent" />
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
		<a href="#top"><img src="/wp-content/themes/hemingway-child/images/littlegrey.jpg" alt="submit" /></a>
		<br/>		BACK TO TOP

		</div>


	<div class="desktop-only">
		<img src="/wp-content/themes/hemingway-child/images/footer.jpg"  width="1000px;" alt="">
	</div>
	<div class="mobile-only">
		<br/><br/><br/>
		<img src="/wp-content/themes/hemingway-child/images/footer-mobile.jpg"   alt="">
	</div>
	<br/>&#169;2013 COTTON PARK ESTATE
	</div>

</div>
<script language="JavaScript" type="text/javascript" xml:space="preserve">



  var frmvalidator = new Validator("contactform");
 frmvalidator.EnableOnPageErrorDisplaySingleBox();
 //frmvalidator.EnableMsgsTogether();

 frmvalidator.addValidation("clientname","req","Please enter your Full Name");
 frmvalidator.addValidation("clientname","maxlen=50","Max length for Name is 50");
 frmvalidator.addValidation("clientname","alpha_s","Name can contain alphabetic chars only");
 frmvalidator.addValidation("clientemail","maxlen=50");
 frmvalidator.addValidation("clientemail","req","Please enter valid Email Address");
 frmvalidator.addValidation("clientemail","email","Please enter valid Email Address");;

 frmvalidator.addValidation("clientNumber","maxlen=50");
  frmvalidator.addValidation("clientNumber","req","Please enter valid Contact Number");
 frmvalidator.addValidation("clientNumber","numeric");

function clientsetFocus()

{

document.querySelector(".clientName").focus();
document.querySelector(".clientltsc").value="yes";
document.querySelector(".downloadlink").style.display="block";
postContactToGoogle();
}
</script>
				<!-- End of Contact Form Section-->

<!-- Script for jQuery animations -->
<script type='text/javascript'>
	$(document).ready(function () {
		window.animatedList = [];
		setupAnimationObjects();

		$(window).scroll(function () {
			checkAnimations();
		});
	});
	function checkAnimations() {
		var screenPos = $(window).scrollTop();

		$.each( window.animatedList, function (i, obj) {
			if( screenPos >= obj.animationTrigger() && !obj.animationComplete ) {
				animateObj( obj.reference );
				obj.animationComplete = true;
			}
		});
	}

	function animateObj( htmlObj ) {
		htmlObj.animate( htmlObj.data('animation'), parseInt( htmlObj.data('anim-duration'), 10) , function () {
			if( htmlObj.data('next-animation') ) {
				animateObj( $(htmlObj.data('next-animation')) );
			}
		});
	}

	function setupAnimationObjects() {
		var list = $(".animated");

		$.each(list, function (i, obj) {
			animatedList.push( generateAnimObj( obj ) );
		});
	}

	function generateAnimObj( obj ) {
		return {
			'animationTrigger': function () {
				if( $(obj).data('anim-trigger') === 'center' ) {
					return $(obj).offset().top - ($(window).height() / 2);
				}
				if( $(obj).data('anim-trigger') === 'bottom' ) {
					return $(obj).offset().top - $(window).height() + 50;
				}
				if( $(obj).data('anim-trigger') === 'top' ) {
					return $(obj).offset().top - 50;
				}
			},
			'reference': $(obj)
		};
	}
</script>