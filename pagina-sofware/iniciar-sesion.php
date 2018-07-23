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
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $queryBuscar = $mysqli->query("SELECT * FROM usuarios WHERE usuarios.username = '$user'");

        echo "<a href='login.php'></a>";
        $rows = $queryBuscar->num_rows;
        while (($fila=mysqli_fetch_array($queryBuscar))){
            $userbd = $fila['username'];
            $passbd = $fila['pass'];
            $id = $fila['id_usuario'];
            if($user === $userbd){
                
                if($pass == $passbd){
                    $_SESSION['user'] = $user;
                    $_SESSION['permisos'] = $fila['permiso'];
                    $_SESSION['id'] = $id;
                    header("Location: home.php");
                } else {
                   echo "  <div class='container'>
            <div class='error-container'>
              <h1>Contraseña Incorrecta  <br></h1><br><br>
              <a href='login.html'>Volver a la página principal</a>
            </div>
          </div>";
                }
            } else{
              echo "  <div class='container'>
              <div class='error-container'>
                <h1><br> Usuario Invalido</h1><br><br>
                <a href='login.html'>Volver a la página principal</a>
              </div>
            </div>";
            }
          }
        //     else {
                
        //     }
        // }
       
        echo "  <div class='container'>
        <div class='error-container'>
          <h1><br> Usuario Invalido</h1><br><br>
          <a href='login.html'>Volver a la página principal</a>
        </div>
      </div>";
        
    ?>
</body>
</html>