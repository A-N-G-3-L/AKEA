<?php
$host = "localhost";     // o 127.0.0.1
$user = "root";          // tu usuario de MySQL
$password = "Ag071306dM&";          // tu contraseña de MySQL (puede ser "" en XAMPP)
$database = "aekea";

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
