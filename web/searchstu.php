<?php

include('sidebar.php');
include('header.php');

?>

<!DOCTYPE html>
<head>
<title>Search Student</title>

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
                 <section class="wrapper">
                 <div class="table-agile-info">
                 <div class="panel panel-default">
    <div class="panel-heading">
     Search STUDENT
    </div>

                  <div class="row">
                  <div class="col-md-12">
                  <div class="col-md-4">

<form action="" method="POST" class="form-group " enctype="multipart/form-data" style="width:400px;">
      

<input type="text" name="textsearch" class="form-control" required="">
</div>
                  <div class="col-md-4">

<input type="submit" value="search here" name="search" class="btn btn-primary">
</div>


     </form>
     </div>
     </div>

 <table class="table table-borderded">
          <thead>
          <tr>
            <th>ID</th>
            <th> NAME</th>
            <th> Cource</th>
            <th> Year</th>
            <th> Mobile</th>
                        <th> image</th>

           
          
          </tr>
          </thead>
          <tbody>

<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"riteedatabase");


if(isset($_POST['search']))

{

  $sr=$_POST['textsearch'];

  $ress=mysqli_query($con,"SELECT * FROM addstudentdata WHERE CONCAT(name,year) LIKE '%$sr%'");

if (mysqli_num_rows($ress)>0) 
{
      while($row=mysqli_fetch_array($ress))
      {
        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td> <?php echo $row['cource'];?></td>
            <td><?php echo $row['year'];?></td>
            <td> <?php echo $row['mobile'];?></td>

      <td><img src="img/<?php echo $row["image"]; ?>" style='width: 150px;height:100px ;'></td>


      </tr>

<?php

}

}
    else
    {
      echo "No Record Found";
    }
    
}
      
?>
      </tbody>
      </table>
  </div>
  </div>
  </div>
</section>

 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved</p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
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