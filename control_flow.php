<?php
$page_title = "control flow";
include_once('./includes/base.php');
include_once('./includes/helpers.php');



print_h2("conditional operator");

/*
Looks more complicated then it is. It works like this:

	$variable = condition ? code_if_true : code_if_false ;

*/
$cat = 'jack';

$color = ($cat == 'jack') ? 'black' : 'orange' ;
print_pre2('$color = ($cat == "jack") ? "black" : "orange" ;');
print_p("color for {$cat} is {$color}");

// same statement with false condition
print_pre2('$cat = tiger
$color = ($cat == "jack") ? "black" : "orange" ;');

$cat = 'tiger';
$color = ($cat == 'jack') ? 'black' : 'orange' ;
print_p("color for {$cat} is {$color}");


// If
print_h2("if");

$cat = "FakeCatName";
if($cat == "tiger") {
	print_p("cat was tiger");
} elseif($cat == "jack") {
	print_p("cat was jack");
} else {
	print_p("cat named {$cat} does not exist!");
}

// switch
print_h2("switch");
$cat_state = 'sleep';

switch($cat_state) {
	case 'sleep':
		print_p("cat sleeping");
		break;

	case 'eating':
		print_p("cat eating again");
		break;

	default:
		print_p("cat doing something else");
		break;

}



// while
print_h2("while loop");

$x = 0;
while($x <= 5) {
	print_pre2("x = " . $x);
	$x++;
}


// for( start; condition; increment )
print_h2("for loop");

for($x = 0; $x <= 5; $x++ ) {
	print_pre2("x = " . $x);
}



// foreach
print_h2("foreach");

$cats = array("jack", "tiger", "fluffy");

print_pre($cats, '$cats');
foreach($cats as $cur) {
	print_pre2("cur = {$cur}");

}

include_once('./includes/footer.php');
?>