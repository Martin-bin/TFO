<?php
    include_once 'database.php';
    
    session_start();
    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 
        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;
            case 2:
            header('location: colab.php');
            break;
            default:
        }
    }
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);
        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;
                case 2:
                header('location: colab.php');
                break;
                default:
            }
        }else{
            // no existe el usuario
            echo '<script language="javascript"> alert("Nombre de usuario o contraseña incorrecto");</script>';
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

    <style>
    body{
       
    background-image: url(img/fibra.jpeg);
    background-size: 100vw 100vh;  
    background-attachment: fixed;
    background-repeat: no-repeat;
    }
    form{
         width: 500px;
         background: rgba(0,0,0,0.4);
         padding: 10px;
         box-sizing: border-box;
         border-radius: 7px;
         font-family: arial;
         margin-top: 10%;
    }
    @media(max-width: 900px){
        form{
            width: 95%;
        }

    }
    input{
        width: 100%; 
        height: 20%;
        margin-bottom: 20px;
        padding: 14px;
        box-sizing: border-box;
        font-size: 17px;
        border-radius: 4px;
        border: none;
    }
    .btn{
        width: 40%;
    }
    .btn:hover{
        cursor: pointer;
        background: darkcyan;
    }
    h3{
        color: gold;
    }
    h4{
        color: red;
    }

</style>

<body>

    <center><form action="#" method="POST">
        <h3 class="acceso"><center><b>Acceso
        <h4>TRANSPORTES FLECHA DE ORO</center>
        <input type="text" name="username" placeholder="Usuario">
        <br><input type="password" name="password" placeholder="Contraseña">
        <br>
        <center><input type="submit" value="Entrar" class="btn"></center>
    </form>
</center>
</body>
</html>