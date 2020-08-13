<?php
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<head>
	<title>T.F.O</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 

<style>
    section{
          margin-top: 270px;
    }
    @media(max-width: 100%){
        section{
           width: 90%;
           margin-top: 50%;
        }
        .btn{
       width: 22%;
     }
    }
    .btn{
       width: 22%;
       height: 6%;
       padding: 5px 5px;
       background: steelblue;
       color: #fff;
    }
        @media(min-width: 100px){
        .btn{
       width: 32%;
     }
    }
</style>


<body> <center>
    <section>
<h2>TRANSPORTES FLECHA DE ORO S.A. de C.V.</h2>
   <center><a href="login.php" class="btn">INGRESAR</a></center>
   </section>

</body>
</html>