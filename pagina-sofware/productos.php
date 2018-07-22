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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/produc.css"> -->
    <link rel="stylesheet" href="css/font-awesome.css">
    	<!-- JQuery -->
	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <?php 
        include_once("encabezado.php");
    ?>
    <body>
        <!-- <div class="product">
            <div style="width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">  
                <div class="img-product">
                    <div>
                        <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 20px;">PRODUCTOS</h1> 
                        <br>
                        <label>Soluciones adaptadas para cualquier linea de <br>
                        producción Compruebe nuestro gran stock de repuestos</label>
                    </div>
                    <img src="imagenes/LAVADORAS.jpg" alt="Solinca" style="">
                    <img src="imagenes/ETIQUETADORAS.jpg" alt="Solinca" style="padding-left:10px;">
                    <img src="imagenes/LLENADORAS.jpg" alt="Solinca" style="padding-left:10px;">
                    <img src="imagenes/PASTEURIZADORAS.jpg" alt="Solinca" style="padding-left:10px;">
                    <img src="imagenes/Portada-Accesorios-de-Líneas.jpg" alt="Solinca" style="padding-top:20px;">
                    <img src="imagenes/TRANSPORTE.jpg" alt="Solinca" style="padding-top:20px;padding-left:10px;">
                    <img src="imagenes/Embaladores.jpg" alt="Solinca" style="padding-top:20px; padding-left:10px;">
                </div>
            </div>
       </div> -->
       <div class="row product">
           <div class="col-12" style="width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
               <div class="col img-product">
               <div>
                    <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 20px;">PRODUCTOS</h1> 
                    <br>
                    <label>Soluciones adaptadas para cualquier linea de <br>
                    producción Compruebe nuestro gran stock de repuestos</label>
                    </div>
                   <a class="nav-item nav-link font-weight-bold" href="#lavadoras"  data-toggle="modal" > 
                       <img src="imagenes/LAVADORAS.jpg" alt="Solinca" style="">
                   </a> 
                    <img src="imagenes/ETIQUETADORAS.jpg" alt="Solinca"  id='etiqueta' data-toggle="modal" style="padding-left:10px;">
                    <img src="imagenes/LLENADORAS.jpg" alt="Solinca" id='llenadoras' data-toggle="modal" style="padding-left:10px;">
                    <img src="imagenes/PASTEURIZADORAS.jpg" alt="Solinca" id='pasteurizadoras' data-toggle="modal" style="padding-left:10px;">
                    <img src="imagenes/Portada-Accesorios-de-Líneas.jpg" alt="Solinca" id='portada' data-toggle="modal" style="padding-top:20px;">
                    <img src="imagenes/TRANSPORTE.jpg" alt="Solinca" id='transporte' data-toggle="modal" style="padding-top:20px;padding-left:10px;">
                    <img src="imagenes/Embaladores.jpg" alt="Solinca"  id='embaladores' data-toggle="modal" style="padding-top:20px; padding-left:10px;">   
               </div>
           </div>
       </div>
    </body>

    <!-- modals -->
	<div class="modal fade" id="lavadoras" tabindex="-1" role="dialog" aria-labelledby="Etiquetadoras" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header">
					<h5 class="modal-title" id="lavadoras">LAVADORAS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- Contenido de la ventana -->
				<div class="modal-body">
					<img src="imagenes/ETIQUETADORAS.jpg" class="img-fluid thum pull-left" style="width: 200px;height: 200px" alt="Imagen de HTML5"
					 title="ETIQUTADORAS">
					<br>
					<span>
                        Precio: 50$
                    </span>
				</div>
				<!-- Footer de la ventana -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Comprar</button>
				</div>
			</div>
		</div>
    </div>
</div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jqfunciones.js"></script>

<!-- jQuery -->
<!-- <script src="js/fontawesome-all.min.js"></script> -->
    <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>