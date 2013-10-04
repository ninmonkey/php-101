<?php
$page_title = "GET request";
include_once('./includes/base.php');
include_once('./includes/helpers.php');


// if GET request, use vars
// Otherwise show link for a GET request
if($_GET) {
	print_p("Cat {$_GET['name']} is color {$_GET['color']}");
} else {
	echo 'Get: <a href="get.php?name=jack&color=black">get.php?name=jack&color=black</a>';
}




include_once('./includes/footer.php');
?>