<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 
 $ser_id=$_POST['id'];   
 $ser_nombre=$_POST['title'];
 $ser_genero=$_POST['genero'];
 $ser_paisproduccion=$_POST['paisproduccion'];
 $ser_year=$_POST['year'];


 $q=mysqli_query($con,"INSERT INTO `series` (`ser_id`,`ser_nombre`,`ser_genero`,`ser_paisproduccion`,`ser_year`) VALUES ('$ser_id','$ser_nombre','$ser_genero','$ser_paisproduccion','$ser_year')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>