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

        $queryBuscar = $mysqli->query("SELECT * FROM usuarios WHERE usuarios.username = '$user'");

        echo "<a href='login.php'></a>";
        $rows = $queryBuscar->num_rows;
        while (($fila=mysqli_fetch_array($queryBuscar))){
            $userbd = $fila['username'];
            $passbd = $fila['pass'];
            if($user == $userbd){
                
                if($pass == $passbd){
                    $_SESSION['user'] = $user;
                    $_SESSION['permisos'] = $fila['permisos'];
                    header("Location: home.php");
                } else {
                   echo "  <div class='container'>
            <div class='error-container'>
              <h1>CONTRASEÑA INCORRECTA</h1><br><br>
              <a href='login.html'>Volver a la página principal</a>
            </div>
          </div>";
                }
            } else {
                
            }
        }
       
            echo "  <div class='container'>
            <div class='error-container'>
              <h1>ERROR DE CONSULTA</h1>
              <h3>El usuario no existe</h3>
              <a href='login.html'>Volver a la página principal</a>
            </div>
          </div>";
        
    ?>
</body>
</html>