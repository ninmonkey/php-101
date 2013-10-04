<?php
$page_title = "POST request";
include_once('./includes/base.php');
include_once('./includes/helpers.php');


// if POSt request, use vars
// Otherwise show form for a POST request
if($_POST) {
	print_p("Cat {$_POST['name']} is color {$_POST['color']}");
} else {

	echo '<form action="post.php" method="post">
	<input type="text" name="name" value="tiger" />
	<input type="text" name="color" value="orange" />
	<input type="submit" value="submit" />
	</form>';
}




include_once('./includes/footer.php');
?>