<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Registros</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required>
        <br><br>
        
        <label for="documento">Documento: </label>
        <input type="text" name="documento" id="documento" required>
        <br><br>
        
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion" required>
        <br><br>
        
        <label for="telefono">Teléfono: </label>
        <input type="text" name="telefono" id="telefono" required>
        <br><br>
        
        <label for="correo">Correo: </label>
        <input type="email" name="correo" id="correo" required>
        <br><br>

        <input type="submit" name="InsertRegistro" class="btn btn-success" value="Registrar">
    </form>

    <br>

    <form action="consultar.php" method="get">
        <input type="submit" value="Consultar Datos">
    </form>

    <br>

    <form action="actualizar.php" method="post">
        <label for="docActualizar">Documento a actualizar: </label>
        <input type="text" name="docActualizar" id="docActualizar" required>
        <br><br>
        <input type="submit" value="Actualizar Registro">
    </form>

    <br>

    <form action="eliminar.php" method="post">
        <label for="docEliminar">Documento a eliminar: </label>
        <input type="text" name="docEliminar" id="docEliminar" required>
        <br><br>
        <input type="submit" value="Eliminar Registro">
    </form>

</body>
</html>
