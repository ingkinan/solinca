<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solinca</title>
    <link rel="icon" href="imagenes/servicio3.png" type="image/x-ico">
</head>
<body>
    <?php
        $mysqli = new mysqli("localhost", "root", "", "web");
        if($mysqli->connect_error){
            die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
        }
    ?>
</body>
</html>