<?php
session_start();
include('db.php'); // Conexión a la base de datos

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirige al login si no está autenticado
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Colegio Guanentá</title>
</head>
<body>

<h2>Perfil de <?php echo $user['nombre']; ?></h2>
<p>Email: <?php echo $user['email']; ?></p>
<!-- Aquí podrías añadir más información del estudiante -->
<a href="logout.php">Cerrar sesión</a>

</body>
</html>
