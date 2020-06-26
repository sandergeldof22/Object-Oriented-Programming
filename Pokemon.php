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

    // public static $pokemons = [];

    // public static function findByName($name){
    //     $result = [];
    //     foreach(self::$pokemons as $pokemon){
    //         if ($pokemon->name === $name){
    //             $result[] = $pokemon;
    //         }
    //     }

// om nog van te leren !!

    //     return $result;
    // }

/**
Onderstaande functie genereert alle pokemondetails voor het constructen van een nieuwe pokemon, als dit gedaan is increment hij de population.

@param {string} name, nickname, energyType, Health, HitPoints, $attacks, $weakness, $resistance
*/


    public function __construct($name, $nickname, $energyType, $health, $hitPoints, $attacks, $weakness, $resistance) {
        $this->name = $name;
        $this->nickname = $nickname;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->hitpoints = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$population += 1;
    }

/**
Onderstaande functie haalt de huidige populatie op
*/
    public static function GetPopulation(){
        return self::$population;
    } 

/**
Onderstaande functie haalt alle property's op en geeft deze terug.
*/
    public function __get($property) {
        if (property_exists($this, $property)){
            return $this->$property;
        }
    }

/**
Onderstaande functie valt de vijandige pokemon aan, Hij geeft wat informatie door echo's en haalt de gegenereerde damage op uit takeDamage() en healt uit
changeHealth(), en met die info valt hij de vijandige pokemon aan. en geeft uiteindelijk het eindresultaat van het gevecht weer
*/

    public function attackEnemy($enemy, $attacks){
        $alliedAttacks = $this->attacks[$attacks];
        $alliedEnergytype = $this->energyType;

        $damage = $enemy->takeDamage($alliedAttacks, $alliedEnergytype);
        return $damage;
    }

/**
Onderstaande functie genereert de Damage die de aangevallende pokemon gaat oplopen. Hij pakt de damage van de attack van de aanvaller, Mocht het zo zijn dat de vijand zijn resistance of weakness gelijk staat aan de energy van de aanvaller hij deze of sterker of zwakker maakt.
*/
    public function takeDamage($alliedAttacks, $alliedEnergytype){

        if ($alliedEnergytype == $this->weakness->weakness){
            $totalDMG = $alliedAttacks->damage * $this->weakness->multiplier;      
        } else if($alliedEnergytype == $this->resistance->energyType) {
            $totalDMG = $alliedAttacks->damage - $this->resistance->value;
        } else { 
            $totalDMG = $alliedAttacks->damage;
        }
        $Health = $this->changeHealth($totalDMG);
        return ['damageTaken'=> $totalDMG, 'Health' => $Health];

    }


/**
Onderstaande functie berekend door middel van de damage die gegeven wordt de health na de aanval en slaat dit op in de huidige health. Hierdoor blijft de huidige health altijd up-to-date
*/
    public function changeHealth($totalDMG){
        if ($this->health > 0){
            $this->health = $this->health - $totalDMG;
                if ($this->health == 0) {
                    self::$population--;               
                 } 
            return $this->health;                     
        } else {
            return 0;             
        }
    }
}



/**
Yavuz: Meer methods bij attack ofzo + Meer comments. 

Danny: Echos veel minder, ook de methods kunnen meer samen en compacter, Idee zelf is goed. en de laatste functie ook meer scheidden
Berekeningen voor resistances en weaknesses apart doen. bovenndien is het berekenen van de damage en het berekenen van health veel mooier en netter als dit in aparte functies gebeurd. Voor de rest. gedachtegang is zeker goed. 

28-05-2020.. om een of andere reden ziet gitkraken geen veranderingen als ik save? waarom kan ik niet commiten nu?
*/