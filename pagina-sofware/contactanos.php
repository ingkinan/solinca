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
    <link rel="stylesheet" href="css/estilos-contact.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
    <?php 
        include_once("encabezado.php");
    ?>
<body>
<!-- <form action="send.php" method="post"> -->
<form action="send.php" method="post">
    <div class="row" style='width:100vw; height:100vh; background: #ccc;'>
        <!-- <div class="col-12" style='width:100%; height:100%;'> -->
             <div class="col-12" style='width:100%; height:100%;display: flex;justify-content: center;align-items: center;'>
                <div class="col-12" style='width: 65%; height: 70%;background: #fff;display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;'>
                    <div class="col-6" style='width: 100%;height: 90px; background: #2a807a;color: #fff;display: flex;letter-spacing: 2px'>
                        <h2 style='font-size: 20px;padding: 10px;'>Contactanos</h2>
                    </div>
                    <br><br>
                    <div class="col-6" style='width: 40%;height: 100%;'>
                        <div style='width: 100%;'>
                            <!-- <label>Nombre: </label> -->
                            <input type="text" name='nombre' placeholder='Nombre' class='input-contact' id="nombre completo"size="30" maxlength="100" required>
                        </div>
                        <br>
                        <div style='width: 100%;'>
                            <!-- <label>Apellido: </label> -->
                            <input type="text" name='apellido' placeholder='Apellido' class='input-contact' id="apellido completo"size="30" maxlength="100" required>
                        </div>
                        <br>
                        <div style='width: 100%;'>
                            <!-- <label>Correo: </label> -->
                            <input type="email" name='correo' placeholder='Correo' class='input-contact' onBlur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" size="25" maxlength="100" required>
                        </div>
                        <br>
                        <div style='width: 100%; display: flex;'>
                            <!-- <label>Mensaje: </label> -->
                            <textarea name="mensaje" class='textArea-contact' onBlur="MM_validateForm('mensaje','','R');return document.MM_returnValue" size="20" maxlength="60" placeholder='Mensaje' cols="30" rows="10" required></textarea>
                        </div>
                        <br>
                        <div style='width: 100%;'>
                            <input type="submit" value="Enviar" class='btn btn-info'>
                            <input type="reset" value='Borrar' class='btn btn-info'>
                            <!-- <button type='buttom' class='btn btn-info'>Enviar</button> -->
                            <!-- <button type='reset' class='btn btn-info'>Resetear</button> -->
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>