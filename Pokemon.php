<?php

class Pokemon {

	private $name;
	private $energyType;
	private $hitpoints;
	private $health;
	protected $attacks;
	protected $weakness;
	protected $resistance;

	public static $population = 0;

    public function __construct($name, $energyType, $health, $hitPoints) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->hitpoints = $hitPoints;
        $this->Attack = [];
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$population += 1;
    }

    public function getName() {
      return $this->name;
    }

    public function getEnergyType() {
    	return $this->energyType;
    }

    public function getHealth() {
      return $this->health;
    }

    public function getHitPoints() {
      return $this->hitpoints;
    }

    public static function GetPopulation(){
        return self::$population;
    }   

    public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}

	public function AttackEnemy($enemy){
		$allyEnergy = $this->energyType;
        $allyAttack = $this->Attack[0]->getAttack();
        $allyDamage = $this->Attack[0]->damage;

        $enemyWeakness = $enemy->Weakness->energyWeakness;
        $enemyMultiplier = $enemy->Weakness->multiplier;
        $enemyResist = $enemy->Resistance->value;
        $enemyHealth = $enemy->getHealth();
        $enemyDescription = $enemy->Resistance->description;

        $totalDamageResist = $allyDamage - $enemyResist;
        $totalHealthResist = $enemyHealth - $totalDamageResist;

        $totalDamageWeakness = $allyDamage * $enemyMultiplier;
        $totalHealthWeakness = $enemyHealth - $totalDamageWeakness;

        $totalDamageNormal = $allyDamage;
        $totalHealthNormal = $enemyHealth - $allyDamage;


		echo "Your pokemon " . $this->getName() . " with " . $this->getHealth() . " health will attack the enemy " . $enemy->getName();
		echo '<br>';
		echo $this->getName() . " use your " . $allyAttack;
		echo '<br>';

        if ($allyEnergy == $enemyWeakness) {
        	echo $allyAttack . " will deal " . $allyDamage . " Damage";
        	echo '<br>';
        	echo "However " . $enemy->getName() . " has a weakness to your " . $allyAttack;
        	echo '<br>';
        	echo "This weakness will make sure " . $enemy->getName() . " takes " . $enemyMultiplier . " extra damage";
        	echo '<br>';
        	echo $enemy->getName() . " is going to take " . $totalDamageWeakness . " damage";
        	echo '<br>';
        	echo '<br>';
        	echo 'The pokemon ' . $enemy->getName() . " now has " . $totalHealthWeakness . " Health";
            echo '<br>';
            echo '<br>';
            echo 'De totale populatie van pokemons is: ' . Pokemon::$population;
        } else if ($allyEnergy == $enemyDescription) {
        	echo $allyAttack . " will deal " . $allyDamage . " Damage";
        	echo '<br>';
        	echo "However " . $enemy->getName() . " has a resistance to your " . $allyAttack;
        	echo '<br>';
        	echo "The resistance will block " . $enemyResist . " Damage, Meaning the " . $allyAttack . " will deal only " . $totalDamageResist . " damage";
        	echo '<br>';
        	echo '<br>';
        	echo 'The pokemon ' . $enemy->getName() . " now has " . $totalHealthResist . " Health";
            echo '<br>';
            echo '<br>';
            echo 'De totale populatie van pokemons is: ' . Pokemon::$population;
        } else {
        	echo $allyAttack . " will deal " . $allyDamage . " Damage";
        	echo '<br>';
        	echo $enemy->getName() . " has no weaknesses or resistances to your attack so it takes normal damage";
        	echo '<br>';
        	echo $enemy->getName() . " is going to take " . $totalDamageNormal . " damage";
        	echo '<br>';
        	echo '<br>';
        	echo 'The pokemon ' . $enemy->getName() . " now has " . $totalHealthNormal . " Health";
            echo '<br>';
            echo '<br>';
            echo 'De totale populatie van pokemons is: ' . Pokemon::$population;
        }

        if ($enemyHealth <= 0) {
        	self::$population--;
            echo 'De totale populatie van pokemons is: ' . Pokemon::$population;
        }
	}
}

//Yavuz: Meer methods bij attack ofzo + Meer comments.
