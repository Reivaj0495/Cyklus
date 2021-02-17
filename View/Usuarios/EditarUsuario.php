<div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Usuario<small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form name="editarUsuario" method="post" action="<?php echo getUrl("Usuario", "Usuario", "postEditarUsuario"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                    <?php
                      foreach($datosUsuario as $usuario)
                      {
                        //dd($usuario["dep_id"]);
                        //dd($info["departamento"]);
                    ?>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código <span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="usu_id" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $usuario['usu_id']; ?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="usu_nickname" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo 
                                $usuario['usu_nickname'];?>">
                              </div>
                            </div>
                           
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña <span class="required">*</span></label>
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
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="dep_id">
                                      <?php
                                        foreach ($info['departamento'] as $depUsu){
                                      ?>
                                        <option value="<?php echo $depUsu['dep_id'];?>" echo <?php if( $depUsu['dep_id'] == $usuario['dep_id']) { ?> selected="true"> <?php } echo $depUsu['dep_descripcion'];?>  </option>
                                      <?php
                                        }
                                      ?>  
                                    </select>
                                </div>
                              </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select  name="tip_doc_id" id="selectTipoDocumento" class="form-control" >
                                    <?php
                                      foreach ($info['tipo_documento'] as $tipdoc){
                                    ?>
                                      <option value="<?php echo $tipdoc['tip_doc_id'];?>" echo <?php if( $usuario['tip_doc_id'] == $tipdoc['tip_doc_id']) { ?> selected="true" > <?php } echo $tipdoc['tip_doc_descripcion']; ?>  </option>
                                    <?php
                                      }
                                    ?>
                                  </select>
                              </div>
                            </div>
                              
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Documento <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input   name="usu_documento" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" value="<?php echo $usuario['usu_documento']; ?>">
                              </div>
                            </div>   

                              <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Usuario <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control"   name="tip_usu_id" id="selectTipoDocumento" >
                                    <?php
                                      foreach ($info['tipo_usuario'] as $tipousuario){ 
                                    ?>
                                      <option value="<?php echo $tipousuario['tip_usu_id'];?>" echo <?php if( $usuario['tip_usu_id'] == $tipousuario['tip_usu_id']) { ?> selected> <?php } echo $tipousuario['tip_usu_descripcion']; ?>  </option>
                                      <?php
                                       }
                                      ?>
                                  </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Rol <span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control"   name="rol_id" id="selectTipoDocumento" >
                                    <?php
                                      foreach ($info['rol'] as $tipoRol){ 
                                    ?>
                                      <option value="<?php echo $tipoRol['rol_id'];?>" echo <?php if( $usuario['rol_id'] == $tipoRol['rol_id']) { ?> selected> <?php } echo $tipoRol['rol_descripcion']; ?>  </option>
                                    <?php
                                      }
                                    ?>
                                  </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Centro <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control"   name="cen_id" id="selectTipoDocumento" >
                                      
                             <?php
                                foreach ($info['centro'] as $usuarioCentro){
                             ?>
                              <option value="<?php echo $usuarioCentro['cen_id'];?>" echo <?php if( $usuario['cen_id'] == $usuarioCentro['cen_id']) { ?> selected> <?php } echo $usuarioCentro['cen_descripcion']; ?>  </option>
                             <?php
                               }
                             ?>
                                  
                                 
                              
                                      
                                  </select>
                              </div>
                            </div>
                    <?php
                      }
                    ?>
                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-info "> Actualizar usuario</button> 
                                     <a href="<?php echo getUrl("Usuario", "Usuario", "ListarUsuarios");?>">
                                 <button type="button" class="btn btn-primary">Volver</button> </a>
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>