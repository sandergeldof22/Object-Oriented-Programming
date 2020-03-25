<?php

class Pokemon {

	private $Name;
	private $EnergyType;
	private $Hitpoints;
	private $Health;
	private $Attacks;
	private $Weakness;
	private $Resistance;

    public function __construct($Name, $EnergyType, $Health, $HitPoints) {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Health = $Health;
        $this->Hitpoints = $HitPoints;
        $this->Attacks = [];
    }

    public function getName() {
      return $this->Name;
    }

    public function getEnergyType() {
    	return $this->EnergyType;
    }

    public function getHealth() {
      return $this->Health;
    }

    public function getHitPoints() {
      return $this->Hitpoints;
    }

    public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}
