<?php

require_once 'Human.php';
require_once 'Weapon.php';
require_once 'Tank.php';

try {
	$player1 = new Human('Nicolas' );
	$player2 = new Tank('Reinhart');
	$fire_strike = new Weapon('Fire strike', 53);
	$piu_piu = new Weapon('piu-piu', 23);

	$player1->fireTo($player2);
	$player1->takeWeapon($fire_strike);
	$player2->fireTo($player1);
	$player1->fireTo($player2);
	$player2->takeWeapon($piu_piu);
	$player2->fireTo($player1);
	$player2->fireTo($player1);
	$player1->fireTo($player2);
	$player1->fireTo($player2);
	$player1->fireTo($player2);
	$player1->fireTo($player2);

} catch (Exception $e) {
	echo $e->getMessage();
}


