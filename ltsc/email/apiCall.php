<?php

$apiUrl		= 'http://ec2-54-206-96-63.ap-southeast-2.compute.amazonaws.com:1339/submit';
$apiPass	= 'horseeight88';

$req = curl_init($apiUrl);

curl_setopt_array($req, array(
	CURLOPT_HEADER			=> false
,	CURLOPT_POST			=> true
,	CURLOPT_RETURNTRANSFER	=> true
,	CURLOPT_POSTFIELDS		=> array(
		'name'			=> $client_name
	,	'email'			=> $client_email
	,	'phone'			=> $client_phone
	,	'text'			=> $client_text
	,	'ownsProperty'	=> $client_ownsProperty ? 1 : 0
	,	'income'		=> $client_income
	,	'pass'			=> $apiPass
	,	'category'		=> 'speedcafe1'
	)
));


$apiCallResult	= curl_exec($req);
$curlErrno		= curl_errno($req);
$curlErr		= curl_error($req);

$apiError = '';

if ( $curlErrno > 0 ) $apiError = 'Curl error ' . $curlErrno . ', ' . $curlErr;

# $req->addPostFile('image', '/file/path/filename.png', 'image/jpeg')

?>