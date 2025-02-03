<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docEliminar = $_POST['docEliminar'];

    $conexion = new mysqli('localhost', 'root', '', 'gestion');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta = "DELETE FROM users WHERE documento = '$docEliminar'";

    if ($conexion->query($consulta) === TRUE) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }

    echo "<br><a href='index.php'><button>Volver a Registros</button></a>";

    $conexion->close();
}
?>