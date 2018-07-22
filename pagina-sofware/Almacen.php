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
    <link rel="stylesheet" href="css/estilos-almacen.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <?php 
        include_once("encabezado.php");
    ?>
   
    <body>
    <form action="registrar_productos.php" method="post" style=" display: flex !important; text-align: center;
                        justify-content: center; flex-direction:column;">
        <div class="row" style="width: 100vw;height: 100vh;">
            <div class="col-md-12" style="width: 100%;height: 100%;background: #ccc;display: flex;justify-content: center;align-items: center;">
                <div style="height: 100%;width: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                    <div style="width:70%; height:65%;display: flex;justify-content: end;align-items: center;flex-direction: column; background:#fff;">
                        <div style="width: 100%;height: 15%;display: flex;background: #2a807a;color: #fff;">
                            <h1 style="font-size: 20px;letter-spacing: 2px;padding-left: 10px;padding: 15px;margin-top: 0px !important;margin-bottom: 0px !important;">Alamacén</h1>
                        </div>
                        <div style="width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                            <div style="width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                                <h2 style='margin-top: 0px;'>Registrar Producto</h2>
                            <br>
                                <select name="TipoProducto" id="" style='width: 25%;height: 38px;outline: 0px;border-radius: 5px;border: 1px solid #ccc;' required>
                                    <option value="">Productos</option>
                                    <option value="lavadoras">Lavadoras</option>
                                    <option value="Etiquetadoras">Etiquetadoras</option>
                                    <option value="Llenadoras">Llenadoras</option>
                                    <option value="Pasteurizadores">Pasteurizadores</option>
                                    <option value="AccesoriosLineas">Accesorios de líneas</option>
                                    <option value="ViasTransporte">Vías de transporte</option>
                                    <option value="EmbaladoresDesembaladoras">Embaladores y Desembaladoras</option>
                                </select>
                            <br>
                                <select name="Almacen" id="" style='width: 25%;height: 38px;outline: 0px;border-radius: 5px;border: 1px solid #ccc;' required>
                                    <option value="">Almacen</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            <br>
                                <input type="number" name="Costo" placeholder='Precio del Producto' style="width: 25%;height: 38px; padding-left: 5px;outline: 0px;border-radius: 5px;border: 1px solid #ccc;" required>
                            <br>
                                  <input type="number" name="Cantidad" placeholder='Cantidad a Registrar' style="width: 25%;height: 38px; padding-left: 5px;outline: 0px;border-radius: 5px;border: 1px solid #ccc;" required>
                            <br>
                                <button type="submit" class="btn btn-info" style="width: 25%;height: 38px;font-size: 12px;letter-spacing: 2px;" disable="Almacen != 0">Registrar</button>
                            </div>
                            <!-- <label style="font-size: 15px;letter-spacing: 2px;"> Imprimir Reporte </label> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>