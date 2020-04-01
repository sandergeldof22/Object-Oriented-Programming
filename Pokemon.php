<?php

class Pokemon {

	private $name;
	private $energyType;
	private $hitpoints;
	private $health;
	protected $attacks;
	protected $weakness;
	protected $resistance;

	private static $population = 0;

    public function __construct($name, $energyType, $health, $hitPoints) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->hitpoints = $hitPoints;
        $this->Attack = [];
        $this->weakness = $weakness;
        $this->resistance = $resistance;
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

    public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}

	function AttackEnemy($enemy){
		$allyEnergy = $this->energyType;
        $allyAttack = $this->Attack[0]->getAttack();
        $allyDamage = $this->Attack[0]->damage;
        $enemyWeakness = $enemy->Weakness->energyWeakness;
        $enemyResist = $enemy->Resistance->value;
        $enemyHealth = $enemy->getHealth();
        $enemyDescription = $enemy->Resistance->description;
        $totalDamage = $allyDamage - $enemyResist;
        $totalHealth = $enemyHealth - $totalDamage;

		echo "Your pokemon " . $this->getName() . " will attack the enemy " . $enemy->getName();
		echo '<br>';
		echo $this->getName() . " use your " . $this->Attack[0]->getAttack();
		echo '<br>';
        if ($allyEnergy == $enemyWeakness) {
        	echo '<br>';
            echo 'Weakness';
        } else if ($allyEnergy == $enemyDescription) {
        	echo $allyAttack . " will deal " . $allyDamage . " Damage";
        	echo '<br>';
        	echo "However " . $enemy->getName() . " has a resistance to your " . $allyAttack;
        	echo '<br>';
        	echo "The resistance will block " . $enemyResist . " Damage, Meaning the " . $allyAttack . " will deal only " . ($totalDamage) . " damage";
        	echo '<br>';
        	echo '<br>';
        	echo 'The pokemon ' . $enemy->getName() . " now has " . $totalHealth . " Health";
        } else {
        	echo 'Normaal';
        }
	}
}
