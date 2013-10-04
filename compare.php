<?php
$page_title = "object comparisions";
include_once('./includes/base.php');
include_once('./includes/helpers.php');



// return boolean as string 'true' / 'false'
function bool2str($bool) {
	if($bool ===false)
		return 'false';
	else
		return 'true';
}


// compare two objects.
// Arguments are passed by-reference
// test: equals, not equal, equal identity, not equal identity
function compareObjects(&$ob1, &$ob2) {
	print_pre('o1 == o2 : ' . bool2str($ob1 == $ob2));
	print_pre('o1 != o2 : ' . bool2str($ob1 != $ob2));
	print_pre('o1 === o2 : ' . bool2str($ob1 === $ob2));
	print_pre('o1 !== o2 : ' . bool2str($ob1 !== $ob2));
}


// nonsense class to test comparisons
class Flag {
	public $flag;

	function Flag($flag = true) {
		$this->flag = $flag;
	}
}

class OtherFlag {
	public $flag;

	function OtherFlag($flag = true) {
		$this->flag = $flag;
	}
}

$f1 = new Flag();
$f2 = new Flag();
$f3 = $f1;
$o1 = new OtherFlag();

print_h2("two instances of the same class");
compareObjects($f1, $f2);

print_h2("two references to the same instance");
compareObjects($f1, $f3);

print_h2("Instances of different classes");
compareObjects($f1, $o1);

include_once('./includes/footer.php');
?>
