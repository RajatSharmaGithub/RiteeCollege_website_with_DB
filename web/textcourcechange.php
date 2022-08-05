<?php

include('sidebar.php');
include('header.php');


$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"riteedatabase");

if (isset($_POST['change'])) 

{

    $hdtxt=$_POST["headtext"];
    $txt=$_POST["text"];


    $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];

            move_uploaded_file($tempname,"courcetextpicfolder/$imagename");

    $rs=mysqli_query($con,"INSERT INTO courcetextchange set image_cource='$imagename',head_text='$hdtxt',text_cource='$txt'");

 if ($rs)
 {
        echo "<script>alert('Image  and Text has been Changed')</script>";
    
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
	<h2 class="w3ls_head">Change Your Cource Content</h2>


            <div class="row">

            <div class="col-md-12">
            <section class="panel">

            <div class="panel-body">


     <p class="hd-title">CHANGE IMAGE</p>

    <form class="form-group" action="textcourcechange.php" method="POST" enctype="multipart/form-data">
                                             
    <input type="file" name="image" class="form-control"><br>

    <p class="hd-title">CHANGE Head Text</p>

   <input type="text" name="headtext" class="form-control"><br>

    <p class="hd-title">CHANGE Text</p>

   <input type="text" name="text" class="form-control">

    <center><input type="submit" name="change" value="Submit" class=" btn btn-success"> </center>
                         
                
 </form>
 


 <div class="table-agile-info">
 <div class="panel panel-default">
 
    <div class="panel-heading">
     Updated Details
    </div>

    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Image</th>
            <th>Pragraph</th>
            <th data-breakpoints="xs"> Heading</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>


        </tr>
        </thead>
        <tbody>

<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"riteedatabase");

$sno = 1;

$qry = "SELECT * from courcetextchange order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))

{

?>



<tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
<td><img src="courcetextpicfolder/<?php echo $row["image_cource"]; ?>" style='width: 150px;height:150px ;'></td>
            <td><?php echo $row["text_cource"]; ?></td>
            <td><?php echo $row["head_text"]; ?></td>
        

    <td>   edit  </td>
    <td> delete  </td>

</tr>

<?php
}

 ?>  




        </tbody>
        </table>




</div>
</div>
</div>
</div>


</section>
</section>
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