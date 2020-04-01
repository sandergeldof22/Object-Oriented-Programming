<?php 

class Resistance {
	
	private $Resistance;
	private $value;
	public function __construct($Resistance, $value) {

		$this->Resistance = $Resistance;
		$this->value = $value;
	}

	public function GetResistance(){
		return $this->Resistance;
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