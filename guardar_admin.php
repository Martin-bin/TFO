<?php

include("conexion.php");

//$nombre= $_POST['nombre'];     //Formulario 
//$edad= $_POST['edad'];

$fecha= $_POST['fecha'];
$carro= $_POST['carro'];
$entro= $_POST['entro'];
$carro2= $_POST['carro2']; //FORMULARIO 
$hora=$_POST['hora'];
$dias_p=$_POST['dias_p'];
$paga=$_POST['paga'];

$query="INSERT INTO reportes(fecha, carro, entro, carro2, hora, dias_p, paga) 
             VALUES('$fecha', '$carro','$entro','$carro2','$hora','$dias_p','$paga')"; //INSERCCION DE DATOS 
$resultado= $conexion->query($query);


if($resultado){
	header("Location: admin.php");
	//echo "Nuevo registro agragado";
}
else{
	echo "error algo hizo mal";
}
?>