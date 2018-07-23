<?php
    include_once("conexion.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solinca</title>
    <link rel="icon" href="imagenes/servicio3.png" type="image/x-ico">

<style>
    body{
      margin: 0;
      background-color: #b5d1d4;
    }

   .container{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      width: 100vw;
    }

    .error-container{
      min-width: 300px;
      width: 50%;
      height: 360px;
      background-color: rgba(0, 0, 0, 0.47);
      display: flex;
      justify-content: center;
      border-radius: 5px;
      flex-direction: column;
      letter-spacing: 2px;
      font-size: 15px;
      padding: 5px;
      outline: 0px;
    }

    .error-container h1{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      font-family: inherit;
      margin: 0;
    }
    .error-container h3{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      font-family: inherit;
    }

    .error-container a{
      width: 100%;
      height: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      font-family: inherit;
      text-decoration: none;
    } 
    .error-container a:hover{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #ccc;
      font-family: inherit;
      text-decoration: none;
    } 
</style>
</head>
<body style='width:100vw; height:100vh;background: linear-gradient(to top, #000000,#31d4c7);'>
   
<?php 
error_reporting(0); 

// $header = 'From: ' . $correo . ", de la poblacion ".$mensaje."\r\n"; 
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
// $header .= "Mime-Version: 1.0 \r\n"; 
// $header .= "Content-Type: text/plain"; 

// $mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . " \r\n"; 
// $mensaje .= "Su e-mail es: " . $correo . " \r\n";  
// $mensaje .="Mensaje de solución".$mensaje . " \r\n"; 
// $mensaje .= "Enviado el " . date('d/m/Y', time()); 

// $para = 'stephen.15@hotmail.com'; 
// $asunto = 'Solinca'; 

// mail($para, $asunto, utf8_decode($mensaje), $header); 

// echo 'mensaje enviado correctamente';

$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$correo = $_POST['correo']; 
$mensaje = $_POST['mensaje']; 

$mail='danielboscan@gmail.com'; 

// $email = $_POST['email']; 
// $msg = $_POST['msg']; 

// $thank="home.php"; 

$message = " 
nombre:".$nombre." 
apellido:".$apellido." 
email:".$correo." 
msg:".$mensaje.""; 
   
mail('danielboscan@gmail.com', 'Mi título', $message);
//   mail($mail,"consulta",$message); 

        echo "  <div class='container'>
        <div class='error-container'>
          <h1><br> El Mensaje a Sido Enviado Correctamente</h1><br><br>
          <a href='home.php.'>Volver a la página principal</a>
        </div>
      </div>";
        
    ?>
</body>
</html>