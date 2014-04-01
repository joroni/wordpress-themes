<?php

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

include('genericResponse.php');
include('internal.php');

$result = mail($email, $subject, $message, $oheaders);
mail("info@cottonparkestate.com", "Enquiry", $internalMessage, $iheaders);

$response = array("success" => $result);

echo json_encode($response);