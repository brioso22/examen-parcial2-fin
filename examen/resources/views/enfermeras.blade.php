<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Enfermeras</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        label,
        input,
        select,
        textarea {
            display: block;
            margin-bottom: 15px;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Enfermeras</h2>
        <form action="guardar_enfermera.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="contacto">Contacto:</label>
            <input type="text" id="contacto" name="contacto" required>

            <label for="horario_trabajo">Horario de Trabajo:</label>
            <input type="text" id="horario_trabajo" name="horario_trabajo" required>

            <input type="submit" value="Guardar Enfermera">
        </form>
    </div>
</body>
</html>
