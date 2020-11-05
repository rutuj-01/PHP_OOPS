<?php

abstract class Car{
	public $name;							//it contains methods as well as properties unlike interfaces which has only 	
	public $max_speed;						//methods.
	


	public function __construct($name,$max_speed){

		$this->name=$name;
		$this->max_speed=$max_speed;

	}
	public function get_name(){
		return $this->name;
	}

	abstract public function intro():string;
	abstract public function max_speed():string;
}

class Volvo extends Car{
	public function intro():string{
		return "I am comfortable , I am $this->name";
	}
	public function max_speed():string{
		return "max speed: $this->max_speed";
	}
}
class Audi extends Car{
	// public function get_max_speed(){				//if we do not include all the methods which are declared abstract
	// 	return "$this->max_speed";					// it will give us a error

	// }


	public function intro():string{						//abstract class is a type of supervisor .
		return "I am faster , I am $this->name";   //all the methods of abstract class must be present in derived class.
	}
	public function max_speed():string{
		return "max speed: $this->max_speed";
	}


}



$volvo = new Volvo('volvo','220');
// echo $volvo->get_name();
echo $volvo->intro();
echo "<br>";
echo $volvo->max_speed();

echo "<br>";
$audi = new Audi('Audi','260');
// echo $volvo->get_name();
echo $audi->intro();
echo "<br>";
echo $audi->max_speed();


?>