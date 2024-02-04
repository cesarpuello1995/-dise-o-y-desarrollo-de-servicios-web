<!-- inicio-sesion.php -->

<?php
include("includes/funciones.php");

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Lógica para autenticar al usuario
    if (autenticarUsuario($usuario, $contrasena)) {
        echo "<p>Autenticación satisfactoria. ¡Bienvenido!</p>";
    } else {
        echo "<p>Error en la autenticación. Verifica tus credenciales.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
