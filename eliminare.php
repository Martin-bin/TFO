<?php

include("conexion.php");

$id_r=$_REQUEST['id_r'];


$query="DELETE FROM reportes WHERE id_r='$id_r' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: admin.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
?>