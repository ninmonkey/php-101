<?php
$page_title = "functions";
include_once('./includes/base.php');
include_once('./includes/helpers.php');

// basic class
class Unit {
	const HP_BASE = 10;

	function getHp() {
		print_pre(self::HP_BASE);
		return self::HP_BASE;
	}

	function setHp($hp) {
		print_pre($hp, "setHp()");
		$this->hp = $hp;
	}

	function attack($other) {
		print_p("Unit attacks {$other}");
	}
}

// derive Unit
class Archer extends Unit {

	//override Unit.attack()
	function attack($other) {
		print_p("Unit attacks {$other}");
	}
}


$unit = new Archer();

$unit->getHp();
$unit->setHp(23);
$unit->attack("ork");

include_once('./includes/footer.php');
?>