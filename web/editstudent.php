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

if (isset($_GET["id"]))

{

$id=$_GET["id"];
$rs=mysqli_query($con, "SELECT * from addstudentdata where id=$id");

while ($row =mysqli_fetch_array($rs))

{

	$name=$row["name"];
	$cor=$row["cource"];
	$yr=$row["year"];
	$mob=$row["mobile"];
	$img=$row["image"];

}
}

if (isset($_POST['edit']))

 {

 	$id=$_POST["id"];
	$name=$_POST["name"];
	$cor=$_POST["cource"];
	$yr=$_POST["year"];
	$mob=$_POST["mobile"];


	 $imagename=$_FILES['image']['name'];
   $tempname=$_FILES['image']['tmp_name'];

            move_uploaded_file($tempname,"img/$imagename");



$result=mysqli_query($con,"update addstudentdata set name ='$name' , cource='$cor', year='$yr',mobile='$mob' , image='$imagename' where id='$id'");

 if($result)
 {

header("location: addedstudentdetail.php");
 }
else 
{
	echo "Something wrong";
}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit DATA</title> 


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<center><body>

	<div style="width: 500px;text-align: center;font-size: large;">

	<form class="form-group" action="editstudent.php" method="POST" enctype="multipart/form-data">

		

<input type="hidden" name="id" value="<?php echo $id; ?> ">

Name <input type="text" name="name" value="<?php echo $name ?> " class="form-control"> <br><br>
Cource <input type="text" name="cource" value="<?php echo $cor ?> "class="form-control"> <br> <br>
Year/Sem <input type="text" name="year" value="<?php echo $yr ?> "class="form-control"> <br><br>
Mobile <input type="text" name="mobile" value="<?php echo $mob ?> "class="form-control" > <br><br>
Image <input type="file" name="image" value="<?php echo $img ?> "class="form-control "> <br> <br>
<input type="hidden" name="image1" value="<?php echo $img ?> "class="form-control "> <br> <br>
	<input type="submit" name="edit" value="Update" class="btn btn-success">

		

</form>
</div>

</body>
</center>
</html>