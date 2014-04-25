<?php

$test = false;

# Suppress errors because it ruins json and we are to lazy to not have notices
error_reporting(0);
require_once "../../../../wp-load.php"; # Adds wordpress functionality

if( isset($_GET['IP']) ) { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }
else { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }

$name	= $_GET['name'];
$email	= $_GET['email'];
$phone	= $_GET['phone'];

$result	= $internalResult = false;

if ( $email ) {

	$subject = "Thank you for your enquiry";

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From:'. "info@cottonparkestate.com"  . "\r\n";

	// Additional headers  Office
	$oheaders = $headers . 'To:'. $email .  "\r\n";
	$iheaders = $headers . 'To: info@cottonparkestate.com' . "\r\n";

	include('genericResponse.php'); # sets $message

	include('internal.php'); # sets $internalEmailHtml

	$emailHtml = file_get_contents('emails/default_inlined.html');
	if ( ! $test ) {
		$result = mail($email, $subject, $emailHtml, $oheaders);

		if ( empty($_GET['test']) )
			$internalResult	= mail("info@cottonparkestate.com", "Enquiry", $internalEmailHtml, $iheaders);
	} else {
		$result = $internalResult = true;
	}
}

$redirect = !empty($_GET['redirect']) ? $_GET['redirect'] : null;

if ( $redirect ) {
	if ( $result ) {
		header("location: $redirect");
	} else {
		header("location: " . home_url());
	}
} else {
	$response = array(
		"success"			=> $result,
		"internalSuccess"	=> $internalResult,
	);

	echo json_encode($response);
}
?>