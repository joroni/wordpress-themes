<?php

require_once("../../../../wp-load.php"); # Make sure it has access to wordpress functionality!

function holdBuffer() {
	ob_start();
}

function releaseBuffer() {
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

$doEmail	= isset($doEmail) ? $doEmail : true;
$useInlined	= isset($useInlined) ? $useInlined : true;

$ltscPdfUrl			= "http://cottonparkestate.com/wp-content/uploads/2014/03/A-Quick-Guide-To-LTSC.pdf";
$cottonParkPdfUrl	= "http://cottonparkestate.com/wp-content/uploads/2014/03/COTTON-PARK.pdf";

$client_name				= $_GET['clientName'];
$client_email				= $_GET['clientEmail'];
$client_number				= $_GET['clientNumber'];
$client_message				= $_GET['clientMessage'];

$nowDate					= new DateTime( "now", new DateTimeZone("Australia/Queensland") );
$sentDateTime				= $nowDate->format("m-d-y H:i:s A");

if ( !isset($client_request) ) {
	// Check if Client Request was for Webinar or LTSC or Generic Request..
	$client_request				= 'generic';
	$client_requestWebinar		= $_GET['clientRequestWebinar'];
	$client_requestLtsc			= $_GET['clientRequestLTSC'];

	$client_requestCounter = 0;

	# Determine the type
	if ( $client_requestLtsc == 'yes' ) {
		$client_request = 'ltsc';
		++$client_requestCounter;
	}
	if ( $clientRequestWebinar != '' ) {
		$client_request = 'webinar';
		++$client_requestCounter;
	}
	if ( $client_requestCounter > 1 ) {
		$client_request = 'ltsc-webinar';
	}
}

# hold the buffer, include whatever, then releaseBuffer() to grab any content that would normally be echoed.
holdBuffer();

$templatePath = 'emails/';

if ( $useInlined ) {
	$templatePath = 'emails/inlined/';
}

# Client email
if ( $client_request == 'ltsc' ) { # LTSC ONLY
	$client_subject	= 'Here is Your Info Pack ON LTSC Contracts.';
	include $templatePath . 'ltsc.php';
} else
if ( $client_request == 'webinar' ) { # WEBINAR ONLY
	$client_subject = 'Congratulations! You have booked your exclsuive one-on-one LTSC Webinar.';
	include $templatePath . 'webinar.php';
} else
if ( $client_request == 'ltsc-webinar' ) { # WEBINAR & LTSC 
	$client_subject = 'Congratulations!! you have booked your LTSC Webinar.';
	include $templatePath . 'ltsc-webinar.php';
} else { # GENERIC
	$client_subject = 'Thank you for your interest in Cotton Park Estate.';
	include $templatePath . 'generic.php';
}

$client_body = releaseBuffer();

# Internal email
$internal_email		= "contact@cottonparkestate.com";
$internal_subject	= strtoupper($client_request);

# Do the same as we did for $client_body
holdBuffer();
include'emails/internal.php';
$internal_body = releaseBuffer();

# TEST

$internal_email	= 'sam.johnson@ariongroup.com.au';
$client_email	= 'sam.johnson@ariongroup.com.au';

# TEST


$client_headers		= "MIME-Version: 1.0\r\n";
$client_headers		.= "Content-type: text/html; charset=utf-8\r\n";

$internal_headers	= $client_headers;

$client_headers		.= "To:$client_email\r\n";
$client_headers		.= "From:$internal_email\r\n";

$internal_headers	.= "To:$internal_email\r\n";
$internal_headers	.= "From:$internal_email\r\n";

if ( $doEmail ) {
	# internal email
	mail($internal_email, $internal_subject, $internal_body, $internal_headers);

	# client email
	mail($client_email, $client_subject, $client_body, $client_headers);

	sleep(3);
}

?>
