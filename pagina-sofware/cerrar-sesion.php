<?php
    session_start();
    
    if(isset($_POST['user'])){
        switch($_POST["user"]){
            case "Administrador":
                if($_POST['pass']=='lorenis'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "Josefo":
                if($_POST['pass']=='26274692'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "Andrescito":
                if($_POST['pass']=='26471310'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "Kinen":
                if($_POST['pass']=='27689654'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "Stufen":
                if($_POST['pass']=='24922468'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "Yasus":
                if($_POST['pass']=='25778993'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                case "DobleD":
                if($_POST['pass']=='23853829'){
                    $_SESSION['user'] = $_POST["user"];
                    header('location:home.php');
                } else {
                    session_destroy();
                    echo "<center><h1>Contraseña Incorrecta</h1><br>
                        <a href='home.php'>Regresar</a>    
                    </center>";
                }
                break;
                default:
                session_destroy();
                echo "<center><h1>Usuario no existe</h1><br>
                    <a href='home.php'>Regresar</a>    
                </center>";
        }
    } else {
        session_destroy();
        header('location:home.php'); 
    }
?>