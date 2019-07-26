<?php

$fName='kumar';
$lName='Satyam';
$name="a b c d e ";

echo $fName;
echo "</br>";
echo $fName." " .$lName;
echo "</br>";
echo strlen($fName);
echo "</br>";
echo str_repeat($fName,3);

echo "</br>";
echo str_replace("k","K",$fName);
echo "</br>";
$x=str_split($name,2);
print_r($x);
echo "</br>";
echo str_word_count($name);
echo "</br>";
$a='a';
$b='n';
echo strcmp($a,$b );
echo "</br>";

echo strrev($fName);
?>