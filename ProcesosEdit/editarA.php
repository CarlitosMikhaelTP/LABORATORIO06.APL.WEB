<?php

include('conexionDB/conexion.php');
$con = connection();

$id=$_GET('alu_id');

$sql = "SELECT * FROM alumno WHERE alu_id='$id'";
$query = msqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar alumno</title>
    
</head>
<body>
    <div class="users-form">
        <form action="CRUD/actualizarA.php" method="POST">
            <h1>Editar Alumno</h1>
            <input type="hidden" name="alu_id" value="<?= $row['alu_id']?>">
            <input type="text" name="alu_nombre" value="<?= $row['alu_id']?>">
            <input type="text" name="alu_apellidop" value="<?= $row['alu_apellidop']?>">
            <input type="text" name="alu_apellidom" value="<?= $row['alu_apellidom']?>">
            <input type="text" name="alu_matricula" value="<?= $row['alu_matricula']?>">
            <input type="submit" value="Actualizar Alumno">
        </form>
    </div>
    
</body>
</html>