<?php

class Pokemon {

	public $Name;
	public $EnergyType;
	public $Hitpoints;
	public $Health;
	public $Attacks;
	public $Weakness;
	public $Resistance;

    public function __construct($Name, $EnergyType, $Health, $HitPoints)
    {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Health = $Health;
        $this->Hitpoints = $HitPoints;
        $this->Attacks = [];
    }

    public function getName(){
      return $this->name;
    }

    public function getHealth(){
      return $this->health;
    }

    public function getHitPoints(){
      return $this->hitPoints;
    }
}