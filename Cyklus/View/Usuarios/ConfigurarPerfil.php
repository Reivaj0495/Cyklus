       <form name="crearUsuario" method="post" action="<?php echo getUrl("Usuario","Usuario","postConfig"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Configuracion De Perfil </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                <?php
                    while($usuario = mysqli_fetch_assoc($DatosConf)){
                ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="usu_id" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $usuario['usu_id']; ?>">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="usu_nickname" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $usuario['usu_nickname'];?>">
                        </div>
                      </div>
                     
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="usu_password" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"value="<?php echo $usuario['usu_password']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">celular <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="usu_celular" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" value="<?php echo $usuario['usu_celular']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="usu_telefono" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" value="<?php echo $usuario['usu_telefono']; ?>">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   name="usu_email" class="date-picker form-control col-md-7 col-xs-12" required="required" type="email" value="<?php echo $usuario['usu_email']; ?>">
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-info "> Actualizar usuario</button> 
                                     <a href="<?php echo getUrl("Usuario", "Usuario", "ListarUsuarios");?>">
                                 <button type="button" class="btn btn-primary">Volver</button> </a>
                        </div>
                      </div>
                  </div>
            </div>
       </form>