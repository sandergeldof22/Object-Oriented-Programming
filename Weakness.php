<?php 

class Weakness {
	
	private $Weakness;
	private $Multiplier;
	public function __construct($Weakness, $Multiplier){

		$this->Weakness = $Weakness;
		$this->Multiplier = $Multiplier;
	}

	public function getWeakness() {
		return $this->EnergyWeakness;
	}

	public function getMultiplier() {
		return $this->Multiplier;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}