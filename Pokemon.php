<?php

class Pokemon {

	private $Name;
	private $EnergyType;
	private $Hitpoints;
	private $Health;
	private $Attacks;
	private $Weakness;
	private $Resistance;


	private static $Population = 0;

    public function __construct($Name, $EnergyType, $Health, $HitPoints) {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Health = $Health;
        $this->Hitpoints = $HitPoints;
        $this->Attack = [];
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function getName() {
      return $this->Name;
    }

    public function getEnergyType() {
    	return $this->EnergyType;
    }

    public function getHealth() {
      return $this->Health;
    }

    public function getHitPoints() {
      return $this->Hitpoints;
    }

    public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}

	public function AttackEnemy($enemy){
		// $enemy voor de verdedigende vijand, //$this voor de aanvaller
		echo "Your pokemon " . $this->getName() . " will attack the enemy " . $enemy->getName();
		echo '<br>';
		echo $this->getName() . " use your " . $this->Attack[0]->getAttack();
		echo '<br>';	
        if ($this->energyType == $enemy->Weakness->energyType) {
        	$totalDMG = ($this->Attack[0]->Damage * $enemy->Multiplier);
        	echo $totalDMG;
        	$enemy->Health = $enemy->Health - $totalDMG;
        	echo '<br>';
            echo $enemy->getHealth(); //<- moet 20 damage worden, is nu nog 60 damage.
            echo '<br>';
        } else if ($this->energyType == $enemy->Resistance->energyType) {
        	echo 'Resistance !';
        } else {
        	echo 'Niks !';
        }



		// echo "The enemy Pokemon " . $enemy->getName() . " has taken " . $this->Attack[0]->getDamage() . " damage from your " . $this->Attack[0]->getAttack();		
		// echo '<br>';
		// echo $this->getEnergyType();
		// echo $enemy->getEnergyType();
		// echo '<br>';
		// echo 'The enemy Pokemon ' . $enemy->getName() . " now was " . $enemy->getHealth() . " Health left";

		// echo '<br>';
	}
}
