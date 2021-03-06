<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
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
                <a href="#" class="navegacion-principal__items login">Log in <i class="fa-solid fa-user"></i></a>
            </nav>
            <div class="end-header ">
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-location-dot"></i></a>
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="navegacion-principal__items carrito2 "><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="#" class="navegacion-principal__items login2 "><i class="fa-solid fa-user"></i></a>
                    <i id="btnAbrir" class="fa-solid fa-bars barra"></i>
                 
            </div>
        </header>
    </div><!--EndCabezera-->
    <main class="main-login"><!--Cuerpo Principal-->
        <div class="imagen">
            <img src="asests/img/gorra.png" alt="Nuestro servicios">
        </div>
        <div class="wraper">
            <div class="title"><span>Login Fande</span></div>
            <form action="php/login_usuarios_be.php" method = "POST" >
                <div class="metodos-login">
                    <button> <img src="asests/img/icono-google.png" width="22px"
                        height="22px" alt="icono de google"> Google</button>
                    <button><img src="asests/img/icono-facebook.png" width="22px"
                        height="22px" alt="icono de Facebook"></i> Facebook</button>
                    
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input name="usuario"  type="email" placeholder="Email o Telefono" required maxlength="30">
                </div><!--EndRow-->
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input name="contrasena" type="password" placeholder="Contrase??a"  required maxlength="16">
                </div><!--EndRow-->
                <div class="pass"><a class="color-primario" href="#">??Olvidaste la contrase??a?</a></div>
                <div class="row buttom">
                    <input type="submit" value="Login">
                </div><!--EndRow-->
                <div class="signup-link">??No estas registrado? <a class="color-primario" href="registro.php">Registrate ahora</a></div>
            </form>
        </div> 
    </main><!--EndMain-->

    <footer><!--Fin-->

    </footer>
    <script src="js/app.js"></script>
</body>
</html>