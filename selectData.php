<?php
include('DbConection.php');
$sql="select * from user order by id DESC;";
$query=$conn->query($sql);
?>


<html>
<head>
<title>


</title>
<style>
table,tr,th,td{border:1px solid red}

</style>
</head>
<body>
<table width="500px" >
<tr>
<th>Sn.<th>
<th>User name<th>
<th>User Email<th>
<th>User mobile<th>
</tr>

<?php 
$no=1;
while($row=mysqli_fetch_array($query)) { ?>
<tr>
<td><?php echo $no ; ?><td>
<td><?php echo $row['uname'] ; ?><td>
<td><?php echo $row['uemail'] ; ?><td>
<td><?php echo $row['umobile'] ; ?><td>
<td><img src="<?php echo $row['uimg'] ; ?> " alt="uimg" width="150px" height="150px;"><td>
</tr>

<?php $no++; } ?>





</table>
</body>

</html>