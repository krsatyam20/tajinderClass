<?php
//start here

//print any thing 
echo "hello tajinder";

// single line comment 

/* multiple line comment  */

//create a variable

$a=10;

echo "</br>".$a;
$a=10.12;

echo "</br>".$a;
$a="h";

echo "</br>".$a;
$name="tajinder";

echo "</br>".$name;


$a=70;
$b=10;
$c= $a+$b;

echo "</br> add Value of a and b= ".$c;

$b=40;


if($a>$b){
	
	echo "A is GT";
}
else {
	
	
echo "B is GT";
	
}
	
	
$a=10;
$b=40;
$c=30;
	
if($a >$b)
  {
	if($a>$c)
	{
     echo "A is GT";		
	}
	else
	{
	
	echo "C is GT";
	}
  }	
else
 {
	if($b>$c)
	{

     echo "B is GT";		
	}
	else
	{
	
	echo "C is GT";
	}	  
 }	  
  
  
$x='tajinder';


switch($x){

case 'red':
	echo "Case is red";
	break;

case 'yellow':
	echo "Case is Yellow";
	break;
	

case 'green':
	echo "Case is Green";
	break;

case 'black':
	echo "Case is Black";
	break;
default:
	echo "Default Case"	;





}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//close here
?> 