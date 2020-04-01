<?php 

class Resistance {
	
	private $description;
	private $value;
	public function __construct($description, $value) {

		$this->description = $description;
		$this->value = $value;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getValue() {
		return $this->value;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}