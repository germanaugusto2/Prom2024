<?php
$host = 'localhost';
$user = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos
$dbname = 'colegio_guanenta';

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
