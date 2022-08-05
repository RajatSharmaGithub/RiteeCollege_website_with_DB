<!DOCTYPE html>
<html>
<head>




<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	
<title>Welcome to Ritee</title>

</head>

        <body>
       	<div class="container-fluid">
        <div class="row" >
	      <div class="col-sm-12" style="background-color: #17376e;height: 50px;">

		    <div class="col-sm-8">
		  	<p style="margin-top: 10px;color: white;" > 

		  		<a href="https://www.facebook.com/riteegroupraipur" target="_blank">
		  		<i class="fab fa-facebook-f fa-2x"></i></a>&nbsp&nbsp&nbsp
		  		<i class="fab fa-instagram fa-2x"></i> &nbsp&nbsp&nbsp
		  		<i class="fab fa-whatsapp fa-2x"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		  	  info@rit.edu.in  (+91) 9999999999 </p>

		  </div>

			     <div class="col-sm-4" align="center">
				   <button style="background-color: red; margin-top: 10px;border-radius: 5px; width: 150px; height: 40px;"> <a href="login.php" style="color: white;">Enquiry Now</a></button>
				
		</div>
	  </div>
	  </div>

		    <div class="row" >
		    	<div class="col-sm-12" style="background-color:white;height: 100px;">
		    	<div class="col-sm-4" style="background-color: blue;height: 100px; text-align: center;">



<?php

$hostname="localhost";
$user="root";
$pass="";

$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"riteedatabase");

$result=mysqli_query($con,"select * from siteimagechange");
while($row=mysqli_fetch_array($result))
{

$image= $row['siteimage'];;
            
}


?>

<a href="index.php"> <img src="web/siteimagefolder/<?php echo $image;?>" style="margin-top: 30px;"></a>

</div>


		  	<div class="col-sm-8" style="margin-top:20px;">


		  	<div class="navbar" style="border-radius: 20px;">

               <a href="index.php">Home</a>
               <a href="about.php">About</a>
               <a href="cource2.php">Cources</a>
          
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
        Drop Down !
      </a>
      <div class="dropdown-menu" >
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
     
    </li>
  
</div>
</div>
</div>
</div>
</div>
		    	
		    		<div class="row" >
		    			  <div class="col-sm-12" style="margin-top : 5px" >
		    			  <img  src="2.jfif" style="width: 100%;">
		    			  <p style="margin-top: -5%; font-size: 24px;color: red;"> <b>Know US Better </b></p> 

		   </div>
		   </div>

		    	 <div class="row" style="margin-top : 5px" >
		    	 	   <div class="col-sm-12" > 

		    	 	   	<marquee  style="color: white; "> Aff. &nbsp&nbsp TO &nbsp&nbsp  CSVTU  &nbsp&nbsp Bhilai </marquee> 

	<div class="col-sm-4" style="text-align: center;background-color: grey; height: 300px; color: white;"> 

		    			 <h2 style="color: black;"><b>BCA</b></h2>
		    			 <br>Addmission
		    			 <br> Syllabus
		    			 <br> Eligibility Criteria
		    			 <br> Notice

		    			 <br>
		    			 <br>
		    			 <br> <marquee style="color: yellow;"> Aff. &nbsp&nbsp TO &nbsp&nbsp  CSVTU  &nbsp&nbsp Bhilai </marquee> 

		    			</div>

		<div class="col-sm-4" style="text-align: center;background-color: #1EAE98;height: 300px; color: white;">

		        	 <h2 style="color: black;"><b>MCA</b></h2> 
		    			 <br>Addmission 
		    			 <br> <a href="#" style="color:white">Syllabus </a>
		    			 <br> Eligibility Criteria 
		    			 <br> Notice 

		    			 <br>
		    			 <br>
		    			 <br> <marquee style="color: yellow;"> Aff. &nbsp&nbsp TO  &nbsp&nbsp CSVTU  &nbsp&nbsp BHILAI </marquee> 

		    	</div>

	<div class="col-sm-4" style="text-align: center;background-color: grey;height: 300px; color: white;">

		    			 <h2 style="color: black;"><b>PH.D</b></h2> 
		    			 <br> Addmission
		    			 <br> Syllabus
		    			 <br> Eligibility Criteria 
		    			 <br> Notice

		    			 <br>
		    			 <br>
		    			 <br> <marquee style="color: yellow;"> Aff. &nbsp&nbsp  TO  &nbsp&nbsp  CSVTU  &nbsp&nbsp  Bhilai </marquee> 

		    	</div>
		    	</div>

          <div class="row" >
		    			  <div class="col-sm-12" style="margin-top : 5px" >
		    			  <video width="100%" height="500" controls>
  <source src="riteevideo.mp4" type="video/mp4">
  <source src="riteevideo.ogg" type="video/ogg">
</video>

		   </div>
		   </div>

		   <footer> <div class="row">
		   	<div class="col-sm-12" style="height: 50px;background-color:#7FC8A9;text-align: center;">
		   		<p style="margin-top: 10px;font-size: 25px;"><b><u> All copyrights reservered @2021</u></b> </p>
	</div> 
  </div>
  </footer>

</body>
</html>