<?php  

    include 'conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();    

    
    $tipoPago = $_POST['tipoPago'];
    $socio = $_POST['socio'];
    $monto = $_POST['monto'];
    $descuento = $_POST['descuento'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
 

    // Obtener el mes y el año de cobro
    $mes = date("m", strtotime($fecha));
    $anio = date("Y", strtotime($fecha));
    
    $sqlinsert = "INSERT INTO cobro (fecha, monto, descuento, mes, anio, tipoCobro, descripcion, Usuario_idUsuario)
     VALUES ('$fecha', '$monto', '$descuento', '$mes', '$anio', ' $tipoPago', '$descripcion','$socio')";

    if ($conexionBD->conexion->query($sqlinsert) === TRUE) {
    
?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Datos Registrados </strong> El cobro fue correcto
            </div>
            
            <script>
              $(".alert").alert();
            </script>

<?php
    } else {
        echo "Error: " . $sqlinsert . "<br>".$conexionBD->conexion->error ;
    }

    $conexionBD->conexion->close();

?>