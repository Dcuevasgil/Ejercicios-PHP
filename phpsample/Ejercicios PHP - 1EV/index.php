<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<h1>Formulario de Matrícula</h1>
    <form action="/Ejercicios PHP - 1EV/card.php" method="POST">
        <input type="text" id="nombre" name="nombre" placeholder="nombre">
        <input type="text" id="apellidos" name="apellidos" placeholder="apellidos">
        <input type="number" id="edad" name="edad" placeholder="edad">
        <input type="number" id="peso" name="peso" step="0.1" placeholder="peso en kg">
        <input type="number" id="altura" name="altura" step="0.01" placeholder="altura en metros">
        
        <label for="asignaturas">Asignaturas matriculadas (elección multiple)</label>
        <div class="casillas">
            <input type="checkbox" id="matematicas" name="asignaturas" value="Matemáticas">
            <label for="matematicas">Matemáticas</label>
            <br>
            <input type="checkbox" id="fisica" name="asignaturas" value="Física">
            <label for="fisica">Física</label>
            <br>
            <input type="checkbox" id="quimica" name="asignaturas" value="Química">
            <label for="quimica">Química</label>
            <br>
            <input type="checkbox" id="biologia" name="asignaturas" value="Biología">
            <label for="biologia">Biología</label>
            <br>
            <input type="checkbox" id="lengua" name="asignaturas" value="Lengua y Literatura">
            <label for="lengua">Lengua y Literatura</label>
            <br>
            <input type="checkbox" id="historia" name="asignaturas" value="Historia">
            <label for="historia">Historia</label>
            <br>
            <input type="checkbox" id="geografia" name="asignaturas" value="Geografía">
            <label for="geografia">Geografía</label>
        </div>        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>