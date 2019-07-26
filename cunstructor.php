<?php 
//self calling function is called 
/* parametrized and non parametrized */

class a{
	
	function __construct($name){
		
		
	echo "hello ".$name;
	
	
	}
}

$obj=new a('shyam');


?>