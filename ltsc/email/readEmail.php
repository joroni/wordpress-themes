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
$readEmail	= true;

$emailTemplate = 'generic';
$_GET['name']		='Jim Bob';
$_GET['email']		='1@1.com';
$_GET['phone']		='34343242342';
$_GET['postCode']	='4444';
$_GET['country']	='AU';

include "emailSender.php";

echo $client_body;

?>