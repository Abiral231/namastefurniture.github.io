<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
  die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["username"];
  $password=$_POST["password"];


  $sql="select * from login where username='".$username."' AND password='".$password."' ";

  $result=mysqli_query($data,$sql);

  $row=mysqli_fetch_array($result);

  if($row["usertype"]=="user")
  { 

    $_SESSION["username"]=$username;

    header("location:userhome.php");
  }

  elseif($row["usertype"]=="admin")
  {

    $_SESSION["username"]=$username;
    
    header("location:admin");
  }

  else
  {
    echo "username or password incorrect";
  }

}




?>
<html>
<head><title> The Namaste </title>
	<link rel ="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
<?php require 'navbar.php'?>
 <div class="container">
        <h1 class="text-center"> Connect with us. </h1>
        <h3 class="subtitle">if you haven't Register yet. <a href="signup.php">click here </a></h3>
    </div>
    <form action="#"  method="post" >

  <div class= "col-md-2" >
    <label for="exampleInputEmail1" class="form-label" >Username</label>
    <input type="name" class="form-control" id="username" name="username"placeholder="Enter username">
    
  </div>
  <div class="col-md-2">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password"placeholder="Enter password">
  </div>
   <input type="submit" id="button"class="button btn-secondary" value="Login">

</form>
<p class="bottom"> <marquee>

Namaste Furniture | Since 2057 B.S. | Phone: +9779816232444 <br>
© 2021 THE NAMASTE FURNITURE </marquee></p>

</body>
</html>