<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$correo = $_POST['correo']; 
$mensaje = $_POST['mensaje']; 
$header = 'From: ' . $correo . ", de la poblacion ".$mensaje."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo . " \r\n";  
$mensaje .="Mensaje de solución".$_POST['mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'joseleodany@gmail.com'; 
$asunto = 'Solinca'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 