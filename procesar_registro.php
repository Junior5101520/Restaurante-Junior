<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bd_restaurante";

$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

// Escapar caracteres especiales para evitar inyección de SQL
$nombre = $conexion->real_escape_string($nombre);
$correo = $conexion->real_escape_string($correo);
$contrasena = $conexion->real_escape_string($contrasena);

// Verificar si el correo ya está registrado
$consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    // El correo ya está registrado, almacenar mensaje de error en una variable de sesión
    $_SESSION['error_registro'] = "El correo electrónico ya está registrado. Por favor, utiliza otro correo.";
    header("Location: index.php");
    exit;
} else {
    // Insertar los datos en la tabla "usuarios"
    $query = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

    if ($conexion->query($query) === TRUE) {
        echo "Registro exitoso. ¡Bienvenido, $nombre!";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }
}

$conexion->close();
?>
