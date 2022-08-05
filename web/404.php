<?php

include('sidebar.php');
include('header.php');


$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"riteedatabase");

if (isset($_POST['upload'])) 

{

    $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];

            move_uploaded_file($tempname,"siteimagefolder/$imagename");

    $rs=mysqli_query($con,"INSERT INTO siteimagechange set siteimage='$imagename'");

 if ($rs)
 {
        echo "<script>alert('Image has been Changed')</script>";
    
    }
    else

    { 
        echo "OOOopppss";

    }
}

?>

<!DOCTYPE html>
<head>


<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<title>Site Image Change</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>

<body>
<section id="container">

<section id="main-content">
<section class=" wrapper">

<div class="agile-grid">
	<h2 class="w3ls_head">Change Your Site Front Image</h2>


            <div class="row">

            <div class="col-md-12">
            <section class="panel">

            <div class="panel-body">


    <div class="col-lg-6" style="height: 200px;"> <p class="hd-title">CHANGE IMAGE</p>

    <form class="form-group" action="404.php" method="POST" enctype="multipart/form-data">
                                             
    <input type="file" name="image" class="form-control"><br>


    <center><input type="submit" name="upload" value="Submit" class=" btn btn-success"> </center>
                         
                


         </form>
</div>
</div>
</div>
</div>

</section>
</section>

<!-- footer -->
		<div class="footer">
		<div class="wthree-copyright">
			  <p>© 2021 Ritee Institute. All rights reserved</p>
		</div>
        </div>
        </div>
  <!-- / footer -->

</section>
</section>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

</body>
</html>