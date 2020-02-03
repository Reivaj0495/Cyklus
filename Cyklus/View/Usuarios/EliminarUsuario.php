<div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar Usuario <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form name="EliminarUsuario" method="post" action="<?php echo getUrl("Usuario", "Usuario", "postEliminarUsuario"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                       <?php
                    foreach($Buscar as $usuario){
                ?>
           <input type="hidden" name="usu_id" aria-describedby="emailHelp" required value="<?php echo $usuario['usu_id']; ?>" >
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre de Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="usu_nickname" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $usuario['usu_nickname'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Documento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="usu_documento" required="required" class="form-control col-md-7 col-xs-12"  readonly value="<?php echo $usuario['usu_documento'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Rol <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="rol_id" required="required" class="form-control col-md-7 col-xs-12"  readonly value="<?php echo $usuario['rol_descripcion'];?>">
                        </div>
                      </div>
                       
                       <?php
    }
?>
                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-danger "> Eliminar usuario</button> 
                                <a href="<?php echo getUrl("Usuario", "Usuario", "ListarUsuarios");?>">
                            <button type="button" class="btn btn-primary">Volver</button> </a>
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>