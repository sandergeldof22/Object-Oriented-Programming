<?php

class Pokemon {

    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;

    public static $population = 0;

/*
Onderstaande functie genereert alle pokemondetails voor het constructen van een nieuwe pokemon, als dit gedaan is increment hij de population.
*/
    public function __construct($PokemonDetails) {
        $this->name = $PokemonDetails['name'];
        $this->nickname = $PokemonDetails['nickname'];
        $this->energyType = $PokemonDetails['energyType'];
        $this->health = $PokemonDetails['health'];
        $this->hitpoints = $PokemonDetails['hitPoints'];
        $this->attacks = $PokemonDetails['attacks'];
        $this->weakness = $PokemonDetails['weakness'];
        $this->resistance = $PokemonDetails['resistance'];

        self::$population += 1;
    }

/*
Onderstaande functie haalt de huidige populatie op
*/
    public static function GetPopulation(){
        return self::$population;
    }   
/*
Onderstaande functie haalt alle property's op en geeft deze terug.
*/
    public function __get($property) {
        if (property_exists($this, $property)){
            return $this->$property;
        }
    }

/*
Onderstaande functie valt de vijandige pokemon aan, Hij geeft wat informatie door echo's en haalt de gegenereerde damage op uit generateDamage() en healt uit
changeHealth(), en met die info valt hij de vijandige pokemon aan. en geeft uiteindelijk het eindresultaat van het gevecht weer
*/
    public function attackEnemy($enemy, $attacks){
        echo $this->name . " is a Pokemon whose name is " . $this->nickname . " that has " . $this->health .  " amount of health";
        echo '<br>';
        echo $this->name . " is going to attack " . $enemy->name;
        echo '<br>';
        echo 'he is going to use ' . $this->attacks[$attacks]->attacks . ' to attack'; 
        $damage = $this->generateDamage($enemy, $attacks);
        echo '<br>';
        echo $enemy->name . " is taking " . $damage . " damage";
        echo '<br>';
        $Health = $this->changeHealth($enemy, $damage);
            if ($Health > 0){
                echo $enemy->name . " now has " . $enemy->health . " Health";       
            } else {
                self::$population--;
                echo $enemy->name . " has died, yes it's very sad";
            }
    }
/*
Onderstaande functie genereert de Damage die de vijandige pokemon gaat oplopen. Hij pakt de damage van de attack van de aanvaller, Mocht het zo zijn dat de vijand zijn resistance of weakness gelijk staat aan de energy van de aanvaller hij deze of sterker of zwakker maakt.
*/
    public function generateDamage($enemy, $attacks){
        if ($this->energyType == $enemy->weakness->weakness){
            $totalWeak = $this->attacks[$attacks]->damage * $enemy->weakness->multiplier;          
            return $totalWeak;   
        } else if($this->energyType == $enemy->resistance->energyType) {
            $totalResist =  $this->attacks[$attacks]->damage - $enemy->resistance->value;
            return $totalResist;
        } else { 
            return $this->attacks[$attacks]->damage;
        }
    }


/*
Onderstaande functie berekend door middel van de damage die gegeven wordt de health na de aanval en slaat dit op in de huidige health. Hierdoor blijft de huidige health altijd up-to-date
*/
    public function changeHealth($enemy, $damage){
        if ($enemy->health > 0){
            $enemy->health = $enemy->health - $damage;
            return $enemy->health;               
        }
    }
}


/*
Yavuz: Meer methods bij attack ofzo + Meer comments. 

Danny: Echos veel minder, ook de methods kunnen meer samen en compacter, Idee zelf is goed. en de laatste functie ook meer scheidden
Berekeningen voor resistances en weaknesses apart doen. bovenndien is het berekenen van de damage en het berekenen van health veel mooier en netter als dit in aparte functies gebeurd. Voor de rest. gedachtegang is zeker goed. 

28-05-2020.. om een of andere reden ziet gitkraken geen veranderingen als ik save? waarom kan ik niet commiten nu?
*/