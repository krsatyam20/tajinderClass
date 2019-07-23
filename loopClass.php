<?php
/*
1. For loop
2. While loop
3. do while loop
4. foreach 
*/


for($i=0;$i<10; $i++){
	
echo "</br>".$i;	
}

$x=0;

while($x<10){
	
	echo "While Loop</br>".$x;
	$x++;
	
}

//Do while loop



$x=0;

do{
	
	echo "Do While Loop</br>".$x;
	$x++;
	
}while($x<10);
// loop with html
?>
<html>
<head>

</head>
<body>

<select>
<option>Day</option>
<?php  for($i=1;$i<32; $i++){
?>
<option><?php echo $i; ?></option>
<?php } ?>

</select>

<select>
<option>Year</option>
<?php  
$yr=1999;
for($i=1;$i<22; $i++){
?>
<option><?php echo $yr; ?></option>
<?php $yr++ ;} ?>

</select>

<?php $month= array('jan','feb','mar','apr','may') ; ?>

<select>
<option>Month</option>
<?php  
foreach($month as $mon){
?>
<option><?php echo $mon; ?></option>
<?php } ?>

</select>




</body>

<html>
