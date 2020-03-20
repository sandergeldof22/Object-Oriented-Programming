<?php

class Superhero {

	public $name;
	public $gender;
	public $team;
	public $oneliner;

	function __toString(){
		return json_encode($this);
	}

	public function __construct($name, $gender, $team, $oneliner){
		$this->name = $name;
		$this->gender = $gender;
		$this->team = $team;
		$this->oneliner = $oneliner;
	}

	public function __get($property){
		switch($property) {
			case 'name':
				return $this->name;
				break;
			case 'gender':
				return $this->gender;
				break;
			case 'team':
				return $this->team;
				break;
			case 'oneliner':
				return $this->oneliner;
				break;
		}
	}

	public function __set($property, $value){
		switch($property){
			case 'gender':
				$this->gender = $value;
				break;
			case 'team':
				$this->team = $value;
				break;
			case 'oneliner':
				$this->oneliner = $value;
				break;
		}

	}

	public function sayOneliner() {
		echo '<h2>'.$this->oneliner.'</h2>';
	}

}


Class Wizard extends Superhero {
	public $team = "Wizards";

	public function __construct($name, $gender, $oneliner) {
		parent::__construct($name, $gender, $this->team, $oneliner);
	}

}

Class Teacher extends Superhero {
	public $team = "Teachers";
	public $oneliner = "Kijk maar op W3schools!";

	public function __construct($name, $gender) {
		parent::__construct($name, $gender, $this->team, $this->oneliner);
	}

}

Class Stagair extends Superhero {
	public $team = "Stagairs";
	public $oneliner = "Duurt lang";

	public function __construct($name, $gender) {
		parent::__construct($name, $gender, $this->team, $this->oneliner);
	}

}