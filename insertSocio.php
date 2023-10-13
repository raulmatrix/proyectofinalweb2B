<?php  

    include 'conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();    

    $usuario = $_POST['usuario'];
    $passw = $_POST['passw'];
    $nombre = $_POST['nombre'];
    $apellidoPat = $_POST['apellidoPat'];
    $apellidoMat = $_POST['apellidoMat'];
    $telefono = $_POST['telefono'];
    $fechaNac = $_POST['fechaNac'];
    $carnet = $_POST['carnet'];
    $rol = $_POST['rol'];
    $sexo = $_POST['sexo'];
    $datosAdi = $_POST['datosAdi'];
    $direccion = $_POST['direccion'];

    
    $sqlinsert = "INSERT INTO usuario (usuario, password, nombre, apellidoPat, apellidoMat, direccionEsp, telefono, sexo, fechaNac, carnet, varios) 
    VALUES ('$usuario', '$passw', '$nombre', '$apellidoPat', ' $apellidoMat', '$direccion','$telefono', '$rol', '$sexo', '$fechaNac', '$carnet',' $datosAdi')";

    if ($conn->query($sqlinsert) === TRUE) {
    
?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Datos Registrados </strong> La insercion fue correcta
            </div>
            
            <script>
              $(".alert").alert();
            </script>

<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>