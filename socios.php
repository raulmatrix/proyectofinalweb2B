<?php

session_start();

include 'header.php';
include 'sidebarmenu.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro Socios</h1>
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
          <div class="col-3">
            
          </div>
          <div class="col-6">
                <form action="" method="get">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text"
                        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">

                      <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="apellidoPat">Apellido Paterno</label>
                              <input type="text"
                                class="form-control" name="apellidoPat" id="apellidoPat" aria-describedby="helpId" placeholder="">
                              
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="apellidoMat">Apellido Materno</label>
                              <input type="text"
                                class="form-control" name="apellidoMat" id="apellidoMat" aria-describedby="helpId" placeholder="">
                              
                            </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="telefono">Telefono</label>
                                  <input type="text"
                                    class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="fechaNac">Fecha Nacimiento</label>
                                  <input type="date"
                                    class="form-control" name="fechaNac" id="fechaNac" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="carnet">Carnet</label>
                                  <input type="text"
                                    class="form-control" name="carnet" id="carnet" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-6">
                                <div class="form-group">
                                  <label for="usuario">Usuario</label>
                                  <input type="text"
                                    class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-6">
                                <div class="form-group">
                                  <label for="passw">Contraseña</label>
                                  <input type="password"
                                    class="form-control" name="passw" id="passw" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-4">
                               <div class="form-group">
                                 <label for="rol">Rol de usuario</label>
                                 <select class="form-control" name="rol" id="rol">
                                   <option>Administrador</option>
                                   <option>Socio</option>
                                   
                                 </select>
                               </div>
                          </div>

                          <div class="col-4">
                               <div class="form-group">
                                 <label for="rol">Nro Medidor</label>
                                 <input type="text" class="form-control" name="medidor" id="medidor" aria-describedby="helpId" placeholder="Nro de medidor asignado">
                              
                               </div>
                          </div>
                          <div class="col-4">
                          <label for="sexo">Sexo</label>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="sexo" id="sexo1" value="hombre" >
                                    Hombre
                                    <br>
                                    <input type="radio" class="form-check-input" name="sexo" id="sexo2" value="mujer" >
                                    Mujer
                                  </label>
                                </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                              <label for="datosAd">Datos adicionales</label>
                              <input type="text"
                                class="form-control" name="datosAd" id="datosAd" aria-describedby="helpId" placeholder="Datos Adicionales">
                              
                            </div>
                        </div>
                          
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="dirsocio">Direccion Socio</label>
                            <textarea class="form-control" name="dirsocio" id="dirsocio" rows="3"></textarea>
                          </div>
                        </div>
                      </div>  

                      <div class="row">
                        <div class="col-12">
                            <a name="" id="" onclick="insertarSocio();" class="btn btn-primary" href="#" role="button">Guardar datos</a>
                        </div>
                      </div>
                    </div>
                </form>
          </div>
          <div class="col-3">
            
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