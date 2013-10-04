<?php
// simplifies printing to html
function print_pre($val, $title='') {

	echo "<pre>";
	if($title) {
		echo "<b>$title</b>\n";
	}


	print_r($val);
	echo "</pre>";
}

function print_pre2($val, $title='') {

	echo "<pre>{$val}</pre>";
}

// print <p> tag
function print_p($val) {
	echo "<p>$val</p>";
}

// print <h2> tag
function print_h2($val) {
	echo "<h2>$val</h2>";
}
?>