<?php 

class Resistance {
	
	public $energyType;
	public $value;

	public function __construct($energyType, $value) {
		$this->energyType = $energyType;
		$this->value = $value;
	}

	public function GetenergyType(){
		return $this->energyType;
	}

	public function Getvalue() {
		return $this->value;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}