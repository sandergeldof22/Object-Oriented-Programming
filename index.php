
<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

	$pokemonP = new Pikachu('john');
	$pokemonC = new Charmeleon('rick');


	// print($pokemonP->name . ' is a Pokemon whose nickname is ' .  $pokemonP->nickname . " that has " . $pokemonP->health . " amount of health");
	// print('<br>');
	// print($pokemonP->name . " is going to attack " . $pokemonC->name);
 //    print('<br>');
 //    print('he is going to use ' . $pokemonP->attacks['ElectricRing']->attacks . ' to attack');
 //    print('<br>');
 //    print($pokemonC->name . " is taking " . Pokemon::attackEnemy($pokemonC, 'ElectricRing') . " damage");
 //    print('<br>');        
 //    print($pokemonC->name . " now has " . $PokemonC->health . " health left");




	


?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Pokebattle</title>
</head>
<body>
<?php

	echo "the current population of Pokemons is " .  Pokemon::getPopulation();

	echo '<br>';
    echo '<br>';

	$pokemonP->attackEnemy($pokemonC, 'ElectricRing');

	echo '<br>';
    echo '<br>';

	$pokemonC->attackEnemy($pokemonP, "Headbutt");

	echo '<br>';
    echo '<br>';

	$pokemonP->attackEnemy($pokemonC, "PikaPunch");

	echo '<br>';
    echo '<br>';

	$pokemonC->attackEnemy($pokemonP, "Flare");

	echo '<br>';
    echo '<br>';

	echo "the current population of Pokemons is " .  Pokemon::getPopulation();

?>
</body>
</html>