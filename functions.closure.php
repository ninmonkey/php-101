<?php
$page_title = "closures ( functions without names )";
include_once('./includes/base.php');
include_once('./includes/helpers.php');


$array = array("lorem ipsum", "this", "foo bar", "baz");

usort($array, function($a, $b) {
	return strlen($a) - strlen($b);
});

print_pre($array);


$greet = function($name) {
	print_p("name: {$name}");
};

$greet('world');
$greet('fred');

include_once('./includes/footer.php');
?>