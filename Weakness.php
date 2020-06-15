
<?php 

class Weakness {
	
	private $weakness;
	private $multiplier;
	public function __construct($weakness, $multiplier){

		$this->weakness = $weakness;
		$this->multiplier = $multiplier;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}