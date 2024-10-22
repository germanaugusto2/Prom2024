<?php
session_start();
include('db.php'); // Conexión a la base de datos

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertar datos en la base de datos
    $query = "INSERT INTO users (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
    if(mysqli_query($conn, $query)) {
        echo "Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.";
    } else {
        echo "Error al registrar. Intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Colegio Guanentá</title>
</head>
<body>

<h2>Registro de Bachilleres Promoción 2024</h2>
<form action="" method="post">
    Nombre: <input type="text" name="nombre" required><br>
    Correo Electrónico: <input type="email" name="email" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Registrar">
</form>

</body>
</html>
