<?php 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $asignaturas_matriculadas = $_POST['asignaturas'];
?>

<div class="card">
    <h2>Datos de usuario</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Asignaturas matriculadas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellidos; ?></td>
                <td><?php echo $edad; ($edad < 18) ? "<span style='color: red'>$edad (menor de edad)</span>" : "<span style='color: green'>$edad (mayor de edad)</span>" ?></td>
                <td><?php echo $peso; ?></td>
                <td><?php echo $altura; ?></td>
                <td>
                    <ul>
                        <?php foreach ($asignaturas_matriculadas as $asignatura) { ?>
                            <li><?php echo $asignatura; ?></li>
                        <?php  } ?>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>