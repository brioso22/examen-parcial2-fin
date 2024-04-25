<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Resultados de Exámenes</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

form {
    width: 50%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <h2>Formulario de Resultados de Exámenes</h2>
    <form action="guardar_resultado_examen.php" method="POST">
        <label for="examen">Tipo de Examen:</label>
        <input type="text" id="examen" name="examen" required><br><br>
        <label for="paciente">Paciente:</label>
        <select id="paciente" name="paciente" required>
            <!-- Aquí deberías cargar dinámicamente los pacientes desde la base de datos -->
            <option value="1">Paciente 1</option>
            <option value="2">Paciente 2</option>
            <!-- Asegúrate de cargar todos los pacientes disponibles -->
        </select><br><br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>
        <label for="resultado">Resultado:</label>
        <textarea id="resultado" name="resultado" rows="4" required></textarea><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
