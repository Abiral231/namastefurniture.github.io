
<html>
<head>

	<link rel ="stylesheet" href="css/bootstrap.min.css">

</head>
	<body>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="logo-box">
                        <div class="logo"><a href="#"><img src="images/namaste2.png" alt="" style="border-radius: 85px;"></a></div>
                    </div>
  <div class="container-fluid">
    <a class="navbar-brand" href="userhome.php" style="color:black;">The Namaste Furniture </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userhome.php" style="color:gray;">Home</a>

      <!--  </li>
          <li class="nav-item">
          <a class="nav-link" href="user/product.php" style="color:floralwhite;"
          >Product</a>
           </li> !-->

           <li class="nav-item ">
             <a class="nav-link" href="category.php" style="color:slategray;"
          >Product</a>
          
        </li>

          <li class="nav-item">
          <a class="nav-link" href="services.php" style="color:slategray;"
          >Services</a>

           </li>
          <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color:slategray;"
          >Contact</a>
           
      
         
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>

      
      <ul class="nav justify-content-end nav nav-pills nav-fill">
        <li class="nav-item">
    <a class="nav-link" href="#"><p>Welcome -<?php  echo $_SESSION['username']; ?> </p> </a>

  
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="logout.php" style="color:floralwhite;" onclick="confirm()" >Logout</a>
  </li>


 
  
</ul>
<ul class="nav justify-content-end nav nav-pills nav-fill">
  <li class="nav-item">
  <div>
  <a href="mycart.php" class="btn btn-outline-success" style="margin-left: 320px;">My Cart(0) </a>
</div>
  </li>
</ul>


    </div>
  </div>
</nav> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>