<?php
	$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"riteedatabase");




if(isset($_GET["delete_id"]))
{

 $id=$_GET["delete_id"];
$rs=mysqli_query($con,"delete from addstudentdata where id='$id'");

if($rs)
{
	header("Location: addedstudentdetail.php");
}
else
{
	echo "Something Wrong";
}


}
?>