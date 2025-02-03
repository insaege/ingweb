<?php


include 'conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];



    $insertar = "INSERT INTO users (nombre, apellido, documento, direccion, telefono, correo) VALUES ('$nombre', '$apellido', '$documento', '$direccion', '$telefono', '$correo')";


    if ($conexion->query($insertar) == TRUE) {
        echo "Datos Registrados correctamente <br>";
        echo "Datos Registrados: ";
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Documento: " . $documento . "<br>";
        echo "Direccion: " . $direccion . "<br>";
        echo "Telefono: " . $telefono . "<br>";
        echo "Correo: " . $correo . "<br>";

    } else {
        echo "No se ha podido realizar el registro";
    }

} else {
    echo "Datos incompletos";
}


?>