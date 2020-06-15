<?php

class Pikachu extends Pokemon{

	public function __construct($nickname){

    	$PokemonDetails = array(
    		'name' => 'Pikachu',
            'nickname' => $nickname,
    		'energyType' => 'Lightning',
    		'health' => 60,
			'hitPoints' => 60,
    		'attacks' => array(
    		    'ElectricRing' => New Attack('Electric Ring', 50),
    		    'PikaPunch' =>	New Attack('Pika Punch', 20)
    		),
    		'weakness' => New Weakness('Fire', 1.5),
    		'resistance' => New Resistance('Fighting', 20)
   			);
    	parent::__construct($PokemonDetails);
    }
}
