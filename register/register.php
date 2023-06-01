<?php
include "../src/conn.php";
if (isset($_POST['registrarse'])) {
    // Obtener los datos del formulario
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Encriptar la contraseña con Bcrypt
    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);


    // Crear la conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //$conn = mysqli_connect($servername, $username, $dbname);

    // Verificar la conexión
    if (!$conn) {
        die("La conexión falló: " . mysqli_connect_error());
    }


    // Insertar los datos en la tabla "medico"
    $sql = "INSERT INTO medico (rut, nombre, apellido, especialidad, email, pass) VALUES ('$rut', '$nombre', '$apellido', '$especialidad', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>