<?php
    // Recolectando los datos del archivo registro.php con el metodo POST por medio de la etiqueta name
    include 'conexion_be.php';
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $emailTelefono = $_POST['emailTelefono'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512',$contrasena);

    //Esta varible indica el codigo SQL que ejecutara la base de datos
    $query = "INSERT INTO usuarios(nombres,apellidos,edad,emailTelefono,contrasena) 
              VALUES('$nombres','$apellidos','$edad','$emailTelefono','$contrasena')";
    
    // verificar que el usuario no este registrado en la base de datos
    $consulta  = " SELECT * FROM usuarios WHERE emailTelefono = '$emailTelefono'";
    $verificar = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($verificar) > 0 ) {
        echo '
        <script>
            window.location = "../registro.php"
            alert("Este correo ya ha sido registrado anteriormente, intentelo de nuevo")
        </script>
         '; 
         exit();
    }
    //aqui ejecutamos el codigo
    $ejecutar = mysqli_query($conexion,$query);

    if ($ejecutar) {
        echo '
            <script>
                window.location = "../registro.php"
                alert("Usuario registrado")
            </script>
        ';
    }else {
        echo '
        <script>
            window.location = "../registro.php"
            alert("Usuario no registrado, ha ocurrido un error intentelo de nuevo")
        </script>
        ';
    }
    msqli_close($conexion);
    
?>