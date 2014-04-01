<?php
$microtime = microtime();
	wp_enqueue_style ('style', get_template_directory_uri() . '/style.css?' . $microtime, array(), 'all' );