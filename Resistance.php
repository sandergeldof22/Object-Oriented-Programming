<?php 

class Resistance {
	
	private $energyTypeR;
	private $Value;

	public function __construct($energyTypeR, $Value) {
		$this->energyTypeR = $energyTypeR;
		$this->Value = $Value;
	}

	public function getEnergyTypeResistance() {
		$this->energyTypeR = $energyTypeR;
	}

	public function getValue() {
		$this->Value = $Value;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}