
<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

	$pokemonP = new Pikachu('john');
	$pokemonC = new Charmeleon('rick');



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