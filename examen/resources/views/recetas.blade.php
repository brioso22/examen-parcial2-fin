<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Recetas</title>
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
</head>
<body>
    <div class="container">
        <h2>Formulario de Recetas</h2>
        <form>
            <label for="medico_id">ID del Médico:</label>
            <input type="number" id="medico_id" name="medico_id" min="1" required>

            <label for="paciente_id">ID del Paciente:</label>
            <input type="number" id="paciente_id" name="paciente_id" min="1" required>

            <label for="fecha_emision">Fecha de Emisión:</label>
            <input type="date" id="fecha_emision" name="fecha_emision" required>

            <input type="submit" value="Guardar Receta">
        </form>
    </div>
</body>
</html>
