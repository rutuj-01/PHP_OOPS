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
class Apple extends Fruit{
	// public function get_color(){
	// 	return $this->color;                   //can return color if the property is protected or public
	// }
}



$mango= new Fruit('mango','yellow');
echo $mango->get_name();
echo "<br>";

// $mango->color='red';                           //can change color only if the properties are public
// echo $mango->get_name(); 


$apple = new Apple('apple','red');
echo $apple->get_color();
echo $apple->get_name();
?>