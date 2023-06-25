<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bd_restaurante";

$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contraseña'];

// Insertar los datos en la tabla "usuarios"
$query = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contrasena')";

if ($conexion->query($query) === TRUE) {
    echo "Registro exitoso. ¡Bienvenido, $nombre!";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

$conexion->close();
?>
