<?php

	class Car{
		public $color;
		public $name;
		
		public function set_name($name,$color){
			$this->name = $name;
			$this->color=$color;
		 }
		public function get_name(){
			return $this->name;
		}
		public function get_color(){

			return $this->color;
		}

	}



	$tata =new Car();
	$tata->set_name("Tata","Black");
	echo $tata->get_name();
	echo "<br>";
	echo $tata->get_color();





?>
