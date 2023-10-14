<?php  


    session_start(); //iniciando sesion

    

    include 'conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();    

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    

    $sql = "select idUsuario,usuario,password,nombre,apellidoPat from usuario where usuario='$valor1' and password='$valor2'";
    $resultado = $conexionBD->conexion->query($sql);

   if($resultado->num_rows>0){

    /*datos de socio*/
    $fila = mysqli_fetch_assoc($resultado);
    $idUsuario = $fila['idUsuario'];
    $nombre = $fila['nombre'];
    $apellidoPat = $fila['apellidoPat'];


    /*Varibles de sesion*/
    $_SESSION['var_idUsuario'] = $idUsuario;
    $_SESSION['var_nombre'] = $nombre;
    $_SESSION['var_apellidoPat'] = $apellidoPat;

    ?>
    <script>
    window.location.href = "http://localhost:9098/aguaotb/main.php"; //redireccion hacia la pagina principal
    </script>
    <?php
    }else{
    ?>
    <div class="alert alert-warning">
        <strong>Advertencia!</strong> El usuario o password que ingreso no es el correcto
    </div>

    <?php
    }

?>