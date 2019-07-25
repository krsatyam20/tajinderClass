<?php
// Create a function
function hello(){
	
	
	echo "Hello";
}


function add($a,$b){
	
	$c= $a+$b;
	return $c;
}
//call a function 

	
	
hello();
echo "</br>".add(10,20);

// Function with Class 
class a{
	
function hello(){

echo "Hello Student";

}
function add($a,$b){
	
	$c= $a+$b;
	return $c;
}
	
} 


// Call a class

$obj= new a();

$obj->hello();

echo $obj->add(20,40);
?>
