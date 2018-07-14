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
    <header class="navbar navbar-default navbar-fixed-top" id="banner">

        <div class="row" style="background:transparent;">
            <div class="container">
                <a class="scrollable" href="home.php">
                    <img src="imagenes/solinca-logo-160.png" alt="Solinca" title="Solinca" />
                     <?php if(isset($_SESSION['user'])){
                            echo "<a class='scrollablepage-scroll logistic-brand-logo CI'>".$_SESSION['user']."|</a>";
                         }
                        ?>
                </a>
                       
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <nav class="collapse navbar-collapse" id="navbar" role="navigation" style="padding-top: 20px; font-size:10px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="scrollable" href="productos.php">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="scrollable" href="consulta.php">Consultas</a>
                        </li>

                        <li class="nav-item">
                            <a class="scrollable" href="cotizaciones.php">Cotizaciones</a>
                        </li>
                 
                        <li class="nav-item">
                            <a class="scrollable" href="contactanos.php">Contactanos</a>
                        </li>
                  
                        <!-- <li class="nav-item">
                            <a class="scrollable" href="login.html">INICIAR SESIÓN</a>
                        </li> -->
                   
                   
                        <li class="nav-item" style="font-size: 10px;">
                        <?php if(isset($_SESSION['user'])){
                      // $_SESSION['user'] = $_POST['user'];
                            echo "
                            <form action='cerrar-sesion.php' method='post'>
                            <a class='page-scroll nav-item-custom '> 
                              <input class='page-scroll input-custom logOut' type='submit' value='LogOut'>
                            </a>
                          </form>
                          ";
                         }else{
                            echo "<a class='navbar-brand page-scroll logistic-brand-logo' href='login.html' style:'height: 58px;'>iniciar sesión</a>";
                         }
                        ?>
                        </li>
              </ul>
                </nav>
            </div>
        </div>
    </header>
    <body>
        <div class="row" style="width: 100vw;height: 100vh;">
            <div class="col-md-12" style="width: 100%;height: 100%;background: #ccc;display: flex;justify-content: center;align-items: center;">
                <div style="height: 100%;width: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                    <div style="width:60%; height:60%;display: flex;justify-content: end;align-items: center;flex-direction: column; background:#fff;">
                        <div style="width: 100%;height: 15%;display: flex;background: #41adce;color: #fff;">
                            <h1 style="font-size: 20px;letter-spacing: 2px;padding-left: 10px;padding-top: 5px;    margin-top: 0px !important;margin-bottom: 0px !important;">CONSULTAS</h1>
                        </div>
                        <div style="width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                            <input type="text" style="width: 50%;height: 38px;">
                            <label style="font-size: 15px;letter-spacing: 2px;"> Imprimir Reporte </label>
                            <button type="buttom" class="btn btn-info" style="width: 140px;height: 38px;font-size: 12px;letter-spacing: 2px;">Exportar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>