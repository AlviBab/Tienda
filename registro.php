<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e700d617b6.js" crossorigin="anonymous"></script>
        
    <title>Fande</title>
</head>
<body>
    <style>
        body{
            background-color: grey;
        }
    </style>
    <div class="bg-header"><!--Cabecera de la pagina-->
        <header class="header " >
            <div class="logo">
                <a href="index.php"><h1 class="no-margin no-padding">Shop</h1></a>
            </div>
            <nav class="navegacion-principal">
                <a href="#" class="navegacion-principal__items margin hover">Tienda</a>
                <a href="#" class="navegacion-principal__items margin hover">Nosotros</a>
                <a href="#" class="navegacion-principal__items margin hover">Contacto</a>
                <a href="#" class="navegacion-principal__items margin hover">Ayuda</a>
                <div class="utilidades">
                    <a href="#" class="navegacion-principal__items carrito "><i class="fa-solid fa-location-dot"></i></a>
                    <a href="#" class="navegacion-principal__items carrito "><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="navegacion-principal__items carrito "><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <a href="login.php" class="navegacion-principal__items login">Log in <i class="fa-solid fa-user"></i></a>
            </nav>
            <div class="end-header ">
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-location-dot"></i></a>
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="login.php" class="navegacion-principal__items login2 "><i class="fa-solid fa-user"></i></a>
                    <i id="btnAbrir" class="fa-solid fa-bars barra"></i>
                 
            </div>
        </header>
    </div><!--EndCabezera-->
   
    <main class="main-registro"><!--Cuerpo Principal-->
        <div class="wraper">
            <div class="title"><span>Registro Fande</span></div>
            <form action="php/registro_usuarios_be.php" method="POST">
                <div class="metodos-registro">
                    <button> <img src="asests/img/icono-google.png" width="22px"
                        height="22px" alt="icono de google"> Google</button>
                    <button><img src="asests/img/icono-facebook.png" width="22px"
                        height="22px" alt="icono de Facebook"></i> Facebook</button>
                    
                </div>
                <div class="row">
               
                    <input name="nombres" class="datos__users"  type="text" placeholder="Nombres" required maxlength="30">
                </div><!--EndRow-->
                <div class="row">
                
                    <input name="apellidos" class="datos__users" type="text" placeholder="Apellidos" required maxlength="30">
                </div><!--EndRow-->
                <div class="row">
    
                    <input name="edad" class="datos__users" type="number" placeholder="Edad" required maxlength="3">
                </div><!--EndRow-->
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="emailTelefono" class="cuenta__users" type="email" placeholder="Email o Telefono" required maxlength="30">
                </div><!--EndRow-->
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input name="contrasena" class="cuenta__users"  type="password" placeholder="Contrase??a"  required maxlength="16">
                </div><!--EndRow-->
               
                <div class="row buttom">
                    <input name="registrar" class="" type="submit" value="registro">
                </div><!--EndRow-->
                <div class="signup-link">??Ya estas registrado? <a class="color-primario" href="login.php">Inicia ahora</a></div>
            </form>
        </div> 
    </main><!--EndMain-->
    <footer><!--Fin-->

    </footer>
    <script src="js/app.js"></script>
</body>
</html>