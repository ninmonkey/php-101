<?php
$page_title = "objects";
include_once('./includes/base.php');
include_once('./includes/helpers.php');

// basic class of Person with name
class Person {
	public $name = '';

	function name($newname = NULL) {
		if(!is_null($newname)) {
			$this->name = $newname;
			print_p("name() set name to $newname");
		}

		return $this->name;
	}
}

// create instance of Person()
$human = new Person;
print_pre($human, '$human');

// call function Person.name()
$human->name("Bill");
print_pre($human, '$human');

// read variable Person->name
echo "<p>Hello, {$human->name}</p>";

include_once('./includes/footer.php');
?>