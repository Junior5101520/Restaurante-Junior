<?php
// logout.php

// Iniciar la sesión
session_start();

// Destruir la sesión
session_destroy();

// Redireccionar a la página de inicio de sesión o a cualquier otra página
header("Location: ../index.php");
exit();
?>
