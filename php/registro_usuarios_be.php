<?php

    include 'conexion_be.php';
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $emailTelefono = $_POST['emailTelefono'];
    $contrasena = $_POST['contrasena'];
    $query = "INSERT INTO usuarios(nombres,apellidos,edad,emailTelefono,contrasena) 
              VALUES('$nombres','$apellidos','$edad','$emailTelefono','$contrasena')";

    
    $ejecutar = mysqli_query($conexion,$query);
?>