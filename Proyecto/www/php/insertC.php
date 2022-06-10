<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    
 $cap_id=$_POST['idC']; 
 $cap_nombre=$_POST['nombreC'];
 $cap_numero=$_POST['numeroC'];
 $cap_fechaest=$_POST['fechaC'];
 $temporadas_temp_id=$_POST['idT'];



 $q=mysqli_query($con,"INSERT INTO `capitulos` (`cap_id`,`cap_nombre`,`cap_numero`,`cap_fechaest`,`temporadas_temp_id`)  VALUES ('$cap_id','$cap_nombre','$cap_numero','$cap_fechaest','$temporadas_temp_id')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>