<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docActualizar = $_POST['docActualizar'];

    $conexion = new mysqli('localhost', 'root', '', 'gestion');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta = "SELECT * FROM users WHERE documento = '$docActualizar'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        echo "<form action='actualizar_proceso.php' method='post'>";
        $registro = $resultado->fetch_assoc();

        echo "Nombre: <input type='text' name='nombre' value='" . $registro['nombre'] . "'><br><br>";
        echo "Apellido: <input type='text' name='apellido' value='" . $registro['apellido'] . "'><br><br>";
        echo "Documento: <input type='text' name='documento' value='" . $registro['documento'] . "' readonly><br><br>";
        echo "Dirección: <input type='text' name='direccion' value='" . $registro['direccion'] . "'><br><br>";
        echo "Teléfono: <input type='text' name='telefono' value='" . $registro['telefono'] . "'><br><br>";
        echo "Correo: <input type='email' name='correo' value='" . $registro['correo'] . "'><br><br>";
        echo "<input type='submit' value='Actualizar'>";
        echo "</form>";

        echo "<br><a href='index.php'><button>Volver a Registros</button></a>";
    } else {
        echo "No se encontró ningún registro con el documento especificado.";
    }

    echo "<br><a href='index.php'><button>Volver a Registros</button></a>";
    $conexion->close();
}
?>