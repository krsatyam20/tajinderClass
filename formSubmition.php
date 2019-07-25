<?php

//print_r($_POST);
$name='';
$email='';
$no='';
$msg='';

if(isset($_POST['submit'])) {
  if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userMobile'])) {	
		$name= $_POST['userName'];
		$email= $_POST['userEmail'];
		$no=$_POST['userMobile'];
  }
  else{
	  $msg="Please Fill The Form Empty Form not Submited";
  }
}
else {
	
$msg="Please Fill The Form";
}

?>
<html>
<head>

</head>
<body>
<h1>
<?php echo $msg ;?>
</h1>
<form method="POST">
<p><input type="text" name="userName" value="<?php echo $name; ?>" /></p>
<p><input type="text" name="userEmail" value="<?php echo $email; ?>" /></p>
<p><input type="text" name="userMobile" value="<?php echo $no; ?>" /></p>
<p><input type="submit" name="submit" /></p>



</form>


</body>
</html>