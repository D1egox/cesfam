<?php
include "../src/conn.php";
session_start();
if(isset($_POST['login'])) {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("La conexión falló: " . mysqli_connect_error());
    }

    // Verificar los datos de inicio de sesión en la tabla "medico"
    $sql = "SELECT * FROM medico WHERE email_medico = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['pass'];

        // Verificar la contraseña con Bcrypt
        if (password_verify($pass, $hashedPassword)) {
            echo "Inicio de sesión exitoso";
            $_SESSION['email'] = $email;
            $_SESSION['rut'] = $row['rut_medico'];
            $_SESSION['nombre'] = $row['nombre_medico'];
            $_SESSION['apellido'] = $row['apellido_medico'];
            $_SESSION['especialidad'] = $row['especialidad'];
            header("location: /user");
            // Aquí puedes redirigir al usuario a la página deseada
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>