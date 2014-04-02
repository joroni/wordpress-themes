<?php

# Suppress errors because it ruins json and we are to lazy to not have notices
error_reporting(0);

if( isset($_GET['IP']) ) { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }
else { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];

$subject = "Thank you for your enquiry";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From:'. "info@cottonparkestate.com"  . "\r\n";

// Additional headers  Office
$oheaders = $headers . 'To:'. $email .  "\r\n";
$iheaders = $headers . 'To: info@cottonparkestate.com' . "\r\n";

#include('genericResponse.php');

include('internal.php'); # sets $internalEmailHtml

$emailHtml = file_get_contents('emails/default.html');


$result = mail($email, $subject, $emailHtml, $oheaders);
#mail("info@cottonparkestate.com", "Enquiry", $internalEmailHtml, $iheaders);

$response = array(
	"success"	=> $result,
);

echo json_encode($response);

?>