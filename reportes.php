<?php

session_start();
include 'header.php';
include 'sidebarmenu.php';

include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();    

$consultaSocioCobro = "SELECT
u.nombre as nombre,
u.apellidoPat as apellidoPat,
u.apellidoMat as apellidoMat,
c.tipoCobro as tipoCobro,
c.monto as monto,
c.mes as mes,
c.anio as anio
FROM
usuario u
JOIN
cobro c ON u.idUsuario = c.Usuario_idUsuario";

/*$consultaSocio = "SELECT idUsuario,nombre,apellidoPat,apellidoMat,telefono,rol,medidor FROM usuario";
$datos=$conexionBD->conexion->query($consultaSocio);

$consultaCobro = "SELECT  idCobro, fecha, monto, descuento, mes, anio, tipoCobro, descripcion, Usuario_idUsuario FROM cobro";

*/
$cobroSocio=$conexionBD->conexion->query($consultaSocioCobro);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reportes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- Campo confirmacion de registro -->
        <div id="confimacionInsert">
            
        </div>
        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col-10">
                
            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Pago</th>
                    <th>Monto</th>
                    <th>Mes</th>
                    <th>Año</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php

                        
                        while($fila = mysqli_fetch_assoc($cobroSocio)){
                            
                            echo "<tr>";
                                
                                
                                echo "<td>".$fila['nombre']."</td>";
                                echo "<td>".$fila['apellidoPat']." ".$fila['apellidoMat']."</td>";
                            
                                echo "<td>".$fila['tipoCobro']."</td>";
                                echo "<td>".$fila['monto']."</td>";
                                echo "<td>".$fila['mes']."</td>";
                                echo "<td>".$fila['anio']."</td>";

                            echo "</tr>";
                        }
                      ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo Pago</th>
                    <th>Monto</th>
                    <th>Mes</th>
                    <th>Año</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-1">
            
          </div>
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
            <!--/.direct-chat -->

            <!-- TO DO List -->
           
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            
            <!-- /.card -->

            <!-- solid sales graph -->
           
            <!-- /.card -->

            <!-- Calendar -->
           
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div id="contenedorModal">
      <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Actualizar registro</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div id="contenidoSocio"> <!--contenido actualizar-->
              <div class="modal-body">
                <!--contenido para mostrar en actualizacion-->
                        <p>hola</p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateCliente()">Guardar</button>
              </div>
            </div><!--fin actualizar-->
          </div>
        </div>
      </div>
    </div><!--fin div contenedorModal-->
  

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="">Eliminar Registro</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            

          </div>
          <div class="modal-body">
              Esta seguro de eliminar el registro??
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" onClick='eliminarRegistro(<?php echo $idUsuario;?>)'>Eliminar</button>
          </div>
        </div>
      </div>
    </div>


  <?php
  include 'footer.php';
  ?>