<?php 
    
    session_start();
    // include_once("conexion.php");
    $conn = new mysqli("localhost","root","","web");

    $idfecha = $_REQUEST['idfecha'];
    $id_usuario = $_SESSION['id'];
    if($_SESSION['permisos'] == 1){
        $Coti = "SELECT * FROM `cotizaciones` WHERE cotizaciones.fecha_Cotizacion = '$idfecha'";
    } else {
        $Coti = "SELECT * FROM `cotizaciones` WHERE cotizaciones.fecha_Cotizacion = '$idfecha' AND cotizaciones.usuario = '$id_usuario'";
    }
//  print_r($Coti);
    // trae las consultas he hechas ese dia
// $CDF = "SELECT citas.citas_id as 'Numero de cita', citas.nombre_paciente as 'Nombre del paciente', 
// citas.cedula_paciente as 'Cedula', citas.telefono_paciente as 'telefono', citas.correo_paciente as 'correo', 
// citas.dia_cita as 'Fecha', servicio.nombre_servicio, doctores.nombre as 'Nombre del Doctor' from servicio, doctores,
//  citas";

//     $asd = "SELECT citas.citas_id as 'Numero de cita', citas.nombre_paciente as
//      'Nombre del paciente', citas.cedula_paciente as 'Cedula', citas.telefono_paciente as
//       'telefono', citas.correo_paciente as 'correo', citas.dia_cita as 'Fecha', servicio.nombre_servicio, doctores.nombre as
//       'Nombre del Doctor' from servicio, doctores, citas ";

      // permite filtrar y poner todos segun eleccion del usuario

    // echo $sql;

    $query = $conn->query($Coti);
   

    $vector = array();
	$i = 0;
	while ($rs = mysqli_fetch_array($query)) {
        $id = $rs['usuario'];
        $consUsu = "SELECT * FROM usuarios WHERE usuarios.id_usuario = $id";
        $query2 = $conn->query($consUsu);

        $rs2 = mysqli_fetch_array($query2);

		$vector[$i]['numero_Cotizacion'] = $rs["numero_Cotizacion"];
		$vector[$i]['fecha_Cotizacion'] = $rs["fecha_Cotizacion"];
		$vector[$i]['usuario'] = $rs2["username"];
		$vector[$i]['monto_Cotizacion'] = $rs["monto_Cotizacion"];
		$i = $i+1;
    } 
    // print_r($vector);

	$conn->close();

	header("Type: application/json");
	echo json_encode($vector);
    
?>