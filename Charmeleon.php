<?php

class Charmeleon extends Pokemon{

	public function __construct($nickname){

        $PokemonDetails = array(
    		'name' => 'Charmeleon',
            'nickname' => $nickname,
    		'energyType' => 'Fire',
    		'health' => 60,
			'hitPoints' => 60,
    		'attacks' => array(
    		    'Headbutt' => new Attack('Head Butt', 10),
    		    'Flare' => new Attack('Flare', 30)
    		),
    		'weakness' => new Weakness('Water', 2),
    		'resistance' => new Resistance('Lightning', 10)
   		);
		parent::__construct($PokemonDetails);   		
	}
}