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

    // public function getWeakness() {
    // 	return $this->Weakness;
    // }

    // public function getResistance() {
    // 	return $this->Resistance;
    // }

    public function __get($property) {
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}

	function AttackEnemy($enemy){
		$energy = $this->getEnergyType();	
        $Attack = $this->Attack[0]->getAttack();
        $Damage = $this->Attack[0]->Damage;
        $enemy = $enemy->getName();

		echo "Your pokemon " . $this->getName() . " will attack the enemy " . $enemy;
		echo '<br>';
		echo $this->getName() . " use your " . $this->Attack[0]->getAttack();
		echo '<br>';
        if ($energy == $enemy->Weakness->Weakness) {
        	$totalDMG = ($this->Attack[0]->Damage * $enemy->Weakness->Multiplier);
        	echo $totalDMG;
        	$enemy->Health = $enemy->Health - $totalDMG;
        	echo '<br>';
            echo $enemy->getHealth();
            echo '<br>';
            echo 'Weakness';
        } else if ($this->energyType == $enemy->Resistance->Resistance) {
        	$Resistancetest = $enemy->Resistance->Resistance;
        	echo $Resistancetest;
        	echo $Attack . " will deal " . $Damage . " Damage";
        	echo '<br>';
        	echo "However " . $enemy . " has a resistance to your " . $Attack;
        	echo '<br>';
        	echo "The resistance will block ... Damage, Meaning the " . $Attack . " will deal only ... damage";
        	echo '<br>';
        	$TotalDPS = ($this->Attack[0]->Damage - $enemy->Resistance->value);
        	echo $TotalDPS;
        	echo '<br>';
        	echo 'Resistance !';
        } else {
        	echo 'Normaal';
        }
	}
}
