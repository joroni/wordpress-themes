<?php
	error_reporting(E_ALL);

	$doEmail = false;

	# Set defaults
	$_GET['clientName']		= 'clientName';
	$_GET['clientEmail']	= 'clientEmail';
	$_GET['clientNumber']	= 'clientNumber';
	$_GET['clientMessage']	= 'clientMessage';

	$client_request = !empty($_GET['type']) ? $_GET['type'] : 'generic';

	include "emailSender.php";

	echo $client_body;
?>