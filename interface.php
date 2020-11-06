<?php


//in interface there are methods only which are always public
//when more than one class uses the same interface then it is known as "POLYMORPHISM"

interface Animal{

public function make_sound();

}

class Cat implements Animal{
	public function make_sound(){
		echo "MEOW";
	}
}


class Dog implements Animal{
	public function make_sound(){
		echo "Bark";
	}
}

$cat = new Cat();
$dog =new Dog();
$anim=array($cat,$dog);

foreach ($anim as $animal) {
	$animal->make_sound();
	echo "<br>";
}
// $cat->make_sound();
// echo "<br>";
// $dog->make_sound();

?>