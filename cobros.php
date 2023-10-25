<?php

session_start();

include 'header.php';
include 'sidebarmenu.php';

include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();    

$consultaSocio = "SELECT idUsuario,nombre,apellidoPat,apellidoMat,telefono,rol,medidor FROM usuario";

$datos=$conexionBD->conexion->query($consultaSocio);


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">


        <div class="row">
            <div id="confimacionInsertCobro">
            
            </div>
        </div>

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1>Registro Cobros</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
            <div class="col-1">
            
            </div>
        <div class="col-8">
            <form action="" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                    <label for="">Tipo Pago</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="consumo">Consumo de Agua</option>
                        <option value="multa">Multa</option>
                    </select>
                    </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                    <label for="">Socio</label>
                    <select class="form-control" name="socio" id="socio">
                        
                        <option value="0">--Elegir Socio--</option>
                          <?php foreach ($datos as $usuario) : ?>
                                <option value="<?php echo $usuario['idUsuario']; ?>"><?php echo $usuario['nombre']." ".$usuario['apellidoPat']; ?></option>
                          <?php endforeach; ?>
                       
                    </select>
                    </div>
                </div>
               
            </div>
                

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                        <label for="">Monto</label>
                        <input type="text"
                            class="form-control" name="monto" id="monto" aria-describedby="helpId" placeholder="Monto (Bs)">
                        
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                        <label for="">Descuento</label>
                        <input type="text"
                            class="form-control" name="descuento" id="descuento" aria-describedby="helpId" placeholder="Descuento (Bs)">
                        
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                        <label for="">Fecha</label>
                        <input type="date"
                            class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Descuento (Bs)">
                        
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label for="">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripcion Cobro"></textarea>
                </div>

                <button type="button" class="btn btn-primary" onClick="cobrar();">Registrar Cobro</button>

                

            </form>    
        </div>
        <div class="col-3">
            
        </div>
    </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  


  <?php
  include 'footer.php';
  ?>