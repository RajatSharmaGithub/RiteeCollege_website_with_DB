<?php

$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"riteedatabase");


if(isset($_POST['submit']))

{
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$em=$_POST['email'];
	$cr=$_POST['cource'];

$rs=mysqli_query($con,"INSERT INTO enquirydata set fname='$fn',lname='$ln',email='$em',cource='$cr'");



if ($rs) 
{
	echo "<script>alert('Data has been submitted')</script>";
	
	}
	else

	{ 
		echo "OOOopppss";

	}
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Enquiry Form</title>

<link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body style="background-image: url(admin/bg.jpg);background-size: cover;">
	<form action="" method="POST">
	  <div class="form">
	  <div class="tittle">Welcome</div>
	  <div class="subtitle"></div>

	<div class="input-container ic1 ">
	<input type="text" id="firstname" class="input" placeholder="" name="firstname">
	<div class="cut"></div>
	<label for="firstname" class="placeholder">First Name</label>
	
	</div>


	<div class="input-container ic1 ">
	<input type="text" id="lastname" class="input" placeholder="" name="lastname">
	<div class="cut"></div>
	<label for="lastname" class="placeholder">Last Name</label>
	
	</div>

	<div class="input-container ic2 ">
	<input type="text" id="email" class="input" placeholder="" name="email">
	<div class="cut cut-short"></div>
	<label for="email" class="placeholder">Email</label>
	</div>



	<div class="input-container ic2 ">
    <input type="text" id="chose cource" class="input" placeholder="" name="cource">
	<div class="cut cut-short"></div>
	<label for="choose corce" class="placeholder">Choose Course</label>
	</div>

	<button type="text" class="submit" name="submit">submit</button>
   
   </div>

</form>
</body>
</html>