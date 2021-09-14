<?php 
session_start();
include("outnavbar.php");
?>
<html>
<head>
	<link rel ="stylesheet" href="css/navbar.css">
  <link rel ="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card" >
						 <img src="images/furniture/1.jpg" class="card-img-top">
						 <div class="card-body text-center">
						 	<h5 class="card-title"> King Sized BED 60*78" Bed </h5>
						 	<p class="card-text">Price : 60,000</p>
    <button class="btn btn-primary" type="submit"  name="Add_To_Cart">Add To Cart</button>
    <input type="hidden" name="Item_Name" value="Bed1">
    <input type="hidden" name="Price" value="60,000">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php 
include("footer.php");
?>
	</body>
	</html>