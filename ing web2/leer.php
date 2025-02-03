<?php

include 'conexion.php';

$leer = "SELECT * FROM users WHERE id > 0 ORDER BY id DESC";
$datos = $conexion->query($leer);

if($datos->num_rows >0) {
    echo "<table border='1' style='border-collapse; width: 50%'>";
    echo "<tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
    
    
    ";
    echo "</tr>";

    while ($fila = $datos->fetch_assoc()) {

        echo "<tr>
        
            <td>{$fila['nombre']}</td>
            <td>{$fila['apellido']}</td>
            <td>{$fila['documento']}</td>
            <td>{$fila['direccion']}</td>
            <td>{$fila['telefono']}</td>
            <td>{$fila['correo']}</td>
        </tr>
        ";
    }
    echo "</table>";
    
} else {
    echo "Sin resultados";
}

$conexion->close();

?>