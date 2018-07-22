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
   
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $correo = $_POST['correo'];
    
$querybusqueda = $mysqli->query("SELECT * from usuarios WHERE usuarios.username = '$user' AND usuarios.correo = '$correo'");
$cantidad = $querybusqueda->num_rows;

while (($fila=mysqli_fetch_array($querybusqueda))){
  // $username = $fila['username'];
  // $correo = $fila['correo'];
  $id = $fila['id_usuario'];
  echo "
  <tr>
      <td>$id</td>";
}


if($cantidad === 0){
  echo "  <div class='container'>
  <div class='error-container'>
    <h1>El Usuario o El Correo no Existe</h1>
    <a href='restablecer-pass.html'>Volver a la página principal</a>
  </div>
</div>";
}else{
  $queryUpdate = $mysqli->query("UPDATE `usuarios` SET `pass` = '$pass' WHERE `usuarios`.`id_usuario` = $id");
  echo "  <div class='container'>
  <div class='error-container'>
    <h1>La Contraseña se a Modificado Exitosamente</h1>
    <a href='home.php'>Volver a la página principal</a>
  </div>
</div>";
}

    ?>
</body>
</html>