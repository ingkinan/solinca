<?php
    include_once("conexion.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- el titulo a la pestaña -->
    <title>Solinca / Login </title>
    <link rel="stylesheet" href="css/estilos-login.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">sss -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
    <div>
        <br>
        <div>
            <center>
                <div>
                    <fieldset>
                        <!-- <p>Iniciar Sesión</p> -->
                        <form action="registro.php" method="post" style=" display: flex !important; text-align: center;
                        justify-content: center; flex-direction:column;">
                            <div class="logo-login">
                                <img src="imagenes/solinca-logo-160.png" alt="">
                            </div>
                            <div class="row input-login" style: "display:flex !important;text-align: center;justify-content: center;">
                                <img class="border ic" src="imagenes/user.png" style="width: 28px;border: 1px solid;
                                height: 28px; border-radius: 6px 0px 0px 6px;">
                                <input type="text" name="user" placeholder="&nbsp;&nbsp;Usuario" style="width: 50%;height: 38px;border-radius: 0px 6px 6px 0px;
                                border: none;font-size: 12px;letter-spacing: 2px;" required>

                            </div>
                            <br>
                            <div class="row input-login" style: "display: flex !important;text-align: center;justify-content: center;">
                                <img class="border ic" src="imagenes/cont.png" style="width: 28px;border: 1px solid;
                                height: 28px; border-radius: 6px 0px 0px 6px;">
                                <input type="password" name="pass" placeholder="&nbsp;&nbsp;Contraseña" style="width: 50%;height: 38px;border-radius:0px 6px 6px 0px;
                                border: none;font-size: 12px;letter-spacing: 2px;" required>
                            </div>
                            <br>
                            <div class="row input-login" style: "display: flex !important;text-align: center;justify-content: center;">
                                    <img class="border ic" src="imagenes/cont.png" style="width: 28px;border: 1px solid;
                                    height: 28px; border-radius: 6px 0px 0px 6px;">
                                    <input type="password" name="pass2" placeholder="&nbsp;&nbsp;Repetir Contraseña" style="width: 50%;height: 38px;border-radius:0px 6px 6px 0px;
                                    border: none;font-size: 12px;letter-spacing: 2px;" required>
                                </div>
                                <br>
                                <div class="row input-login" style: "display: flex !important;text-align: center;justify-content: center;">
                                        <img class="border ic" src="imagenes/cont.png" style="width: 28px;border: 1px solid;
                                        height: 28px; border-radius: 6px 0px 0px 6px;">
                                        <input type="text" name="correo" placeholder="&nbsp;&nbsp;Correo" style="width: 50%;height: 38px;border-radius:0px 6px 6px 0px;
                                        border: none;font-size: 12px;letter-spacing: 2px;" required>
                                    </div>
                                    <br>
                                    <div class="row input-login" style: "display: flex !important;text-align: center;justify-content: center;">
                                            <img class="border ic" src="imagenes/cont.png" style="width: 28px;border: 1px solid;
                                            height: 28px; border-radius: 6px 0px 0px 6px;">
                                            <input type="number" name="telefono" placeholder="&nbsp;&nbsp;Numero de Telefono" style="width: 50%;height: 38px;border-radius:0px 6px 6px 0px;
                                            border: none;font-size: 12px;letter-spacing: 2px;" required>
                                        </div>
                                        <br>
                                        <!-- <br>

                                        <b>Tipo de Usuario: </b> -->
                        <!-- <input type="radio" name="permisos" value="1">Administrador
                        <input type="radio" name="permisos" value="2">Normal
                        <span id='errorSexo' class='error'>Seleccion su genero</span> -->
                        
                            <strong>
                                <input type="submit" value="Registrar" style="width: 150px; height:38px" class="btn btn botoniniciar">
                            </strong>
                            <br>
                            <br>
                            <!-- <center><a class="reguistro" href="#"style="width: 300px; height:40px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Registrarse&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></center> -->
                            <br>
                        </form>
                        <div style='width:100%; height:auto;'>
                            <button type='buttom' class="botoniniciar" onclick="redirect()" style='width:60%; height:38px;'>Regresar</button>
                        </div>
                    </fieldset>
                </div>
            </center>
            <!-- <div style="display: flex;justify-content: center;align-items: center;">
                <button type="button" class=" botonregresar" style="width: 100px;height: 30px;outline: 0px;" ><i class="fa fa-arrow-left"></i></button>
            </div> -->

            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- <script src="js/validacion-login.js"></script> -->
            <script>
                function redirect() {
                    window.location.replace("home.php");
                }
            </script>
</body>

</html>