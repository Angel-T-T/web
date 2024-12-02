<?php
include('config.php');

if (isset($_POST['submit'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);  // Encriptamos la contraseña

    // Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena) VALUES ('$nombre_usuario', '$correo', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir al index después de registrar
        header("Location: index.hmtl");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="registro.php" method="POST">
        <label for="nombre_usuario">Nombre de Usuario:</label><br>
        <input type="text" name="nombre_usuario" required><br><br>

        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" name="correo" required><br><br>

        <label for="contrasena">Contraseña:</label><br>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit" name="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
</body>
</html>
