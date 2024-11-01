<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Grupos y Exámenes - Academia de Taekwondo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container-grupo {
            margin-top: 20px;
            padding: 20px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .group, .exam {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .group h2, .exam h3 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button, textarea {
            padding: 8px;
            margin-top: 5px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Gestión de Grupos y Exámenes</h1>

    <!-- Sección para ver los grupos del profesor -->
    <section>
        <h2>CREAR NUEVO EXAMEN</h2>
        <div class="group">
            <h3>CREAR EXAMEN</h3>

            <!-- Nueva barra desplegable para seleccionar grupo -->
            <label for="grupoSeleccionado">Selecciona el nivel del grupo:</label>
            <select id="grupoSeleccionado" onchange="mostrarFormularioExamen('grupo1')">
                <option value="Seleccion"> --.-- Selecciona un nivel --.-- </option>
                <option value="principiante">10° kup</option>
                <option value="Principiante">9° kup</option>
                <option value="Iniciado">8° kup</option>
                <option value="Iniciado">7° kup</option>
                <option value="Intermedio">6° kup</option>
                <option value="Intermedio">5° kup</option>
                <option value="Avanzado">4° kup</option>
                <option value="Avanzado">3° kup</option>
                <option value="Profesional">2° kup</option>
                <option value="Profesional">1° kup</option>
            </select>

            <label for="numEstudiantes"> Selecciona el número de Estudiantes:</label>
            <input type="number" id="numEstudiantes" max="30" placeholder="Máximo 30" value="1">
            <label for="fechaExamen">Fecha:</label>
            <input type="date" id="fechaExamen">

            <label for="descripcionExamen">Descripción:</label>
            <textarea id="descripcionExamen" rows="4" placeholder="Descripción del examen"></textarea>
        </div>
    </section>

    <!-- Contenedor para CREAR NUEVO GRUPO y sus secciones -->
    <div class="container-grupo">
        <section>
            <h2>CREAR NUEVO GRUPO</h2>
            <form>
                <label for="cantidadEstudiantes">Cantidad de Estudiantes:</label>
                <input type="number" id="cantidadEstudiantes" max="30" placeholder="--.-- Ingresar cantidad de estudiantes --.-- ">

                <label for="nombreGrupo">Nombre del estudiante:</label>
                <input type="text" id="nombreGrupo" placeholder="--.-- Ingresar nombre del estudiante --.--">

                <label for="nivelGrupo">Nivel:</label>
                <select id="nivelGrupo">
                    <option value="Seleccion"> --.-- Selecciona un nivel --.-- </option>
                    <option value="principiante">10° kup</option>
                    <option value="Principiante">9° kup</option>
                    <option value="Iniciado">8° kup</op
