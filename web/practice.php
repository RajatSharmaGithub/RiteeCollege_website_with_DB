
<?php


$name="";
$cor="";
$yr="";
$mob="";
$img="";



$hostname="localhost";
$user="root";
$pass="";

$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"riteedatabase");

if (isset($_POST["search"]))

 {
$nm=$_POST["name"];
$rs=mysqli_query($con, "select * from addstudentdata where name like '%".$_GET['name']."%'");

while ($row =mysqli_fetch_array($rs))
 {
	$name=$row["name"];
	$cor=$row["cource"];
	$yr=$row["year"];
	$mob=$row["mobile"];
	$img=$row["image"];

}
}



?>

<html>
<head>
	<title>Edit DATA</title> 


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<input type="text" name="nm" placeholder="search here">
	<input type="submit" name="search" value="search" class="btn btn-success">
	<div style="width: 500px;text-align: center;font-size: large;">
	<form class="form-group" action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?> ">

		Name <input type="text" name="name" value="<?php echo $name ?> " class="form-control"> <br> <br>
		Cource <input type="text" name="cource" value="<?php echo $cor ?> " class="form-control"> <br> <br>
		Year/Sem <input type="text" name="year" value="<?php echo $yr ?> "class="form-control"> <br> <br>
		Mobile <input type="text" name="mobile" value="<?php echo $mob ?> "class="form-control" > <br> <br>
		Image <input type="file" name="image" value="<?php echo $img ?> "class="form-control "> <br> <br>

		

		

	</form>
</div>

</body>

</html>