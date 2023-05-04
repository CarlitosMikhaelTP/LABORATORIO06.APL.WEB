<?php
include("conexionDB/conexion.php");

$con = connection();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos CRUD</title>
    <link rel="stylesheet"  href="stylesDB/styles.css">
</head>
<body>
    <div class="users-form">
        <form action="insertarA.php" method="POST">
            <h1>Registrar Alumno</h1>

            <input type="text" name="alu_nombre">
            <input type="text" name="alu_apellidop">
            <input type="text" name="alu_apellidom">
            <input type="text" name="alu_matricula">

            <input type="submit" value="Registrar Alumno">
        </form>
        <div class="users-table">
            <h2>Alumnos Registrados</h2>
            <table>
                <thead>
                    <tr>
                       <th>Id</th>
                       <th>Nombre del Alumno</th>
                       <th>Apellido Paterno</th>
                       <th>Apellido Materno</th>
                       <th>Matrícula</th>
                       <th></th>
                       <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_array($query)):
                    ?>

                  <tr>
                    <th> <?= $row['alu_id'] ?> </th>
                    <th> <?= $row['alu_nombre'] ?> </th>
                    <th> <?= $row['alu_apellidop'] ?> </th>
                    <th> <?= $row['alu_apellidom'] ?> </th>
                    <th> <?= $row['alu_matricula'] ?> </th>

                    <th><a href="ProcesosEdit/editarA.php?id=<?= $row['alu_id'] ?>" class="users-table--edit"> Editar</a></th>
                    <th><a href="CRUD/eliminarA.php?id=<?= $row['alu_id'] ?>" class="users-table--delete"> Eliminar</a></th>
                  </tr>

                  <?php 
                  endwhile;?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>