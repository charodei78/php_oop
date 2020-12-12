<?php

require_once 'Weapon.php';

/**
 * Class Human
 */
class Human
{
	/**
	 * @var string
	 */
	protected string $name;
	/**
	 * @var int
	 */
	protected int $hp;
	/**
	 * @var Weapon|null
	 */
	protected ?Weapon $weapon;

	/**
	 * Human constructor.
	 * @param string $name
	 * @param int $hp
	 * @param Weapon|null $weapon
	 * @throws ErrorException
	 */
	public function __construct(string $name, int $hp = 100, ?Weapon $weapon = null) {
		$this->name = $name;
		if ($this->name === '')
			throw new ErrorException("Name can't be empty", 1);
		$this->hp = $hp;
		if ($this->hp < 1)
			throw new ErrorException("hp can't be lower 1", 1);
		$this->weapon = $weapon;
	}

	public function __destruct() {
		echo "$this->name is dead!<br>";
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getHP(): int {
		return $this->hp;
	}

	/**
	 * @param Weapon $weapon
	 */
	public function takeWeapon(Weapon $weapon) {
		echo "$this->name take ".$weapon->getName()."<br>";
		$this->weapon = $weapon;
	}

	/**
	 * @param Human $target
	 */
	public function fireTo(Human $target) {
		echo "$this->name fire to $target->name<br>";
		if ($this->weapon)
			$target->takeDamage($this->weapon->getDamage());
		else
			$target->takeDamage(10);
	}

	/**
	 * @param int $damage
	 */
	protected function takeDamage(int $damage) {
		if ($damage > 0) {
			if ($this->hp - $damage < 1) {
				$this->hp = 0;
				echo $this->name." is dead!<br>";
			}
			else {
				$this->hp -= $damage;
				echo "$this->name take damage: $damage<br>";
			}
		}
		else
			echo "*miss*<br>";
	}
}