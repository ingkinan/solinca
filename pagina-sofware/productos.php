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

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/produc.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
    	<!-- JQuery -->
	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

    <style>
        .cantidadesInput{
            width: 50px;
        }
    </style>
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
       <div class="row">
            <div style="display: flex;justify-content: center;flex-direction: column;align-items: center;margin-top: 3%;">
                <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 20px;">PRODUCTOS</h1> 
                <br>
                <label>Soluciones adaptadas para cualquier linea de <br>
                producción Compruebe nuestro gran stock de repuestos</label>
            </div>
       </div>
       <div class="row product" id="filaProductos">
           <div class="col-12" style="width: 100vw; height: 70vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
               <div class="col img-product" style="display: flex;flex-wrap: wrap;justify-content: space-evenly;">
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantLavadoras" id="cantLavadoras"> * 300$c/u
                        </div>
                        <img src="imagenes/LAVADORAS.jpg" alt="Solinca" style="">
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantEtiq" id="cantEtiq"> * 150$c/u
                        </div>
                        <img src="imagenes/ETIQUETADORAS.jpg" alt="Solinca"  id='etiqueta' data-toggle="modal" style="padding-left:10px;">
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantLlenadoras" id="cantLlenadoras"> * 200$c/u
                        </div>
                        <img src="imagenes/LLENADORAS.jpg" alt="Solinca" id='llenadoras' data-toggle="modal" style="padding-left:10px;">
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantPast" id="cantPast"> * 160$c/u
                        </div>
                        <img src="imagenes/PASTEURIZADORAS.jpg" alt="Solinca" id='pasteurizadoras' data-toggle="modal" style="padding-left:10px;">
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <img src="imagenes/Portada-Accesorios-de-Líneas.jpg" alt="Solinca" id='portada' data-toggle="modal" style="padding-top:20px;">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantAcLi" id="cantAcLi"> * 500$c/u
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <img src="imagenes/TRANSPORTE.jpg" alt="Solinca" id='transporte' data-toggle="modal" style="padding-top:20px;padding-left:10px;">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantTrans" id="cantTrans"> * 450$c/u
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <img src="imagenes/Embaladores.jpg" alt="Solinca"  id='embaladores' data-toggle="modal" style="padding-top:20px; padding-left:10px;">
                        <div style="display: flex; flex-direction: row">
                            <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="cantEmbaladores" id="cantEmbaladores"> * 700$c/u
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                        <button onclick="getDatos()">Agregar</button>
                    </div>
               </div>
           </div>
       </div>
       <div id="form" style="display: none">
           
            <form action="" method="post">
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                    <table>
                        <tr>
                            <th>
                                Producto
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Lavadoras
                            </td>
                            <td>
                                <input type="text" disabled id="lavTotal">
                            </td>
                            <td>
                            <input type="text" disabled id="lavTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Etiquetadoras
                            </td>
                            <td>
                                <input type="text" disabled id="etTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="etTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Llenadoras
                            </td>
                            <td>
                                <input type="text" disabled id="lleTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="lleTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pasteurizadoras
                            </td>
                            <td>
                                <input type="text" disabled id="pastTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="pastTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Acc. de Lineas
                            </td>
                            <td>
                                <input type="text" disabled id="accTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="accTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vías de Transporte
                            </td>
                            <td>
                                <input type="text" disabled id="transTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="transTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Embaladores
                            </td>
                            <td>
                                <input type="text" disabled id="embTotal">
                            </td>
                            <td>
                                <input type="text" disabled id="embTotalPago">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="text" disabled id="TOTAL">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="Cotizar">
                </div>
                <br>
            </form>
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: row">
                <button onclick="regresar()">Modificar</button>
            </div>
        </div>
    </body>

    <script>
        function getDatos(){
            let lavadoras = $("#cantLavadoras").val();
            $("#lavTotal").val(lavadoras);
            $("#lavTotalPago").val(lavadoras*300);
            let etiquetadoras = $("#cantEtiq").val();
            $("#etTotal").val(etiquetadoras);
            $("#etTotalPago").val(etiquetadoras*150);
            let llenadoras = $("#cantLlenadoras").val();
            $("#lleTotal").val(llenadoras);
            $("#lleTotalPago").val(llenadoras*200);
            let pasteurizadoras = $("#cantPast").val();
            $("#pastTotal").val(pasteurizadoras);
            $("#pastTotalPago").val(pasteurizadoras*160);
            let acceLinea = $("#cantAcLi").val();
            $("#accTotal").val(acceLinea);
            $("#accTotalPago").val(acceLinea*500);
            let transporte = $("#cantTrans").val();
            $("#transTotal").val(transporte);
            $("#transTotalPago").val(transporte*450);
            let embaladores = $("#cantEmbaladores").val();
            $("#embTotal").val(embaladores);
            $("#embTotalPago").val(embaladores*700);
            $("#TOTAL").val((lavadoras*300)+(etiquetadoras*150)+(llenadoras*200)+(pasteurizadoras*160)+(acceLinea*500)+(transporte*450)+(embaladores*700));
            $("#filaProductos").hide();
            $("#form").show();
            console.log("Lavadoras => ", lavadoras);
            console.log("etiquetadoras => ", etiquetadoras);
            console.log("llenadoras => ", llenadoras);
            console.log("pasteurizadoras => ", pasteurizadoras);
            console.log("acceLinea => ", acceLinea);
            console.log("transporte => ", transporte);
            console.log("embaladores => ", embaladores);
        }

        function regresar(){
            $("#filaProductos").show();
            $("#form").hide();
        }

        function comprueba(valor){
            console.log("valor", valor);
            if(valor.value < 0){
                valor.value = 0;
            }
        }
    </script>

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
    <!-- <script src="js/fontawesome-all.min.js"></script> -->
    <!-- <script src="js/jqfunciones.js"></script> -->

<!-- jQuery -->
<!-- <script src="js/fontawesome-all.min.js"></script> -->
    <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>