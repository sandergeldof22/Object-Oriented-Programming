<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

	$pokemonP = new Pikachu();
	$pokemonC = new Charmeleon();

?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Pokebattle</title>
</head>
<body>

	<?php
	echo $pokemonP->getName();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonP->getEnergyType();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonP->getHealth();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonP->getHitPoints();
	$data = $pokemonP->GetAttacks();
	print_r($data);
	echo str_repeat("&nbsp;", 1); 
	?>
	<br>
	<?php
	print_r($pokemonP);
	?>
	<br>
	<?php
	echo $pokemonC->getName();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonC->getEnergyType();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonC->getHealth();
	echo str_repeat("&nbsp;", 1); 
	echo $pokemonC->getHitPoints();
	?>

</body>
</html>