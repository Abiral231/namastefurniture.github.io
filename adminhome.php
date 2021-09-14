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
	 
	 
	</style>
</head>
<body>
	<?php require 'outnavbar.php' ?>

	<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	<marquee class= "ab"> Welcome to our Online Furniture Showroom </marquee>
<h1 align="center">Admin Panel</h1>
<?php 

 echo $_SESSION["username"]
 ?>
<a href="logout.php">Logout</a>

	</body>
	</html>