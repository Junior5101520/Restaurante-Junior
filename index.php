<?php
include ('iniciarsesion.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Junior</title>
    <link rel="stylesheet" href="./login.css">
    
</head>
<body>
        <header>
            
            <h2 class="logo">EL LEGADO DE PAPÁ</h2>
             <nav class="navigation">
                 <button class="btnLogin-popup">Ingresar</button>
             </nav>
        </header>

    <div class="wrapper">

    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Ingresar</h2>
            <form action= "" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="correo">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="contrasena">
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recordarme</label>
                    <a href="#">Olvidaste tu contraseña ?</a>
                </div>
                <button type="submit" class="btn">Ingresar</button>
                <div class="login-register">
                    <p>No tengo cuenta <a href="#" class="register-link">Registrarme</a></p>
                    
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registrarse</h2>
            <form action="procesar_registro.php" method="POST">
        
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nombre" required>
                    <label>Nombre</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="correo" required>
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="contrasena" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">He leido y acepto los terminos y condiciones</label>
                    
                </div>
                <button type="submit" class="btn">Registrarme</button>
                <div class="login-register">
                    <p>Ya tienes cuenta?    <a href="#" class="login-link">Iniciar Sesion</a></p>
                    
                </div>
            </form>
            
        </div>

    </div>
           
    <script src="scrpit.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
