<?php
include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();  

$idUsuario = $_POST['idSocio'];

$consultaSocio = "SELECT idUsuario,nombre,apellidoPat,apellidoMat,telefono,rol,usuario,password,direccionEsp,sexo,fechaNac,carnet,varios FROM usuario WHERE idUsuario=$idUsuario";

$datos=$conexionBD->conexion->query($consultaSocio); //ejecutar la consulta

   
      $fila = mysqli_fetch_assoc($datos);
      
      $idEnvio = $fila['idUsuario'];

      /*formatear date con php*/
      $fechaNac = $fila['fechaNac'];

      $fecha = date_create($fechaNac);
      $fechaNacFormateada = date_format($fecha, "Y-m-d");


     ?>

      <div class="modal-body">
        <!--contenido para mostrar en actualizacion-->
        <form action="" method="get">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text"
                        class="form-control" value="<?php echo $fila['nombre'];?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">

                      <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="apellidoPat">Apellido Paterno</label>
                              <input type="text"
                                class="form-control" value="<?php echo $fila['apellidoPat']?>" name="apellidoPat" id="apellidoPat" aria-describedby="helpId" placeholder="">
                              
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="apellidoMat">Apellido Materno</label>
                              <input type="text"
                                class="form-control" value="<?php echo $fila['apellidoMat']?>" name="apellidoMat" id="apellidoMat" aria-describedby="helpId" placeholder="">
                              
                            </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="telefono">Telefono</label>
                                  <input type="text"
                                    class="form-control" value="<?php echo $fila['telefono']?>" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="fechaNac">Fecha Nacimiento</label>
                                  <input type="date"
                                    class="form-control" value="<?php echo "".$fechaNacFormateada?>" name="fechaNac" id="fechaNac" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-4">
                                <div class="form-group">
                                  <label for="carnet">Carnet</label>
                                  <input type="text"
                                    class="form-control" value="<?php echo $fila['carnet']?>" name="carnet" id="carnet" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-6">
                                <div class="form-group">
                                  <label for="usuario">Usuario</label>
                                  <input type="text"
                                    class="form-control" value="<?php echo $fila['usuario']?>" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                          <div class="col-6">
                                <div class="form-group">
                                  <label for="passw">Contraseña</label>
                                  <input type="password"
                                    class="form-control" value="<?php echo $fila['password']?>" name="passw" id="passw" aria-describedby="helpId" placeholder="">
                                </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-6">
                               <div class="form-group">
                                 <label for="rol">Rol de usuario</label>
                                 <select class="form-control" name="rol" id="rol">
                                   <option>Administrador</option>
                                   <option>Socio</option>
                                 </select>
                               </div>
                          </div>
                          <div class="col-6">
                          <label for="sexo">Sexo</label>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="sexo" id="sexo1" value="hombre" >
                                    Hombre
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
                                class="form-control" value="<?php echo $fila['varios']?>" name="datosAd" id="datosAd" aria-describedby="helpId" placeholder="Datos Adicionales">
                              
                            </div>
                        </div>
                          
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="dirsocio">Direccion Socio</label>
                            <textarea class="form-control"  name="dirsocio" id="dirsocio" rows="3"><?php echo $fila['direccionEsp']?></textarea>
                          </div>
                        </div>
                      </div>  

                     
                    </div>
                </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="ejecutarUpdateSocio(<?php echo $idUsuario; ?>)">Guardar</button>

      </div>




