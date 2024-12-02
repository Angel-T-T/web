<?php
$servername = "localhost";
$username = "root";  // Cambia esto si usas un usuario diferente en phpMyAdmin
$password = "";      // Cambia esto si tienes una contraseña configurada en tu base de datos
$dbname = "usuarios_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
