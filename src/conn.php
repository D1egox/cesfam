<?php
$servername = "localhost"; // Dirección del servidor MySQL
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // La clave no es necesaria cuando ingresas como root en localhost
$dbname = "cesfam"; // Nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$conn = mysqli_connect($servername, $username, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Aquí puedes ejecutar consultas y manipular la base de datos

// Cerrar la conexión
mysqli_close($conn);
?>