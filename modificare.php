<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    form{
        width: 85%;
        margin: auto;
    }
    h4{
    	color:red;
    }
</style>        
        <center>
    <h4>TRANSPORTES DE PASAJEROS DE 2° CLASE FLECHA DE ORO</h4>
    <h2>"EDITAR REPORTES"</h2>
    </center>

			<?php

				$id_r=$_REQUEST['id_r'];

				include("conexion.php");
				
				$query="SELECT * FROM reportes WHERE id_r='$id_r'";"";
				$resultado= $conexion->query($query);
				$row=$resultado->fetch_assoc();
			?>

		<form action="modificar_procesoe.php?id_r=<?php echo $row['id_r']; ?>" method="POST">

			<b> FECHA:</b>
	<input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" class="form-control"><br>
		<b>EL CARRO No.#</b>
	<input type="text" id="carro" name="carro" value="<?php echo $row['carro']; ?>" class="form-control"><br>
		<b>ENTRO A:</b>
	<input type="text" id="entro" name="entro" value="<?php echo $row['entro']; ?>" class="form-control"><br>
        <b>POR EL CARRO No.#</b>
    <input type="text" id="carro2" name="carro2" value="<?php echo $row['carro2']; ?>" class="form-control"><br>
        <b>A LAS:</b>
    <input type="time" id="hora" name="hora" value="<?php echo $row['hora']; ?>" class="form-control"><br>
        <b>DIAS A PAGAR:</b>
    <input type="text" id="dias_p" name="dias_p" value="<?php echo $row['dias_p']; ?>" class="form-control"><br>
        <b>PAGA EL DIA:</b>
    <input type="text" id="paga" name="paga" value="<?php echo $row['paga']; ?>" class="form-control"><br>

			<input type="submit" value="GUARDAR" class="btn btn-primary">
		</form>
            <br><br>
</body>
</html>  

<script>

///////////////////////////////////////////////////////////////////////////////////////////


       const $car = document.querySelector("#carro"); //input
       const valor= /[0-9\/]+/; //"[0-9\/]+"                //patron

       $car.addEventListener("keydown", event => { 
        if (valor.test(event.key)) {
        }else{
          if (event.keyCode==8) {
            //console.log("backspace");
          }else{
            event.preventDefault();
            //var tcla = event.keyCode;
            //console.log(tlca);
          }
        }
       });
///////////////////////////////////////////////////////////////////////////////////////////


       const $ent = document.querySelector("#entro"); //input
       const valor2= /[a-zA-Z]+/; //"[0-9\/]+"                //patron

       $ent.addEventListener("keydown", event => { 
        if (valor2.test(event.key)) {
        }else{
          if (event.keyCode==8) {
            //console.log("backspace");
          }else{
            event.preventDefault();
            //var tcla = event.keyCode;
            //console.log(tlca);
          }
        }
       });

       ///////////////////////////////////////////////////////////////////////////////////////////


       const $car2 = document.querySelector("#carro2"); //input
       const valor3= /[0-9\/]+/; //"[0-9\/]+"                //patron

       $car2.addEventListener("keydown", event => { 
        if (valor3.test(event.key)) {
        }else{
          if (event.keyCode==8) {
            //console.log("backspace");
          }else{
            event.preventDefault();
            //var tcla = event.keyCode;
            //console.log(tlca);
          }
        }
       });
</script>