<?php 

class Resistance {
	
	private $energyType;
	private $value;
	public function __construct($energyType, $value) {

		$this->energyType = $energyType;
		$this->value = $value;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}