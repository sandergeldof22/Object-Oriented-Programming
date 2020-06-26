
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

	print($pokemonP->name . ' is a Pokemon whose nickname is ' .  $pokemonP->nickname . " that has " . $pokemonP->health . " amount of health");
	print('<br>');
	print($pokemonP->name . " is going to attack " . $pokemonC->name);
    print('<br>');
    print('he is going to use ' . $pokemonP->attacks['ElectricRing']->attacks . ' to attack');
    print('<br>');
    print($pokemonC->name . " is taking " . $pokemonP->attackEnemy($pokemonC, 'ElectricRing')['damageTaken'] . " damage");
    print('<br>');        
    print($pokemonC->name . " now has " . $pokemonC->health . " health left");
    print('<br>');    

	echo '<br>';
    echo '<br>';

    print($pokemonC->name . ' is a Pokemon whose nickname is ' .  $pokemonC->nickname . " that has " . $pokemonC->health . " amount of health");
	print('<br>');
	print($pokemonC->name . " is going to attack " . $pokemonP->name);
    print('<br>');
    print('he is going to use ' . $pokemonC->attacks['Headbutt']->attacks . ' to attack');
    print('<br>');
    print($pokemonP->name . " is taking " . $pokemonC->attackEnemy($pokemonP, 'Headbutt')['damageTaken'] . " damage");
    print('<br>');        
    print($pokemonP->name . " now has " . $pokemonP->health . " health left");
    print('<br>');  

	echo '<br>';
    echo '<br>';

	print($pokemonP->name . ' is a Pokemon whose nickname is ' .  $pokemonP->nickname . " that has " . $pokemonP->health . " amount of health");
	print('<br>');
	print($pokemonP->name . " is going to attack " . $pokemonC->name);
    print('<br>');
    print('he is going to use ' . $pokemonP->attacks['PikaPunch']->attacks . ' to attack');
    print('<br>');
    print($pokemonC->name . " is taking " . $pokemonP->attackEnemy($pokemonC, 'PikaPunch')['damageTaken'] . " damage");
    print('<br>');        
    print($pokemonC->name . " now has " . $pokemonC->health . " health left");
    print('<br>');   

	echo '<br>';
    echo '<br>';

    print($pokemonC->name . ' is a Pokemon whose nickname is ' .  $pokemonC->nickname . " that has " . $pokemonC->health . " amount of health");
	print('<br>');
	print($pokemonC->name . " is going to attack " . $pokemonP->name);
    print('<br>');
    print('he is going to use ' . $pokemonC->attacks['Flare']->attacks . ' to attack');
    print('<br>');
    print($pokemonP->name . " is taking " . $pokemonC->attackEnemy($pokemonP, 'Flare')['damageTaken'] . " damage");
    print('<br>');        
    print($pokemonP->name . " now has " . $pokemonP->health . " health left");
    print('<br>');  

	echo '<br>';
    echo '<br>';

	echo "the current population of Pokemons is " .  Pokemon::getPopulation();

?>
</body>
</html>