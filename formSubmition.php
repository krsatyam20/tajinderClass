<?php
include('DbConection.php');
//print_r($_POST);
$name='';
$email='';
$no='';
$msg='';

//print_r($_FILES);

if(isset($_POST['submit'])) {
  if(!empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userMobile'])) {	
		$name= $_POST['userName'];
		$email= $_POST['userEmail'];
		$no=$_POST['userMobile'];
		
		
		
		
	 $sql="insert into user (uname,uemail,umobile,uimg) values ('".$name."','".$email."','".$no."','".$_FILES['img']['name']."')";
		
		//Upload image 
		
		
		
		if($conn->query($sql)){
			
		$source=$_FILES['img']['tmp_name'];
		$target=$_FILES['img']['name'];
		copy($source,$target);
		
		echo "Data Inserted";
		}
		else{
		echo "Error Inserting Data".$conn->error;
		}
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
<form method="POST" enctype="multipart/form-data">
<p><label>User Name</label><input type="text" name="userName" value="<?php echo $name; ?>" /></p>
<p><label>User Email</label><input type="email" required name="userEmail" value="<?php echo $email; ?>" /></p>
<p><label>Mobile</label><input type="text" name="userMobile" value="<?php echo $no; ?>" /></p>
<p><input type="file" name="img" /></p>
<p><input type="submit" name="submit" /></p>



</form>


</body>
</html>