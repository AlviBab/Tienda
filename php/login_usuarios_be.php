<?php

include 'conexion_be.php' ;

$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];


$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE emailTelefono = '$usuario' and contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    header ("location: ../admin.php");
    exit;
}else{
    echo '
        <script>
            alert("Usuario o contraseña incorecta");
            window.location = "../login.php";
        <script>
    ';
    exit;
}

?>