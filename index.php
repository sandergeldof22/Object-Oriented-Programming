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

$pokemonP->AttackEnemy($pokemonC);

?>
</body>
</html>