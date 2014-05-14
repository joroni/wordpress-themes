<?php
require_once "../../../../wp-load.php"; # Adds wordpress functionality

$defaultRedirect = home_url();

$internal_email		= "info@ariongroup.com.au";

$internal_headers	= "mime-version: 1.0\r\n";
$internal_headers	.= "content-type: text/html; charset=utf-8\r\n";

$internal_headers	.= "To:$internal_email\r\n";
$internal_headers	.= "From:$internal_email\r\n";

$body		= $_POST['body'];
$name		= $_POST['name'];
$email		= $_POST['email'];
$phone		= $_POST['phone'];
$redirect	= $_POST['redirect'];

if ( ! $body or ! $name or ! ( $email or $phone ) ) {
	header('Location:' . $redirect);
	die();
}

$internal_body = "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
	<html>
		<body>
			<p>Submitted from <a href='http://www.ltsc.com.au/contact' target='_blank'>ltsc.com.au/contact</a></p>
			<p></p>
			<p><b>Name</b>: $name</p>
			<p><b>Phone</b>: $phone</p>
			<p><b>Email</b>: $email</p>
			<p>$body</p>
		</body>
	</html>
";

# TEST
#$internal_email = "sam.johnson@ariongroup.com.au";

mail($internal_email, 'LTSC Contact Form - '. $name, $internal_body, $internal_headers);

if ( ! $redirect ) $redirect = $defaultRedirect;

header('Location:' . $redirect);

?>