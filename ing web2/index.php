<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Registros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-section {
            margin-bottom: 30px;
        }
        .form-section input[type="submit"] {
            width: auto;
            margin-right: 10px;
        }
        .form-section label {
            width: auto;
            display: inline-block;
        }
        .form-section input[type="text"] {
            width: 100%;
        }
        .form-section input[type="submit"]:last-child {
            background-color: #f44336;
        }
        .form-section input[type="submit"]:last-child:hover {
            background-color: #e53935;
        }
        
        /* Responsive design */
        @media screen and (max-width: 600px) {
            .container {
                width: 95%;
                padding: 10px;
            }
            input[type="submit"] {
                width: 100%;
                padding: 12px;
                font-size: 18px;
            }
            .form-section input[type="text"], 
            .form-section input[type="email"] {
                font-size: 14px;
                padding: 10px;
            }
            label {
                font-size: 14px;
            }
            header h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Formulario de Registro</h1>
    </header>
    
    <div class="container">
        <form action="guardar.php" method="post">
            <div class="form-section">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-section">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required>
            </div>
            <div class="form-section">
                <label for="documento">Documento:</label>
                <input type="text" name="documento" id="documento" required>
            </div>
            <div class="form-section">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required>
            </div>
            <div class="form-section">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" required>
            </div>
            <div class="form-section">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" required>
            </div>
            <input type="submit" name="InsertRegistro" value="Registrar">
        </form>

        <form action="consultar.php" method="get">
            <input type="submit" value="Consultar Datos">
        </form>

        <form action="actualizar.php" method="post">
            <div class="form-section">
                <label for="docActualizar">Documento a actualizar:</label>
                <input type="text" name="docActualizar" id="docActualizar" required>
            </div>
            <input type="submit" value="Actualizar Registro">
        </form>

        <form action="eliminar.php" method="post">
            <div class="form-section">
                <label for="docEliminar">Documento a eliminar:</label>
                <input type="text" name="docEliminar" id="docEliminar" required>
            </div>
            <input type="submit" value="Eliminar Registro">
        </form>
    </div>
</body>
</html>
