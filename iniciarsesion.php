<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bd_restaurante";

// login.php

// Verificar si se enviaron los datos del formulario
if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Verificar si se dejaron campos vacíos
    if (empty($correo) || empty($contrasena)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // Establecer la conexión con la base de datos
        $conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        // Verificar si la conexión fue exitosa
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Consultar la base de datos para verificar las credenciales del usuario
        $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $result = $conexion->query($query);

        // Verificar si se encontró un usuario con las credenciales proporcionadas
        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['correo'] = $correo;
            header('Location: ./Menu/menu.php');
            exit();
        } else {
            // Credenciales incorrectas
            echo "Nombre de usuario o contraseña incorrectos.";
        }

        // Cerrar la conexión con la base de datos
        $conexion->close();
    }
} else {
    // echo "Por favor, envía los datos del formulario.";
}
?>

 


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    <input type="text" name="nombre" id="">
    <input type="password" name="contrasena" id="">
    <button type="submit">Iniciar Sesion</button>
    </form>


</body>
</html> -->