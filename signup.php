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
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  $usertype=$_POST['usertype'];
  if(!empty($username) && !empty($password) && !is_numeric($username))
  {
    $sql="insert into login (username,password,usertype) values ('$username','$password','$usertype')";
    mysqli_query($data, $sql);
    header("Location: login.php");
      die;
  }else{
    echo "Please enter some valid information!";

  }
}
?>
<html>
<head> <title> The Namaste </title>
	<link rel ="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
	<?php require 'navbar.php' ?>
    <div class="container">
        <h1 class="text-center"> Sign up to Our Furniture Market </h1>
    </div>
    <form action="#"  method="post" >
        <div id="emailHelp" class="form-text">Thank you for visting us ..  </div>
  <div class= "col-md-3" >
    <label for="exampleInputEmail1" class="form-label" >Username</label>
    <input type="name" class="form-control" id="username" name="username" placeholder="Enter username">
    
  </div>
  <div class="col-md-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password"placeholder="Enter password">
  </div>
   <div class="col-md-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword"placeholder="Re-type Password">
  </div>
<div class="gender">
  <input type="radio" id="male" name="gender" value="male"> 
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label> </div>
  <center><div style="background-color: darkgrey; width:200px;">
    <label>Usertype</label>
    <input type="radio" name="usertype" value="admin" id="usertype"> admin
        <input type="radio" name="usertype" value="user" id="usertype" checked > user
  </div>
  </center>

  <button type="submit" class="button btn-primary">Signup</button>

</form>
<p class="bottom"> <marquee>

Namaste Furniture | Since 2057 B.S. | Phone: +9779816232444 <br>
© 2021 THE NAMASTE FURNITURE </marquee></p>

 <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>

