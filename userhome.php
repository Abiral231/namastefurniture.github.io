<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?>

<html>
<head>
	<link rel="stylesheet" href="view/css/bootstrap.min.css">


	<style>
	 .ab{
color: darkred;
	 }
	  #rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px; 
 width: 30px;
  height: 50px;  
}
	 #example2 {
 
  background: url(download.png);
  background-repeat: no-repeat;
 
  width: 400px;
  height: 400px;
}
body{
	background : linear-gradient(rgba(0,50,50,0),rgba(0,50,50,1));
	background-size:  cover;
	background-position:centre;
}
	 
	</style>
</head>
<body class="p-3 mb-2 bg-transparent text-dark">
	<?php require 'outnavbar.php' ?>

	<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		window.alert("successfully logged in ");
	</script>

 <marquee class= "ab"> Welcome to our Online Furniture Showroom </marquee>
 <?php require 'slider.php' ?>
 
</body>
	</html>