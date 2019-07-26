<?php
/* 
inherit the parent class property by child class

single level
multi level
multiple 




*/
class a{
	
	function animal(){
		
		echo "Eating";
	}
	
	
}

class b extends a {
	
	
	function dog(){
		
		echo "Barking";
	}
	function cat(){
		
		echo "Mew Mew";
	}
	
}

class c extends b {
	
	
	function man(){
		
		echo "hello";
	}
	
}


$obj= new c();

echo "</br>";
$obj->animal();

$obj->dog();


echo "</br>";
$obj->animal();
$obj->cat();




?>