<?php
$page_title = "arrays";
include_once('./includes/base.php');
include_once('./includes/helpers.php');

// array usage
$cats = array('Jack', 'Tiger');

print_pre($cats, '$cats');
print_pre($cats[0], '$cats[0]');

$animals[0] = "monkey";
$animals[1] = "frog";
$animals[2] = "bat";

print_pre($animals, '$animals');

// looping over array
echo '<p>foreach: $animals as $cur';
foreach($animals as $cur) {
	echo "<br/> Animal is: $cur";
}
echo "</p>";

// associative / key value arrays:

$creator = array('Light bulb' => 'Edison',
			'Rotary engine' => 'Wankel',
			'Python' => 'Guido van Rossum');

print_pre($creator, '$creator');
print_pre($creator['Python'], '$creator["Python"]');


// looping over associative array
echo '<p>foreach: $creator as $invention => $inventor';
foreach($creator as $invention => $inventor) {
	echo "<br/> {$inventor} created ${invention}";
}
echo "</p>";


include_once('./includes/footer.php');
?>