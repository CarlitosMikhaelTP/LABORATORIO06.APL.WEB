<?php
include("conexionDB/conexion.php");
$con = connection();

$id = null;
$nombre = $_POST['alu_nombre'];
$apellidop = $_POST['alu_apellidop'];
$apellidom = $_POST['alu_apellidom'];
$matricula = $_POST['alu_matricula'];

$sql = "INSERT INTO alumno VALUES('$id','$nombre','$apellidop','$apellidom','$matricula')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: Registros/registroA.php");
};
?>