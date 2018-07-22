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
    <link rel="stylesheet" href="css/estilos-cotiza.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <?php 
        include_once("encabezado.php");
    ?>
    <form action="send.php" method="post">
    <div class="row" style='width:100vw; height:100vh; background: #ccc;'>
        <!-- <div class="col-12" style='width:100%; height:100%;'> -->
             <div class="col-12" style='width:100%; height:100%;display: flex;justify-content: center;align-items: center;'>
                <div class="col-12" style='width: 65%; height: 70%;background: #fff;display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;'>
                    <div class="col-6" style='width: 100%;height: 90px; background: #2a807a;color: #fff;display: flex;letter-spacing: 2px'>
                        <h2 style='font-size: 20px;padding: 10px;'>Consulta de Cotizaciones</h2>
                    </div>
                    <br><br>
                    <div class="col-6" style='width: 40%;height: 100%;'>
                        <div style='width: 100%;'>
                            <!-- <label>Nombre: </label> -->
                            <input type="Date" name='fechacotizacion' placeholder='Fecha de la Cotización' class='input-contact' id="nombre completo"size="30" maxlength="100">
                        </div>
                        <br>
                        <div style='width: 100%;'>
                            <input type="submit" value="Consultar" class='btn btn-info'>
                            <!-- <input type="reset" value='Borrar' class='btn btn-info'> -->
                            <!-- <button type='buttom' class='btn btn-info'>Enviar</button> -->
                            <!-- <button type='reset' class='btn btn-info'>Resetear</button> -->
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</form>

<div class="table-responsive">
        <table class="table table-striped table-hover table-bordered" id='grilla'>
            <thead>
            <tr class="info">
                <th>Numero Cotizacion</th>
                <th>Fecha Cotizacion</th>
                <th>Usuario</th>
                <th>Monto Total</th>
                <th>Nota</th>
            
             
            </tr>
            </thead>
            <tbody id='data'>
            <?php
            while ($rs = mysqli_fetch_array($queryDiaVisita)) {
                echo "<tr>";
                echo 
               "<td>" . $rs["numero_Cotizacion"] . "</td>
                <td>" . $rs["fecha_Cotizacion"] . "</td>
                <td>" . $rs["usuario"] . "</td>
                <td>" . $rs["monto_cotizacion"] . "</td>
                <td>" . $rs["nota"] . "</td>";
                echo "</tr>";
            }

            ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $("#filtro_Doctor").click(function (e) {
            e.preventDefault();

            $("#data").empty();  // vaciamos las lineas del cuerpo de la tabla

            var Iddoctor = $("#Doctor").val();
            var Fecha = $("#Fecha").val();

            $.ajax({
                url: "filtrar_doctor.php",
                type: "post",
                data: {
                    iddoctor: Iddoctor,
                    idfecha: Fecha
                },
                dataType: "json"
            }).done(
                function (data) {
                  if(data){
                    console.log("Exito Done en Cambio 111");
                    for (var i = 0; i < data.length; i++) {
                        $("#data").append("<tr><td>"
                        + data[i]['Nombre del paciente'] + "</td><td>" 
                        + data[i]['Cedula'] + "</td><td>" 
                        + data[i]['telefono'] + "</td><td>" 
                        + data[i]['correo'] + "</td><td>"
                        + data[i]['Fecha'] + "</td><td>"
                        + data[i]['nombre_servicio'] + "</td><td>"
                        + data[i]['Nombre del Doctor'] + "</td></tr>");
                    }
                  }else{
                    alert("No se a encontrado nunca cita en este dia con este doctor");
                    
                  }
                  
                }
            ).fail(
                function (error) {

                }
            );

        });
    });

    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>