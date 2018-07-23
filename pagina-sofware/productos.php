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
<header class='fondo-home' style='overflow: hidden;'>
    <div style='width: 100vw;height: 100vh;background: #00000070;'>
           
           <br><br><br><br><br>
           <form action="cotizar.php" method="post" name="formu" id="formu">
           <div class="row" id="text1" style='color:#fff;'>
                <div style="width: 100%;height: 105px;display: flex;justify-content: center;flex-direction: column;align-items: center;margin-top: 0px;">
                    <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 15px;">PRODUCTOS</h1> 
                    <label class='letras' style"font-size: 15px;">Soluciones adaptadas para cualquier linea de</label>
                    <label class='letras' style"font-size: 15px;">producción Compruebe nuestro gran stock de repuestos</label>
                    <br>
                </div>
           </div>
           <div class="row" style="display: none" id="text2">
                <div style="display: flex;justify-content: center;flex-direction: column;align-items: center;">
                    <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 15px; color:#fff;">PRODUCTOS</h1> 
                    <label style='font-size:15px;color:#fff !important;'>Verifica los datos</label>
                    <label style='font-size:15px;color:#fff!important;'>Junto al monto a pagar en total e individual</label>
                    <br>
                </div>
           </div>
           <div class="row" style="display: none" id="text3">
                <div style="display: flex;justify-content: center;flex-direction: column;align-items: center;">
                    <h1 style="font-size: 40px;letter-spacing: 2px; font-family: -webkit-pictograph;padding-top: 15px;color:#fff;">PRODUCTOS</h1> 
                    <label style="font-size:12px;color:#fff !important;">Sus solicitudes de cotización han sido enviadas</label>
                    <label style="font-size:12px;color:#fff !important;">Por favor, imprima la planilla de cotización.</label>
                    <button onclick="window.open('home.php', '_self')">Ir a home</button>
                    <br>
                </div>
           </div>
                <div class="row product" id="filaProductos">
                    <div class="col-12" style="width: 100vw; height: 70vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <div class="col img-product" style="display: flex;flex-wrap: wrap;justify-content: space-evenly;color: #fff;">
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantLavadoras" id="cantLavadoras"> * 300$c/u
                                    </div>
                                    <img src="imagenes/LAVADORAS.jpg" alt="Solinca" style="">
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantEtiq" id="cantEtiq"> * 150$c/u
                                    </div>
                                    <img src="imagenes/ETIQUETADORAS.jpg" alt="Solinca"  id='etiqueta' data-toggle="modal">
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantLlenadoras" id="cantLlenadoras"> * 200$c/u
                                    </div>
                                    <img src="imagenes/LLENADORAS.jpg" alt="Solinca" id='llenadoras' data-toggle="modal">
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantPast" id="cantPast"> * 160$c/u
                                    </div>
                                    <img src="imagenes/PASTEURIZADORAS.jpg" alt="Solinca" id='pasteurizadoras' data-toggle="modal">
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <img src="imagenes/Portada-Accesorios-de-Líneas.jpg" alt="Solinca" id='portada' data-toggle="modal" style="padding-top:20px; padding-left:18px;">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantAcLi" id="cantAcLi"> * 500$c/u
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <img src="imagenes/TRANSPORTE.jpg" alt="Solinca" id='transporte' data-toggle="modal" style="padding-top:20px;padding-left:10px;">
                                    <div style="style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantTrans" id="cantTrans"> * 450$c/u
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                    <img src="imagenes/Embaladores.jpg" alt="Solinca"  id='embaladores' data-toggle="modal" style="padding-top:20px; padding-left:10px;">
                                    <div style="width: 100%;display: flex; flex-direction: row">
                                        <input class="cantidadesInput" type="number" value=0 min="0" pattern="[0-9]+" 
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" 
                                        name="cantEmbaladores" id="cantEmbaladores"> * 700$c/u
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div id="form" style="display: none">
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;width: 100%;height: 100%;">
                    <!-- <form action="cotizar.php" method="post"> -->
                        <table>
                            <tr style='font-size: 15px;letter-spacing: 0px;color: #fff;'>
                            <th>
                                    Producto
                                </th>
                                <th>
                                    Cantidad
                                </th>
                                <th>
                                    Total Pago
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Lavadoras
                                </td>
                                <td>
                                    <input type="text" disabled id="lavTotal" name="lavTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="lavTotalPago" name="lavTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Etiquetadoras
                                </td>
                                <td>
                                    <input type="text" disabled id="etTotal" name="etTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="etTotalPago" name="etTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Llenadoras
                                </td>
                                <td>
                                    <input type="text" disabled  value=0 id="lleTotal" name="lleTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="lleTotalPago" name="lleTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Pasteurizadoras
                                </td>
                                <td>
                                    <input type="text" disabled id="pastTotal" name="pastTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="pastTotalPago" name="pastTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Acc. de Lineas
                                </td>
                                <td>
                                    <input type="text" disabled id="accTotal" name="accTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="accTotalPago" name="accTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vías de Transporte
                                </td>
                                <td>
                                    <input type="text" disabled id="transTotal" name="transTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="transTotalPago" name="transTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Embaladores
                                </td>
                                <td>
                                    <input type="text" disabled id="embTotal" name="embTotal">
                                </td>
                                <td>
                                    <input type="text" disabled id="embTotalPago" name="embTotalPago">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    TOTALES:
                                </td>
                                <td>
                                    <input type="text" disabled id="totalCant" name="totalCant">
                                </td>
                                <td>
                                    <input type="text" disabled id="totalPago" name="totalPago">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" onclick="irAHome()" class='btn btn-info' style='width:140px; height:38px;' value="Cotizar">
                        <br>
                    </div>
                </div>
            </form>
            
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: row">
                <div style="display: none" id="mod">
                    <button class='btn btn-info' style='width:140px; height:38px;' onclick="regresar()">Modificar</button>
                </div>
            </div>
            
            <div style="width: 100%;height: 28px;display: flex; flex-direction: column; justify-content: center; align-items: center" id="boton">
                <button class='btn btn-info' style='width:140px; height:38px;' onclick="getDatos()">Agregar</button>
            </div>
    </header>
    
        <script>
            function getDatos(){
                let lavadoras = $("#cantLavadoras").val();
                $("#lavTotal").val(lavadoras);
                $("#lavTotalPago").val(lavadoras*300);
                let etiquetadoras = $("#cantEtiq").val();
                $("#etTotal").val(etiquetadoras);
                $("#etTotalPago").val(etiquetadoras*150);
                let llenadoras = $("#cantLlenadoras").val();
                console.log(document.getElementById("lleTotal"));
                document.getElementById("lleTotal").setAttribute('value',llenadoras);
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
                $("#totalPago").val((lavadoras*300)+(etiquetadoras*150)+(llenadoras*200)+(pasteurizadoras*160)+(acceLinea*500)+(transporte*450)+(embaladores*700));
                $("#totalCant").val((lavadoras*1)+(etiquetadoras*1)+(llenadoras*1)+(pasteurizadoras*1)+(acceLinea*1)+(transporte*1)+(embaladores*1));
                $("#filaProductos").hide();
                $("#boton").hide();
                $("#text1").hide();
                $("#text2").show();
                $("#mod").show();
                $("#form").show();
                console.log("Lavadoras => ", lavadoras);
                console.log("etiquetadoras => ", etiquetadoras);
                console.log("llenadoras => ", llenadoras);
                console.log("pasteurizadoras => ", pasteurizadoras);
                console.log("acceLinea => ", acceLinea);
                console.log("transporte => ", transporte);
                console.log("embaladores => ", embaladores);
            }
    
            function irAHome(){
                // window.open("home.php");
                $("#formu").hide();
                $("#boton").hide();
                $("#text1").hide();
                $("#text3").show();
                $("#text2").hide();
                $("#mod").hide();
                document.formu.target='_blank';
            }
    
            function regresar(){
                $("#filaProductos").show();
                $("#form").hide();
                $("#boton").show();
                $("#mod").hide();
                $("#text1").show();
                $("#text2").hide();
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
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>
                    </div>
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