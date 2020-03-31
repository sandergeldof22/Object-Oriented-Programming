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
        $this->Weakness = [];
        $this->Resistance = [];
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
		$energy = $this->getEnergyType();	
        $Attack = $this->Attack[0]->getAttack();
        $Damage = $this->Attack[0]->Damage;
        $enemy = $enemy->getName();
		// $enemy voor de verdedigende vijand, //$this voor de aanvaller
		echo "Your pokemon " . $this->getName() . " will attack the enemy " . $enemy;
		echo '<br>';
		echo $this->getName() . " use your " . $this->Attack[0]->getAttack();
		echo '<br>';
        if ($energy == $enemy->Weakness->energyWeakness) {
        	$totalDMG = ($this->Attack[0]->Damage * $enemy->Weakness->Multiplier);
        	echo $totalDMG;
        	$enemy->Health = $enemy->Health - $totalDMG;
        	echo '<br>';
            echo $enemy->getHealth();
            echo '<br>';
            echo 'Weakness';
        } else if ($this->energyType == $enemy->Resistance->energyType) {
        	echo $Attack . " will deal " . $Damage;
        	echo '<br>';
        	echo "However " . $enemy . " has a resistance to your " . $Attack;
        	echo '<br>';
        	echo "The resistance will block ... Damage, Meaning the " . $Attack . " will deal only ... damage";
        	$Resist = $this->Resistance->energytype;
        	echo $Resist;


        	echo '<br>';
        	echo 'Resistance !';
        } else {
        	$totalDMG = $enemy;
        	echo $totalDMG;
        	echo 'Normaal';
        }
	}
}
