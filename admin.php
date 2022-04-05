<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
            window.location = "login.php"
            alert("Para entrar a este apartado debe estar autenticado")
        </script>
         '; 
        session_destroy();
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Bienvenido admin  </h1>
    <a href="php/cerrar_sesion.php">Cerrar Session</a>
</body>
</html>