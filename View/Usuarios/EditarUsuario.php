<div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Usuario<small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form name="editarUsuario" method="post" action="<?php echo getUrl("Usuario", "Usuario", "postEditarUsuario"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                        
               
                <?php
                  foreach($Usuarios as $usuario){
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

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="dep_id">
                        <?php
                         foreach ($DepartamentoID as $depUsu){
                        ?>
                            <option value="<?php echo $depUsu['dep_id']; ?>"> <?php echo $depUsu['dep_descripcion']; ?>  </option>
                        <?php
                          while ($departamento= mysqli_fetch_assoc($Departamento)){
                              
                              if($depUsu['dep_id']==$departamento['dep_id']){
                                  echo '';
                                }else
                                 echo  "<option  value='". $departamento['dep_id'] ."' >".$departamento['dep_descripcion']."</option>";
                                }  
                         }
                        ?>
                        </select>
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  name="tip_doc_id" id="selectTipoDocumento" class="form-control" >
                                
                            <?php
                            foreach ($TipoDoUsuario as $usuario){
                        ?>
                        <option value="<?php echo $usuario['tip_doc_id']; ?>"> <?php echo $usuario['tip_doc_descripcion']; ?>  </option>
                         
                        <?php
                           while ($documento=mysqli_fetch_assoc($TipoDo)){
                                if($usuario['tip_doc_id']==$documento['tip_doc_id']){
                                    echo '';
                            }else
                                echo "<option value='" . $documento['tip_doc_id'] . "'>" . $documento['tip_doc_descripcion'] . "</option>";
                            }
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
                              foreach ($TipoUsu as $tipousuario){ 
                       ?>
                            <option value="<?php echo $tipousuario['tip_usu_id']; ?>"> <?php echo $tipousuario['tip_usu_descripcion']; ?>  </option>
                        <?php
                            while($tipoUsuario = mysqli_fetch_assoc($TipoUsuarios)){
                                if($tipousuario['tip_usu_id']==$tipoUsuario['tip_usu_id']){
                                    echo '';
                                }else
                                echo "<option value='" . $tipoUsuario['tip_usu_id'] . "'>" . $tipoUsuario['tip_usu_descripcion'] . "</option>";
                            }
                          }
                        ?>
                                
                            </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rol <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"   name="rol_id" id="selectTipoDocumento" >
                                
                       <?php
                              foreach ($Rol as $tipoRol){ 
                       ?>
                            <option value="<?php echo $tipoRol['rol_id']; ?>"> <?php echo $tipoRol['rol_descripcion']; ?>  </option>
                        <?php
                            while($tipoUsuario = mysqli_fetch_assoc($Roles)){
                                if($tipoRol['rol_id']==$tipoUsuario['rol_id']){
                                    echo '';
                                }else
                                echo "<option value='" . $tipoUsuario['rol_id'] . "'>" . $tipoUsuario['rol_descripcion'] . "</option>";
                            }
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
                                foreach ($Centro as $usuarioCentro){
                            ?>
                              <option value="<?php echo $usuarioCentro['cen_id']; ?>"> <?php echo $usuarioCentro['cen_descripcion']; ?>  </option>
                            <?php
                            
                            while($centrales= mysqli_fetch_assoc($Centros)){
                                
                                if($usuarioCentro['cen_id']==$centrales['cen_id']){
                                    echo '';
                            }else   
                                echo "<option value='" . $centrales['cen_id'] . "'>" . $centrales['cen_descripcion'] . "</option>";
                            }
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