<?php
class Fruit{

	public $name;
	private $color;

	function __construct($fruitname,$color){
		$this->name=$fruitname;
		$this->color=$color;
	}
	public function get_name(){
		return $this->name .' and '. $this->color;
	}

}

$mango= new Fruit('mango','yellow');
echo $mango->get_name();

$mango->color='red'; //can change color only if the property are public
echo $mango->get_name(); 

?>