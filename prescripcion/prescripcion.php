<?php
include "../src/conn.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los nombres de los medicamentos
$sql = "SELECT nombre_medicamento FROM stockremedios";
$result = $conn->query($sql);

$medicamentos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $medicamentos[] = $row["nombre_medicamento"];
    }
}

?>