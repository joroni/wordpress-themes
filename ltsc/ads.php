<?php 
/*
Template Name: Ads
*/

$adSource	= isset($_GET['source']) ? $_GET['source'] : null;
$isVariant	= isset($_GET['v']) ? true : false;
# do stuff!

header('location: '. home_url() . ( $isVariant ? '/gold' : '' ) );

?>