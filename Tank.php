<?php

require_once 'Human.php';
require_once 'Weapon.php';

class Tank extends Human {
	public function __construct(string $name, int $hp = 150, ?Weapon $weapon = null)
	{
		parent::__construct($name, $hp, $weapon);
	}

	protected function takeDamage(int $damage)
	{
		$damage -= 10;
		parent::takeDamage($damage > 0 ? $damage : 0);
	}

}