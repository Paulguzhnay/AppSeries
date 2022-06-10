<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    
 $temp_id=$_POST['idT']; 
 $temp_nombre=$_POST['nombreT'];
 $temp_numero=$_POST['numeroT'];
 $temp_numcapitulo=$_POST['numeroCapT'];
 $series_ser_id=$_POST['idS'];


 $q=mysqli_query($con,"INSERT INTO `temporadas` (`temp_id`,`temp_nombre`,`temp_numero`,`temp_numcapitulo`,`series_ser_id`) VALUES ('$temp_id','$temp_nombre','$temp_numero','$temp_numcapitulo','$series_ser_id')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>