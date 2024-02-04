<!-- registro.php -->

<?php
include("includes/funciones.php");

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Lógica para registrar el usuario
    if (registrarUsuario($usuario, $contrasena)) {
        echo "<p>Registro exitoso. Ahora puedes <a href='inicio-sesion.php'>iniciar sesión</a>.</p>";
    } else {
        echo "<p>Error en el registro. Inténtalo de nuevo.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
