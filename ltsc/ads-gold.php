<?php 
/*
Template Name: Ads Gold
*/

$adSource	= isset($_GET['source']) ? $_GET['source'] : null;
$isVariant	= true;
# do stuff!

header('location: '. home_url() . ( $isVariant ? '/gold' : '' ) );

?>