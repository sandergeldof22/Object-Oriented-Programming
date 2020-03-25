<?php 

class Weakness {
	
	private $energyTypeW;
	private $multiplier;

	public function __construct($energyTypeW, $multiplier){
		$this->$energyTypeW = $energyType;
		$this->multiplier = $multiplier;
	}

	public function getEnergyTypeWeakness() {
		$this->energyTypeW = $energyTypeW;
	}

	public function getMultiplier() {
		$this->multiplier = $multiplier;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
}