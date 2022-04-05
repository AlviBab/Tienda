<?php

session_start();
include 'conexion_be.php' ;

$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];
$contrasena = hash('sha512',$contrasena);


$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE emailTelefono = '$usuario' and contrasena = '$contrasena'");


if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $usuario;
    echo '
    <script>
        window.location = "../admin.php"
    </script>
     '; 
    exit();
}else{
    echo '
    <script>
        window.location = "../login.php"
        alert("Incorecto")
    </script>
     '; 
    exit();
}

?>