<?php 

class Weakness {
	
	private $energyWeakness;
	private $multiplier;
	public function __construct($energyWeakness, $multiplier){

		$this->energyWeakness = $energyWeakness;
		$this->multiplier = $multiplier;
	}

	public function Getweakness() {
		return $this->energyWeakness;
	}

	public function getMultiplier() {
		return $this->multiplier;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}