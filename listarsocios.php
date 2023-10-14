<?php
include 'header.php';
include 'sidebarmenu.php';

include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();    

$consultaSocio = "SELECT idUsuario,nombre,apellidoPat,apellidoMat,telefono,rol FROM usuario";

$datos=$conexionBD->conexion->query($consultaSocio);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listar Socios</h1>
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Rol</th>
                    <th>Telefono</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php

                        
                        while($fila = mysqli_fetch_assoc($datos)){
                            
                            echo "<tr>";
                                $idUsuario = $fila['idUsuario'];
                                
                                echo "<td>".$fila['nombre']."</td>";
                                echo "<td>".$fila['apellidoPat']."</td>";
                                echo "<td>".$fila['apellidoMat']."</td>";
                                echo "<td>".$fila['rol']."</td>";
                                echo "<td>".$fila['telefono']."</td>";

                                echo "<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#update' onClick='actualizarReg($idUsuario)'><i class='fas fa-edit'></i></button></td>";
                                echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete'><i class='fas fa-trash'></i></button></td>";
                            echo "</tr>";
                        }
                      ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Rol</th>
                    <th>Telefono</th>
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
  


  <?php
  include 'footer.php';
  ?>