<?php
header('Content-Type: application/json');

include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar(); 

$usuario = $_GET['usuario'];
$password = $_GET['password'];


$query = "SELECT idUsuario,nombre,apellidoPat,apellidoMat FROM usuario WHERE usuario = '$usuario' AND password = '$password'";
$result = $conexionBD->conexion->query($query);

if ($result->num_rows > 0) {
    echo json_encode(array('success' => true, 'message' => 'Inicio de sesión exitoso'));
} else {
    echo json_encode(array('success' => false, 'message' => 'Inicio de sesión fallido'));
}
$conexionBD->conexion->close();


?>




