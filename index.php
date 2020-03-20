<?php

require 'Pokemon.php';
require 'Pikachu.php';

	$pokemon = new Pikachu();

?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Pokebattle</title>
</head>
<body>

	<?php
	echo $pokemon->getName()
	?>

</body>
</html>