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
      width: 40%;
      height: 250px;
      background-color: rgb(22, 26, 64);
      display: flex;
      justify-content: center;
      border-radius: 5px;
      flex-direction: column;
    }

    .error-container h1{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      font-family: inherit;
      margin: 0;
    }
    .error-container h3{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      font-family: inherit;
    }

    .error-container a{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      font-family: inherit;
    }
</style>
</head>
<body>
    <?php
        // if(!(isset($_POST['registrar']))){
        //     echo "
        //     <center>
        //         <fieldset>
        //             <legend>Registro de usuario: </legend>
        //             <form action='' method='post'>
        //                 <b>Nombre de Usuario: </b><input type='text' name='username' placeholder='Nombre de usuario'><br><br>
        //                 <b>Contraseña: </b><input type='password' name='password' placeholder='Contraseña'><br><br>";
        //                     if(isset($_SESSION['user'])){
        //                         if($_SESSION['permisos'] == 1){
        //                             echo "<b>Permisos: </b><select name='permisos'>
        //                                     <option value=0>Usuario</option>
        //                                     <option value=1>Administrador</option>
        //                                 </select>";
        //                         } else {
        //                             echo "<input type='hidden' name='permisos' value=0>";
        //                         }
        //                     }
        //                     echo "
        //                 <input type='submit' value='Guardar' name='registrar' id='registrar'>
        //             </form>
        //         </fieldset>
        //     </center>";
        // } else {
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