<?php

//when we want to use one method in multiple classes at that time we use the concept of the traits

trait message1{
	public function msg1(){
		echo " display First message ";
	}
	public function msg2(){
		echo "Display second message";
	}
}

trait message2{
	public function msg3(){
		echo "Display second message of 2nd trait";
	}	
}

class Welcome{
	use message1;
	use message2;
}

$wel=new Welcome();

$wel->msg1();
echo "<br>";
$wel->msg2();
echo "<br>";
$wel->msg3();


?>