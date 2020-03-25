<?php 

class Attack {

	private $Attack;
	private $Damage;
	public function __construct($Attack, $Damage){

		$this->Attack = $Attack;
		$this->Damage = $Damage;
	}

	public function getAttack(){
		return $this->Attack;
	}

	public function getDamage(){
		return $this->Damage;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}