<?php

include('conexion.php');
$con = connection();

$id = $_POST['alu_id'];
$nombre = $_POST['alu_nombre'];
$apellidop = $_POST['alu_apellidop'];
$apellidom = $_POST['alu_apellidom'];
$matricula = $_POST['alu_matricula'];

$sql = "DELETE FROM alumno WHERE alu_id='$id'"; 
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: registroA.php");
};

?>