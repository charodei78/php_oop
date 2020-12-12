<?php


class Weapon {

	/**
	 * @var int
	 */
	protected int $damage;
	/**
	 * @var string
	 */
	protected string $name;

	/**
	 * Weapon constructor.
	 * @param string $name
	 * @param int $damage
	 * @throws ErrorException
	 */
	public function __construct(string $name = 'unnamed', int $damage = 10)
	{
		$this->name = $name;
		if ($this->name === '')
			throw new ErrorException("Name can't be empty", 1);
		$this->damage = $damage;
		if ($this->damage < 1)
			throw new ErrorException("damage can't be lower 1", 1);
	}

	/**
	 * @return int
	 */
	public function getDamage(): int
	{
		return $this->damage;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}
}