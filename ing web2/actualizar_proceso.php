<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $conexion = new mysqli('localhost', 'root', '', 'gestion');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta = "UPDATE users SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion', telefono = '$telefono', correo = '$correo' WHERE documento = '$documento'";

    if ($conexion->query($consulta) === TRUE) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }

    $conexion->close();
}
?>
