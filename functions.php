<?php
$page_title = "functions";
include_once('./includes/base.php');
include_once('./includes/helpers.php');



// basic class of Person with name
function adder($num1, $num2) {
	print_p("{$num1} + {$num2} = " . ($num1+$num2));
}

// calling a function
adder(1,3);

// functions with optional arguments
function def_args($x, $name="bob") {
	echo "<pre>";
	echo "x = {$x} \n";
	echo "name = {$name} \n";
	echo "</pre>";
}


// with and without second arg:
print_h2('def_args(34)</h2>');
def_args(34);

print_h2('def_args(34, "hank")</h2>');
def_args(34, 'hank');

print_h2("values by ref");

function double_it(&$num) {
	$num *= 2;
}

print_pre2('$x = 4;
double_it($x) // by ref');

$x = 4;
double_it($x);
print_pre($x, '$x');



include_once('./includes/footer.php');
?>