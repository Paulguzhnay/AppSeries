<?php
 include "db.php";
 if(isset($_POST['update']))
 {
    $temp_id=$_POST['id']; 
    $temp_nombre=$_POST['nombre'];
    $temp_numero=$_POST['numeroT'];
    $temp_numcapitulo=$_POST['numeroC'];
    $series_ser_id=$_POST['idSerie'];


 $q=mysqli_query($con,"UPDATE `temporadas` SET `temp_nombre`='$temp_nombre',
 `temp_numero`='$temp_numero',
 `temp_numcapitulo`='$temp_numcapitulo',
 `series_ser_id`='$series_ser_id' where `temp_id`='$temp_id'");

 if($q)
    echo "success";
 else
    echo "error";
 }
 ?>