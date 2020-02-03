
     <form name="crearUsuario" method="post" action="<?php echo getUrl("Usuario","Usuario","postCrearUsuario"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
<div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar Usuario <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
               

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="usu_nickname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contraseña <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="usu_password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Celular <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="usu_celular"  class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="usu_telefono"  class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="usu_email"  class="date-picker form-control col-md-7 col-xs-12" required="required" type="email">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <select name="dep_id" id="selectDepartamento" class="form-control" placeholder="">
                    <option disabled selected>Seleccione...</option>
                <?php
                    foreach($Departamento as $departamento){
                        echo "<option value='" . $departamento['dep_id'] . "'>" . $departamento['dep_descripcion'] . "</option>";
                    }
                ?>
                </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="tip_doc_id" id="selectTipoDocumento" class="form-control">
                    <option disabled selected>Seleccione...</option>
                <?php
                    foreach($TipoDo as $documento){
                        echo "<option value='" . $documento['tip_doc_id'] . "'>" . $documento['tip_doc_descripcion'] . "</option>";
                    }
                ?>
                </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Documento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="usu_documento"  class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Usuario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <select name="tip_usu_id" id="tipoUsuario" class="form-control" onchange="campoFicha()">
                          <option disabled selected>Seleccione...</option>
                            <?php
                                foreach($TipoUsu as $tipousuario){
                                    echo "<option value='" . $tipousuario['tip_usu_id'] . "'>" . $tipousuario['tip_usu_descripcion'] . "</option>";
                                }
                            ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group" id="ficha">

                      </div>
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rol <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="rol_id" id="selectTipoDocumento" class="form-control">
                    <option disabled selected>Seleccione...</option>
                <?php
                    foreach($Roles as $rol){
                        echo "<option value='" . $rol['rol_id'] . "'>" . $rol['rol_descripcion'] . "</option>";
                    }
                ?>
                </select>
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Centro <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="cen_id" id="selectTipoDocumento" class="form-control">
                    <option disabled selected>Seleccione...</option>
                <?php
                    foreach($Centros as $centro){
                        echo "<option value='" . $centro['cen_id'] . "'>" . $centro['cen_descripcion'] . "</option>";
                    }
                ?>
                </select>
                        </div>
                      </div>


                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <select name="usu_estado" id="UsoEstado" class="form-control">
                                <option disabled selected>selecccione...</option>
                                <option>Activo</option>
                                <option>Inactivo</option>
                            </select>
                        </div>
                      </div>

                      
                      <!--<div class="ln_solid"></div>-->
                      <div class="row">
       <div class="form-group">
            <div class="row col-lg-1">
            </div>
            <div class="row col-lg-4">

            </div>
            <div class="row col-lg-1">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
            <div class="row col-lg-5">

            </div>
        </div>
    </div>
                      
                      </div>
                    </form>
                  </div>
                </div>

<script src="../Ajax/jquery-3.3.1.min.js"></script>
<script src="../Ajax/campoFichaAjax.js"></script>