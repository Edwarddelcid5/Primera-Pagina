<?php
session_start();
include 'conexion.php';


$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$validar_login = mysqli_query($conexion,"SELECT * from registro where Correo='$Correo' and Contraseña='$Contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION ['nombre']= $Correo;
    header("location:../ingreso.php");
    exit;
} else {
    echo '
    <script>
    alert("Usuario no existe, intentar de nuevo");
    window.location= "../Login/Login.php"
    </script>
    
    ';
    exit;
}


?>