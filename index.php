<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

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
	echo $pokemonP->getHealth();
	echo $pokemonP->getHitPoints();
	echo $pokemonC->getName();
	echo $pokemonC->getHealth();
	echo $pokemonC->getHitPoints();
	?>

</body>
</html>