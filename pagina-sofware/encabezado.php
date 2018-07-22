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
                                <!-- <li class="nav-item">
                                    <a class="scrollable" href="productos.php">Productos</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="scrollable" href="consulta.php">Consultas</a>
                                </li> -->
        
                                <!-- <li class="nav-item">
                                    <a class="scrollable" href="cotizaciones.php">Cotizaciones</a>
                                </li> -->
                         
                                <!-- <li class="nav-item">
                                    <a class="scrollable" href="contactanos.php">Contactanos</a>
                                </li> -->
                          
                                <?php 
                                // echo "HOLA";
                                if(isset($_SESSION['user']) && (isset($_SESSION['permisos'])) ){

                                    if($_SESSION['permisos'] == 1){
                                        echo "
                                        <li class='nav-item'>
                                          <a class='scrollable' href='Almacen.php'>Almacen</a>
                                        </li>

                                        <li class='nav-item'>
                                          <a class='scrollable' href='cotizaciones.php'>Cotizaciones</a>
                                        </li>

                                        <li class='nav-item'>
                                        <a class='scrollable' href='restablecer-pass.html'>Cambiar Contraseña</a>
                                      </li>

                                        <li class='nav-item'>
                                          <a class='scrollable' href='registrar.php'>Registrar</a>
                                        </li>
                                      ";
                                    }else{
                                        echo "
                                        <li class='nav-item'>
                                          <a class='scrollable' href='productos.php'>Productos</a>
                                        </li>
                                        

                                        <li class='nav-item'>
                                          <a class='scrollable' href='cotizaciones.php'>Cotizaciones</a>
                                        </li>
                                        <li class='nav-item'>
                                        <a class='scrollable' href='contactanos.php'>Contactanos</a>
                                    </li>

                                      ";
                                    }
                                    
                                 }else{
                                    // echo "<a class='navbar-brand page-scroll logistic-brand-logo' href='login.html' style:'height: 58px;'>iniciar sesión</a>";
                                 }
                                ?>
                           
                           <!-- <li class='nav-item'>
                                    <a class='scrollable' href='contactanos.php'>Contactanos</a>
                                </li> -->
                           
                                <li class="nav-item" style="font-size: 10px;">
                                <?php if(isset($_SESSION['user'])){
                              // $_SESSION['user'] = $_POST['user'];
                                    echo "
                                    

                                    <form action='cerrar-sesion.php' method='post'>
                                    <a class='page-scroll nav-item-custom '> 
                                      <input class='page-scroll input-custom logOut' type='submit' value='Cerrar Sesion'>
                                    </a>
                                  </form>
                                  ";
                                 }else{
                                    echo "
                                    <li class='nav-item'>
                                    <a class='scrollable' href='contactanos.php'>Contactanos</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='navbar-brand page-scroll logistic-brand-logo' href='login.html' style:'height: 58px;'>Iniciar Sesión</a>
                                    </li>";
                                  }
                                ?>
                                </li>
                      </ul>
                        </nav>
                    </div>
                </div>
            </header>
</body>
</html>