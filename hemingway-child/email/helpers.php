<?php

#
# Helper functions
# 

function holdBuffer() {
	ob_start();
}

function releaseBuffer() {
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

?>