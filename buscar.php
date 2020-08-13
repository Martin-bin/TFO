<style>
    .n_reporte{
        color: blue;
    }
        .encabezados{
        background: powderblue;
    }
</style>


<?php
	$servername = "45.87.80.53";
    $username = "u961479477_mtn_tfo_316";
  	$password = "Taco.123";
  	$dbname = "u961479477_tfo_bd_316";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM reportes WHERE fecha NOT LIKE '' ORDER By id_r LIMIT 7";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM reportes WHERE id_r LIKE '%$q%' OR fecha LIKE '%$q%' OR carro LIKE '%$q%' OR entro LIKE '%$q%' OR carro2 LIKE '%$q%' OR hora LIKE '%$q%' OR dias_p LIKE '%$q%' OR paga LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td class='n_reporte'><b>N#.REPORTE</td>
    					<td class='encabezados'><b>FECHA</td>
    					<td class='encabezados'><b>CARRO</td>
    					<td class='encabezados'><b>ENTRO</td>
    					<td class='encabezados'><b>POR EL CARRO</td>
                        <td class='encabezados'><b>HORA</td>
                        <td class='encabezados'><b>DIAS A PAGAR</td>
                        <td class='encabezados'><b>PAGA EL DIA</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td class='n_reporte'><center><b>".$fila['id_r']."</td>
    					<td><center>".$fila['fecha']."</td>
    					<td><center>".$fila['carro']."</td>
    					<td><center>".$fila['entro']."</td>
    					<td><center>".$fila['carro2']."</td>
                        <td><center>".$fila['hora']."</td>
                        <td><center>".$fila['dias_p']."</td>
                        <td><center>".$fila['paga']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();


?>