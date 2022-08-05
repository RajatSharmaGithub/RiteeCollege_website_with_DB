<!DOCTYPE html>
<html>
<head>

	<title>Our Cources</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>


   <div class="row" >
    <div class="col-sm-12">
     <h1 align="center"> COURCES </h1>
  

<?php

$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"riteedatabase");

$rs=mysqli_query($con,"SELECT * FROM courcetextchange");
while($row=mysqli_fetch_array($rs))

{

$img=$row['image_cource'];
$hdtxt=$row['head_text'];
$text=$row['text_cource'];

?>

  <div class="card col-sm-4">
    <img class="card-img-top" src="web/courcetextpicfolder/<?php echo $img ?>" alt="Card image" style="width:300px;height: 300px;">

    <div class="card-body">
      <h4 class="card-title"> <?php echo $hdtxt ?></h4>
      <p class="card-text"><?php echo $text ?></p>
      </div>
  </div>
  
<?php 

}

?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



</body>
</html>