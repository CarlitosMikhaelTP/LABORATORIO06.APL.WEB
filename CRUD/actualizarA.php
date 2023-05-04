<?php

include('conexionDB/conexion.php');
$con = connection();

$id = $_POST['alu_id'];
$nombre = $_POST['alu_nombre'];
$apellidop = $_POST['alu_apellidop'];
$apellidom = $_POST['alu_apellidom'];
$matricula = $_POST['alu_matricula'];

$sql = "UPDATE alumno SET alu_nombre='$nombre' , alu_apellidop='$apellidop', alu_apellidom='$apellidom' , alu_matricula='$matricula' WHERE alu_id='$id'"; 
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: Registros/registroA.php");
};

?>