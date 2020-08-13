<?php

include("conexion.php");

$id_r=$_REQUEST['id_r'];
$fecha= $_POST['fecha'];
$carro= $_POST['carro'];
$entro= $_POST['entro'];
$carro2= $_POST['carro2']; 
$hora=$_POST['hora'];
$dias_p=$_POST['dias_p'];
$paga=$_POST['paga'];

$query="UPDATE reportes SET fecha='$fecha', carro='$carro', entro='$entro', carro2='$carro2', hora='$hora', dias_p='$dias_p', paga='$paga'  WHERE id_r='$id_r' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: admin.php");
	//echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}
?>