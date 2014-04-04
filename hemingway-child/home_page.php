<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<body id="top">
	<div id="pagewrap">
			<div class="wrapper section-inner">
				<!-- Top Section-->
					<div class="home-section">
						<div class="left">
							<h2 class="subtitle">
								PROJECT
							</h2>

							<div class="sub-info">
								<a href="/project/#theproject"><div>THE PROJECT</div></a>
								<a href="/project/#projectheader"><div>MASTER PLAN</div></a>
								<a href="/project/#dbi"><div>DEVELOPMENT CONSULTANTS</div></a>
							</div>
						</div>

						<div class="right">
							<div class="project-image">
								<img src="/wp-content/themes/hemingway-child/images/home/black-and-white/part1.jpg" alt="" class="greyscale">
								<img src="/wp-content/themes/hemingway-child/images/home/colour/part1.jpg" alt="" class="colour">
							</div>

							<div class="section-desc">
								Cotton Park Estate has enlisted the help of industry leading town planners and architects to ensure the estate is an amazing place to call home now and into the future.
							</div>
						</div>

						<div class="info-right more-info">
							<a href="/project/#top" ><img src="/wp-content/themes/hemingway-child/images/More_Info.jpg" alt="">&nbsp;MORE INFO</a>
						</div>

						<div class="clear"></div>
					</div>

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
				<!-- End of Top Section-->
				<!-- Mid Section-->
				<div class="home-section">
					<div class="center">
						<h2 class="locationsubtitle">
							LOCATION
						</h2>
					</div>
					<div class="mid-sub-info desktop-only">
						<a href="/location/#locationmap"><span>MAP</span></a><span >&nbsp;&nbsp;-&nbsp;</span>
						<a href="/location/#locationinfra"><span>INFRASTRUCTURE</span></a><span>&nbsp;&nbsp;-&nbsp;</span>
						<a href="/location/#locationurban"><span>URBAN GROWTH ZONE</span></a>
					</div>
					<div class="mid-sub-info mobile-only">
						<div><a href="/location/#locationmap">MAP</a></div>
						<div><a href="/location/#locationinfra">INFRASTRUCTURE</a></div>
						<div><a href="/location/#locationurban">URBAN GROWTH ZONE</a></div>
					</div>


					<div class="small-midsection-desc">
						Cotton Park is situated in Wyndham, one of Australia's fast growing municipalities. Well positioned to benefit from the projected growth in Melbourne's Western Growth Zone and only 30km from the CBD.
					</div>
					<div class="bottom">
						<a href="/location/#dlocationtop"><div class="location-image">
							<img src="/wp-content/themes/hemingway-child/images/home/black-and-white/part2.jpg" alt="" class="greyscale">
							<img src="/wp-content/themes/hemingway-child/images/home/colour/part2.jpg" alt="" class="colour">
						</div></a>
					</div>


					<div class="clear"></div>
				</div>
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
				<!-- End of Mid Section-->
				<!-- Bottom Section-->
				<div class="home-section">
						<div class="right bottomright">
							<h2 class="ltscsubtitle">
								LTSC
							</h2>

							<div class="ltsc-mid-sub-info">
								<span>LONG TERM SETTLEMENT CONTRACT</span>
							</div>

							<div class="ltsc-sub-info">
								<a href="/ltsc/#ltsctop"><div>WHAT IS AN LTSC ?</div></a>
								<a href="/ltsc/#vendertermscalc"><div>VENDOR TERMS CALCULATOR</div></a>
								<a href="/ltsc/#ltscfaq"><div>LTSC - FAQ</div></a>
							</div>

							<div class="ltsc-section-desc mobile-only">
								Long Term Settlement Contracts (LTSC) provide property investors and future homeowners with a revolutionary way to secure property in the land mark Cotton Park Estate. Secure your residential lot today without having to settle for up to 10 years.
								 During this time investors keep all of the capital gain that occurs while dramatically limiting their downside risk.
							</div>

						</div>


						<div class="left bottomleft">
							<div class="ltsc-image">
								<img src="/wp-content/themes/hemingway-child/images/home/black-and-white/part3.jpg" alt="" class="greyscale">
								<img src="/wp-content/themes/hemingway-child/images/home/colour/part3.jpg" alt="" class="colour">
							</div>
						</div>

						<div class="clear"></div>
						<br>
						<div class="ltsc-section-desc desktop-only">
								Long Term Settlement Contracts (LTSC) provide property investors and future homeowners with a revolutionary way to secure property in the land mark Cotton Park Estate. Secure your residential lot today without having to settle for up to 10 years.
								 During this time investors keep all of the capital gain that occurs while dramatically limiting their downside risk.
						</div>
						<div class="info-right more-info">
							<a href="/ltsc/#ltsctop" ><img src="/wp-content/themes/hemingway-child/images/More_Info.jpg" alt="">&nbsp;MORE INFO</a>
						</div>
						<div class='clear'></div>
				</div>

				<?php include 'includes/form-footer.php'; ?>


			</div> <!-- /wrapper -->

</div>

<script type="text/javascript">

var URLofEmailingScript ="/wp-content/themes/hemingway-child/email/emailSender.php";

URLofEmailingScript = URLofEmailingScript.replace(/^https?:\/\/[^\/]*/i,"");

function GetServerRequestObject() {
var http;
if (window.XMLHttpRequest) {
   try { http = new XMLHttpRequest(); }
   catch(e) {}
   }
else if (window.ActiveXObject) {
   try { http = new ActiveXObject("Msxml2.XMLHTTP"); }
   catch(e) {
      try { http = new ActiveXObject("Microsoft.XMLHTTP"); }
      catch(e) {}
      }
   }
else {
   alert('Unable to connect with the server.');
   return false;
   }
return http;
}

function SendAnEmail() {

	var
		timestamp=new Date(),
		clientRequest='GENERIC',
		clientRequestType=0;
		clientEmail = document.querySelector(".clientEmail").value,
		clientName = document.querySelector(".clientName").value,
		clientNumber = document.querySelector(".clientNumber").value,
		clientMessage = document.querySelector(".clientMessage").value,
		clientRequestWebinar=document.querySelector(".clientwebinar").checked,
		clientRequestLTSC=document.querySelector(".clientltsc").value,
		message = "Sender Name: " + clientName + "<br/> Email: " + clientEmail + "<br/> Phone: " + clientNumber + "<br/> Message: " + clientMessage + "<br/>"
	;
	var http = GetServerRequestObject();
if( ! http ) { alert('Unable to open http connection'); return true; }
var url = URLofEmailingScript + "?" + escape("Page with link") + "=" + escape(document.URL);
if( message.length ) { url += "&Message=" + escape(message); }

if(clientEmail) { url += "&clientEmail=" + clientEmail; }
if(clientName) { url += "&clientName=" + clientName; }
if(clientNumber) { url += "&clientNumber=" + clientNumber; }
if(clientMessage) { url += "&clientMessage=" + clientMessage; }
if(clientRequestWebinar) { url += "&clientRequestWebinar=" + clientRequestWebinar; }
if(clientRequestLTSC) { url += "&clientRequestLTSC=" + clientRequestLTSC; }

// DETECT MAKING ON CLIENT REQUEST

if (clientRequestLTSC=='yes')
{
clientRequest='LTSC';
 clientRequestType=clientRequestType+1;
}
if(clientRequestWebinar!='')
{
clientRequest='WEBINAR';
clientRequestType=clientRequestType+1;
}
if (clientRequestType>1){clientRequest='WEBINAR-LTSC';}

// END OF EMAIL SETIINGS

// UPDATING CLIENT TRACK DATA...
// geoip_country_code()
// geoip_country_name()
// geoip_city()
// geoip_region()
// geoip_region_name()
// geoip_latitude()
// geoip_longitude()
// geoip_postal_code()
// geoip_area_code()
// geoip_metro_code()
 // CityName
CityName=geoip_city();
// RegionName - STATE
RegionName=geoip_region_name();
// CountryName
CountryName=geoip_country_name();
// MapLocLat - Geo Location lattitude
MapLocLat=geoip_latitude();
// MapLocLong- Geo Location longtitude
MapLocLong=geoip_longitude();

formurl="https://docs.google.com/a/cottonparkestate.com/forms/d/1hu-2XqMSlSXnfdX6MsY4A24wqOMUY9MCEbHorik_7LQ/formResponse?";

if(clientEmail) { formurl += "entry.2119772612=" + clientEmail; }

if(clientName) { formurl += "&entry.693566126=" + clientName; }

if(clientNumber) { formurl+= "&entry.1538533694=" + clientNumber; }
if(clientMessage) { formurl+= "&entry.533473060=" + clientMessage; }
if(clientRequest) { formurl += "&entry.769055793=" + clientRequest; }
if(CityName) { formurl+= "&entry.735111770=" + CityName; }

if(RegionName) { formurl += "&entry.1461569200=" + RegionName; }
if(CountryName) { formurl += "&entry.1622660739=" + CountryName; }
if(MapLocLat) { formurl += "&entry.387636326=" + MapLocLat; }
if(MapLocLong) { formurl += "&entry.157892834=" + MapLocLong; }




http.onreadystatechange = function() {};
http.open("GET",url,true);
http.send("");
document.querySelector(".downloadlink").style.display="none";
document.querySelector(".emailsubmit").style.display="none";
document.querySelector(".emailsent").style.display="block";
document.querySelector(".downloadlinksent").style.display="block";


document.request.action=formurl;
document.request.submit();
//window.location='http://www.cottonparkestate.com';

return false;
}



// scroll to top animated..

$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();

	window.projectImage = prepareImageData( $(".project-image") );
	window.locationImage = prepareImageData( $(".location-image") );
	window.ltscImage = prepareImageData( $(".ltsc-image") );

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			var scrollPos = $(this).scrollTop();

			if( scrollPos > 100 ) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}

			checkImageColour( window.projectImage, scrollPos );
			checkImageColour( window.locationImage, scrollPos );
			checkImageColour( window.ltscImage, scrollPos );
		});
	});
});

function prepareImageData( img ) {
	var
		offset = img.offset().top - ( $(window).height() / 2 ) + (img.height() / 2),
		upperLimit = offset - 250,
		lowerLimit = offset + 250,
		comparativeValue = offset - upperLimit
	;

	return {
		'offset': function () {
			return img.offset().top - ( $(window).height() / 2 ) + (img.height() / 2);
		},
		'upperLimit': function () {
			return this.offset() - 250;
		},
		'lowerLimit': function () {
			return this.offset() + 250;
		},
		'comparativeValue': function () {
			return this.offset() - this.upperLimit();
		},
		'reference': img.find('.colour')
	};
}

function checkImageColour( imageObj, scrollPos ) {
	if( scrollPos > imageObj.upperLimit() && scrollPos < imageObj.lowerLimit() ) {
		var opacity = ((scrollPos - imageObj.upperLimit() ) / imageObj.comparativeValue() ) + 0.2;
		if( scrollPos > imageObj.offset() ) {
			opacity = (opacity - 1.5) * -1 + 0.5;
		}
		imageObj.reference.css({ 'opacity': opacity });
	} else {
		imageObj.reference.css({'opacity': '0'});
	}
}

//--></script>


<?php get_footer(); ?>