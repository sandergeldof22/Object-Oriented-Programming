
<?php 

class Attack {

	private $attacks;
	private $damage;
	private $cost = 30;

	public function __construct($attacks, $damage){

		$this->attacks = $attacks;
		$this->damage = $damage;

	}

	public function __set($property, $value){
		if ($property === 'cost'){
			$this->$property = $value;
		}
	}

	public function __get($property) { // 'attacks' en 'damage' en 'cost'
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}




// $attack1 = new Attack('water', 12);

// $attack1->cost = 50;

// $attack->__set('cost', 50);

/**
oefening in de uitleg
*/