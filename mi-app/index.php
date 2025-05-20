<?php
$servername = "db";  // Nombre del servicio MySQL en docker-compose
$username = "root";
$password = "clave123";
$dbname = "practica";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequear conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para mostrar registros de la tabla 'alumnos'
$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Alumnos:</h1><ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nombre"] . " - " . $row["carrera"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay registros";
}

$conn->close();
?>
