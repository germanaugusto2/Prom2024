<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // Incluir script de conexión a la BD
    require 'conexion.php';

    session_start();

    // Validación de los datos recibidos
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave']);

    // Consulta segura a la base de datos usando sentencias preparadas
    $consulta = "SELECT nombre_usuario, correo_usuario, password_usuario FROM usuario WHERE correo_usuario = ? AND password_usuario = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ss", $usuario, $clave);

    // Ejecutar la consulta
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Si hay coincidencia, iniciar sesión
        $stmt->bind_result($nombre_usuario, $correo_usuario, $password_usuario);
        $stmt->fetch();

        $_SESSION['username'] = $nombre_usuario;
        $_SESSION['correo'] = $correo_usuario;

        header("Location: ../pagina_principal.php");
        exit();
    } else {
        echo "<h1>Usuario o contraseña incorrecta</h1>";
    }

    $stmt->close();
    $conexion->close();
?>

