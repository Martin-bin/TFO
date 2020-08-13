<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR</title>
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
    .btn_cerrar{
        position: absolute;
        border-color:dodgerblue;
        border-radius: 5px;
        border-style: solid;
        padding: 2px; 
        margin-left: 75%;
    }
    .btn_cerrar:hover{
        text-decoration: none;
        background: steelblue;
    }

</style>

<body>

    <center>
    <h4>TRANSPORTES DE PASAJEROS DE 2° CLASE FLECHA DE ORO</h4></center>
    <center><h2>"REPORTE"</h2>
    </center>

<form action="guardar_admin.php" method="post">
	 <b> FECHA:</b> 
        <input type="date" id="fecha" name="fecha" class="form-control" placeholder="FECHA"><br>
<b>EL CARRO No.#</b>
        <input type="text" id="carro" name="carro" class="form-control" placeholder="EL CARRO No.#"><br>
<b>ENTRO A:</b>
        <input type="text" id="entro" name="entro" class="form-control" placeholder="ENTRO A"><br>
<b>POR EL CARRO No.#</b>
    <input type="text" id="carro2" name="carro2" class="form-control" placeholder="POR EL CARRO No.#"><br>
<b>A LAS:</b>
    <input type="time" id="hora" name="hora" class="form-control" placeholder="A LAS"><br>
<b>DIAS A PAGAR:</b>
    <input type="text" id="dias_p" name="dias_p" class="form-control" placeholder="DIAS A PAGAR"><br>
<b>PAGA EL DIA:</b>
    <input type="text" id="paga" name="paga" class="form-control" placeholder="PAGA EL DIA"><br>
	<input type="submit" value="Agregar" class="btn btn-primary">
</form>
<br><br> 

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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