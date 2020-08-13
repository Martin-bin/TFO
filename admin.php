<?php
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>

<style>
    *{
        font-family: arial;

    }
    .n_reporte{
        color: blue;
        background: gainsboro;
    }
    .btn_agregar{
        margin-left: 82%;
        border-color:dodgerblue;
        border-radius: 5px;
        border-style: solid;
        padding: 2px; 
    }
    .btn_cerrar{
        margin-left: 88%;   
    }
    .encabezados{
        background: powderblue;
    }
    .buscar{
        width: 60%;
        border-radius: 5px;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
    <a href="logout.php" class="btn_cerrar">Cerrar sesion</a>
    <center>
    <h4>TRANSPORTES DE PASAJEROS DE 2° CLASE FLECHA DE ORO</h4>
    <h3>"REPORTES"</h3>
    </center>
       <a href="registro_reportes.php" class="btn_agregar">Agregar nuevo</a>
       <br>
       <br>
    <center>
        <table border="3">
            <thead class="thead-dark">
            </thead>
            <tbody>
                <tr>
                    
                    <td class="n_reporte" scope="col"><center><b>N#.REPORTE</center></td>
                    <td class="encabezados"><center><b>FECHA</td>
                    <td class="encabezados"><center><b>CARRO</td>
                    <td class="encabezados"><center><b>ENTRO</td>
                    <td class="encabezados"><center><b>POR EL CARRO</td>
                    <td class="encabezados"><center><b>HORA</td></b>  
                    <td class="encabezados"><center><b>DIAS A PAGAR</td></b>
                    <td class="encabezados"><center><b>PAGA EL DIA</td></b>
                    <td colspan="2" class="encabezados"><center><b>ACCION</td>
                    
                </tr>
            <?php
                include("conexion.php");

                $query="SELECT * FROM reportes";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
                <tr>
                    <td class="n_reporte"><center><b><?php echo $row['id_r']; ?> </td>
                    <td><center><?php echo $row['fecha']; ?> </td>
                    <td><center><?php echo $row['carro']; ?> </td>
                    <td><center><?php echo $row['entro']; ?> </td>
                    <td><center><?php echo $row['carro2']; ?></font> </td>
                    <td><center><?php echo $row['hora']; ?> </td>
                    <td><center><?php echo $row['dias_p']; ?> </td>
                    <td><center><?php echo $row['paga']; ?> </td>
                    <td><center><a href="modificare.php?id_r=<?php echo $row['id_r']; ?>" class="btn btn-primary">modificar</a></td>
                    <td><center><a href="eliminare.php?id_r=<?php echo $row['id_r']; ?>" class="btn btn-danger">eliminar</a></td>

                    <!--
                    <td><a href="#">modificar</a></td> 
                    <td><a href="#">eliminar</a></td> 
                    -->

                </tr>
            <?php
            }
            ?>
            </tbody>    
        </table><br>
        <br>

    <div class="formulario">
    <label for="caja_busqueda">Buscar:</label>
    <input type="text" name="caja_busqueda" id="caja_busqueda"  placeholder="Buscar registro" class="buscar">
    </div>
    <br>

    <div id="datos">

    </center>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>