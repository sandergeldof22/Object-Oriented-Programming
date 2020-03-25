<?php

class Pikachu extends Pokemon{

	public function __construct(){

    	parent::__construct("Pikachu", "Lightning", 60, 60);

    	$this->Attacks[] = new Attack('Electric Ring', 50);
    	$this->Attacks[] = new Attack('Pika Punch', 20);
    	$this->Weakness = new Weakness('Fire', 1.5);
    	$this->Resistance = new Resistance('Fighting', 20);
    }






}

