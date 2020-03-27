<?php

class Charmeleon extends Pokemon{

	public function __construct(){

		parent::__construct("Charmeleon", "Fire", 60, 60);

    	$this->Attack[] = new Attack('Head Butt', 10);
    	$this->Attack[] = new Attack('Flare', 30);
    	$this->Weakness = new Weakness('Water', 2);
    	$this->Resistance = new Resistance('Lightning', 20);
	}
}