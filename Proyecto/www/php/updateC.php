<?php
include "db.php";
if(isset($_POST['update']))
{
   $cap_id=$_POST['id']; 
   $cap_nombre=$_POST['nombre'];
   $cap_numero=$_POST['numeroC'];
   $cap_fechaest=$_POST['fechaEst'];
   $temporadas_temp_id=$_POST['idTemp'];


$q=mysqli_query($con,"UPDATE `capitulos` SET `cap_nombre`='$cap_nombre',`cap_numero`='$cap_numero',
`cap_fechaest`='$cap_fechaest',`temporadas_temp_id`='$temporadas_temp_id' where `cap_id`='$cap_id'");
if($q)
echo "success";
else
echo "error";
}
?>