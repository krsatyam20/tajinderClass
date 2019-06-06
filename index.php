<!-- Comment: ignore by compiler 

Tag 
	single  <tagName /> <br/><img />
	
	Pair  <tagName>(open tag)   </tagName>
	<html>	</html>
	<body>	</body>
-->
<?php 
//create a variable  and assign the value on variable
//variable: is a memory location where store our data/value  
$a=10;
$b=20;
// addition of value 
$c= $a+$b;

?>
<html>
	<head> 
	
	
	<style>
	/* .main{background-color:red;}*/
	
	
	</style>
	
	</head>
	
	
	<body class="main">
		<p> Hello</p>
		<!-- px or % for meserment -->
		<div>
		<img src="Chrysanthemum.jpg" width="150px;" height="150px;" />
		</div>
		<!-- inline css -->
		<div style="width:20%; float:left;">Hello</div>
		<div style="width:20%; float:left;">Hello</div>
		<div style="width:20%; float:left;" onclick="hello();">Hello <?php echo "student"; ?></div>

<h1> <?php echo $c ; ?> </h1>

	</body>
	<script>
	function hello(){
	alert("Hello student");
	
	}
	
	</script>
</html>