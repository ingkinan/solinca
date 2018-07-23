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
    <title>Logistic</title>
    <link rel="icon" href="imagenes/servicio3.png" type="image/x-ico">

      <!-- Estilos -->
  <link rel="stylesheet" href="css/estilos-login.css">

  <!-- Plugin CSS -->
  <link href="css/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">

  
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
<body>
    <?php
  
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $pass2 = $_POST['pass2'];
            $permisos = 2;
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
    
            
    if( $pass2 != $pass){
       
        echo "  <div class='container'>
        <div class='error-container'>
          <h1>Las Contraseñas tienen que Coincidir</h1><br>
          <a href='registrar.php'>Regresar</a>
        </div>
      </div>";

  }else{
    $queryInsertar = $mysqli->query("INSERT INTO usuarios(username, pass, permiso, correo, telefono) VALUES 
    ('$user', '$pass', $permisos, '$correo', '$telefono')");
  
    if($queryInsertar){
               
        echo "  <div class='container'>
        <div class='error-container'>
          <h1>Usuario registrado exitosamente</h1>
          <a href='home.php'>Volver a la página principal</a>
        </div>
      </div>";
    }else{

        die('ERROR: No se puede ejecutar query para insertar datos. '. $mysqli->error);
                    
        echo "<br><br><br><a href='registrar.php'>Regresar</a><br><br>";
    }
    }
           
        // }

    ?>
</body>
</html>