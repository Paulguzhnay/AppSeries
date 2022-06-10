<?php
 include "db.php";
 if(isset($_POST['update']))
 {
   $ser_id=$_POST['id'];   
   $ser_nombre=$_POST['nombre'];
   $ser_genero=$_POST['genero'];
   $ser_paisproduccion=$_POST['paisP'];
   $ser_year=$_POST['year'];


 $q=mysqli_query($con,"UPDATE `series` SET 
  `ser_nombre`='$ser_nombre',`ser_genero`='$ser_genero', 
  `ser_paisproduccion`='$ser_paisproduccion',`ser_year`='$ser_year' 
  where `ser_id`='$ser_id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>