<?php
    include_once("conexion.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- titulo de la pestaña-->
    <title>Solinca / Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos-home.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <?php
        include_once("encabezado.php");
    ?>
    <body>
        <div class="fondo-home">
            <!-- <img src="imagenes/fondo-home.jpg" alt="Solinca" style="width: 100%; height: 100%;"> -->
            <div style="width: 100vw;height: 100vh;display: flex;justify-content: center;align-items: center;background: #00000070;"> 
                <label style="font-size:2em; color:#fff; text-align: center; letter-spacing:2px;"> SOLINCA EXCELENCIA Y TECNOLOGÍA <br> de fabricación en repuestos para lineas de envasado</label>
            </div>
        </div>
        <!-- <div class="RI">
         <div style="background: #fff; text-align: center; height:100%;">
             <label style="margin-bottom: 0px;margin-top:0px;color:#202c52;letter-spacing:5px; font-size:30px;">Relaciones Institucionales </label>
           <img src="imagenes/relaciones.jpg" alt="Solinca" style="width: 100%;height: 20vh;">
         </div>
        </div> -->
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>