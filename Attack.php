<?php 

class Attack {

	private $attack;
	private $damage;
	public function __construct($attack, $damage){

		$this->attack = $attack;
		$this->damage = $damage;
	}

	public function getAttack(){
		return $this->attack;
	}

	public function getDamage(){
		return $this->damage;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}