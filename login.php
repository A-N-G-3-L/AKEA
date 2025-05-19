<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "Ag071306dM&", "aekea");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$matricula = $_POST['matricula_doc'];
$contraseña = $_POST['contraseña'];

// Consulta para verificar al docente
$sql = "SELECT * FROM docentes WHERE matricula_doc = '$matricula' AND contraseña = '$contraseña'";
$result = $conn->query($sql);

// Verificar si existe el docente
if ($result && $result->num_rows === 1) {
    echo "<script>alert('Inicio de sesión exitoso'); window.location.href = 'Titulación.html';</script>";
} else {
    echo "<script>alert('Credenciales incorrectas'); window.history.back();</script>";
}

$conn->close();
?>
