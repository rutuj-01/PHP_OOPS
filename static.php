<?php

class Greet{

	public static $message="HELLO";

	public static function welcome(){
		echo self::$message ." world!";
	}

	public function __construct(){
		self::welcome();
	}

}

new Greet();					//we create an object which calls directly constructer which then calls welcome method.
//Greet::welcome();             //before constructor we directly can call welcome function by using :: as it is static

?>