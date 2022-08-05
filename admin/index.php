<?php

$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"riteedatabase");

if (isset($_POST['submit']))

 {
 	
$nam=$_POST['username'];
$pas=$_POST['password'];


$rs=mysqli_query($con,"SELECT * from riteelogin where username='$nam' and pass='$pas' ");

$count=mysqli_num_rows($rs);

if($count>0)

{

header ("location:http://localhost/ritee/web/index.php");

	}

else
{
	echo "<script> alert('Something Went Wrong')</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div class="col-sm-8" >
		<img src="loginimage.png" style="object-fit: cover; height: 600px;width: 900px;">
		</div>
		
		
	    <div class="col-sm-4" style="background-color: pink;height: 600px;">
		<form action="" method="post" class="form-group" style="margin-top: 40%;">
		<h3 align="center"> <b> ADMIN LOGIN  </b></h3>

					
	<input type="text" name="username" placeholder="Enter User Name" class="form-control"> <br> <br>

	<input type="text" name="password" placeholder="Enter Your Password" class="form-control"><br><br><br>

	<input type="submit" name="submit" value="Login" class="form-control" style="width:50%;margin-left: 25%;">


</form>

</div>
</div>
</div>

</body>
</html>