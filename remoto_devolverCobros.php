<?php

include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar(); 

//$idUsuario = $_POST['idUsuario']; // Supongo que tienes un identificador único para cada usuario
$idUsuario = 1;
// Selecciona los cobros para el usuario dado
$sentencia = $conexionBD->conexion->prepare("SELECT * FROM cobro WHERE Usuario_idUsuario = ?");
$sentencia->bind_param('i', $idUsuario);
$sentencia->execute();

$resultado = $sentencia->get_result();

$cobros = array(); // Array para almacenar los resultados

while ($fila = $resultado->fetch_assoc()) {
    // Agrega cada fila al array
    $cobros[] = $fila;
}

// Envia el array como respuesta JSON
echo json_encode(["success" => true, "cobros" => $cobros], JSON_UNESCAPED_UNICODE);

$conexionBD->conexion->close();

?>
