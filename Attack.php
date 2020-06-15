
<?php 

class Attack {

	private $attacks;
	private $damage;
	public function __construct($attacks, $damage){

		$this->attacks = $attacks;
		$this->damage = $damage;
	}

	public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}