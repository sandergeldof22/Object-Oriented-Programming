<?php

require 'Superhero.php';

$hackerman = new Superhero('Hackerman', 'Male', 'Hackers', 'With great processing power comes great responsibility!');
print_r('<pre>'.$hackerman.'</pre>');
$hackerman->sayOneliner();

$gandalf = new Wizard('Gandalf', 'Wizard duh', 'Run you fools !!!');
print_r('<pre>'.$gandalf.'</pre>');
$gandalf->sayOneliner();

$teacher = new Teacher('Davinci-Leraar', 'Male');
print_r('<pre>'.$teacher.'</pre>');
$teacher->sayOneliner();

$stagair = new Stagair('Elke Stagair ooit', 'Male');
print_r('<pre>'.$stagair.'</pre>');
$stagair->sayOneliner();






