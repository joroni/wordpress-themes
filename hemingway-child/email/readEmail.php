<?php
#
# Email Reader
# 
# Generates an email from templates for use with http://putsmail.com or similar services.
# Paste code in manually, use the now-inlined css and html for a template in ./emails/inlined/
# Then add any dynamic content via php to that.
# 
# ~April 04 2014
# 

error_reporting(0);

$doEmail	= false;
$useInlined	= false;

# Set defaults
$_GET['clientName']		= 'clientName';
$_GET['clientEmail']	= 'clientEmail';
$_GET['clientNumber']	= 'clientNumber';
$_GET['clientMessage']	= 'clientMessage';

$client_request = !empty($_GET['type']) ? $_GET['type'] : 'generic';

include "emailSender.php";

echo $client_body;

?>