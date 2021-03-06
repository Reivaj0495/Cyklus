<form name="crearUsuario" method="post" action="<?php echo getUrl("Usuario","Usuario","postCrearUsuario"); ?>" data-parsley-validate="true" class="form-horizontal form-label-left" novalidate="">
  <div class="x_panel">
      <div class="x_title">
        <h2>Registrar Usuario <small>Campos Obligatorios (*)</small></h2>
        <div class="clearfix"></div>
  </div>
  
                  
    <div class="x_content col-md-12 col-sm-12 col-xs-12">
      
        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label" > Nombre Usuario <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <input type="text" name="usu_nickname" required class="form-control col-md-7 col-xs-12" placeholder="Ingrese el nombre del usuario">
          </div>
        </div>
      
        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label"> Contraseña <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
          <input type="text" name="usu_password" required="true" class="form-control col-md-7 col-xs-12" placeholder="Ingrese la contraseña">
        </div>

    </div>  

    <div class="x_content col-md-12 col-sm-12 col-xs-12">

        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label">Celular <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <input name="usu_celular" type="number"  class="form-control col-md-7 col-xs-12" required="required" placeholder="Ingrese el numero celular">
          </div>
        </div>
        
        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label ">Telefono <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <input name="usu_telefono" type="number" class="form-control col-md-7 col-xs-12" required="true" placeholder="Ingrese el numero telefonico">
          </div>
        </div>

    </div>                          

    <div class="x_content col-md-12 col-sm-12 col-xs-12">
        
        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label ">Correo <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <input name="usu_email" type="email" class="form-control col-md-7 col-xs-12" required="required" placeholder="Ingrese el correo electronico">
          </div>
        </div>

        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label ">Departamento <span class="required">*</span></label><br>
            <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="dep_id" id="selectDepartamento" class="form-control">
                  <option disabled selected>Seleccione...</option>
                    <?php
                        foreach($datos['departamento'] as $departamento){
                            echo "<option value='" . $departamento['dep_id'] . "'>" . $departamento['dep_descripcion'] . "</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

    </div>      

    <div class="x_content col-md-12 col-sm-12 col-xs-12">

        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label ">Tipo Documento <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
              <select name="tip_doc_id" id="selectTipoDocumento" class="form-control">
                    <option disabled selected>Seleccione...</option>
                    <?php
                        foreach($datos['tipo_documento'] as $documento){
                            echo "<option value='" . $documento['tip_doc_id'] . "'>" . $documento['tip_doc_descripcion'] . "</option>";
                        }
                    ?>
              </select>
          </div>
        </div>
        
        <div class="form-group col-md-6 col-xs-12">
          <label class="control-label ">Documento <span class="required">*</span></label><br>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <input  name="usu_documento" type="number" class="form-control col-md-7 col-xs-12" required="required"  placeholder="Ingrese el numero del documento de identidad">
          </div>
        </div>

    </div>
      
    <div class="x_content col-md-12 col-sm-12 col-xs-12">

      <div class="form-group col-md-6 col-xs-12">
        <label class="control-label ">Tipo Usuario <span class="required">*</span></label><br>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select name="tip_usu_id" id="tipoUsuario" class="form-control" onchange="campoFicha()">
              <option disabled selected>Seleccione...</option>
                <?php
                    foreach($datos['tipo_usuario'] as $tipousuario){
                        echo "<option value='" . $tipousuario['tip_usu_id'] . "'>" . $tipousuario['tip_usu_descripcion'] . "</option>";
                    }
                ?>
            </select>
        </div>
      </div>

            <!-- no tocar esta parte es para usar un JS -->
                <div class="form-group" id="ficha"> </div>
            <!-- hasta aqui termina eso -->

      <div class="form-group col-md-6 col-xs-12">
        <label class="control-label">Rol <span class="required">*</span></label><br>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <select name="rol_id" id="selectTipoDocumento" class="form-control">
              <option disabled selected>Seleccione...</option>
                <?php
                    foreach($datos['rol'] as $rol){
                        echo "<option value='" . $rol['rol_id'] . "'>" . $rol['rol_descripcion'] . "</option>";
                    }
                ?>
          </select>
        </div>
      </div>

    </div>     

    <div class="x_content col-md-12 col-sm-12 col-xs-12"> 

    <div class="form-group col-md-6 col-xs-12">
            <label class="control-label">Centro <span class="required">*</span></label><br>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <select name="cen_id" id="selectTipoDocumento" class="form-control">
                  <option disabled selected>Seleccione...</option>
                  <?php
                      foreach($datos['centro'] as $centro){
                          echo "<option value='" . $centro['cen_id'] . "'>" . $centro['cen_descripcion'] . "</option>";
                      }
                  ?>
                </select>
            </div>
          </div>
          
          <div class="form-group col-md-6 col-xs-12">
              <label class="control-label">Estado <span class="required">*</span></label><br>
              <div class="col-md-8 col-sm-6 col-xs-12">
                    <select name="usu_estado" id="UsoEstado" class="form-control">
                      <option disabled selected>selecccione...</option>
                      <option>Activo</option>
                      <option>Inactivo</option>
                  </select>
              </div>
          </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="row col-lg-1"></div>
            <div class="row col-lg-4"></div>
            
              <div class="row col-lg-1">
                  <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            <div class="row col-lg-1">
                <button type="submit" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</form>
                  
<script src="../Ajax/jquery-3.3.1.min.js"></script>
<script src="../Ajax/campoFichaAjax.js"></script>