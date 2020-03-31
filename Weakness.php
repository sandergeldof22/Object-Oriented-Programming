<?php 

class Weakness {
	
	private $EnergyWeakness;
	private $Multiplier;
	public function __construct($EnergyWeakness, $Multiplier){
		
		$this->EnergyWeakness = $EnergyWeakness;
		$this->Multiplier = $Multiplier;
	}

	public function getEnergyWeakness() {
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