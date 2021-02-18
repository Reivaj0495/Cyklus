    <div class="x_panel">
        <div class="x_title">
            <h2>Registro de Requisito <small>Campos Obligatorios (*)</small></h2>
            <div class="clearfix"></div>
        </div>
            <div class="x_content">
                <form  name="crearRequisitos" method="post" action="<?php echo getUrl("Requisito", "Requisito", "InsertarRequisitoCo"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="pro_codigo" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php foreach ($Proyecto as $aprendiz){ echo $aprendiz['pro_codigo']; }?>">
                        </div>
                      </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre Aprendiz <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="apr_id" type="text"  class="form-control" placeholder="">
                            <option value="0">Seleccione</option>
                                <?php
                                    foreach($consulta as $aprendiz){
                                        echo "<option value='" . $aprendiz['apr_id'] . "'>". $aprendiz['usu_nickname'] . "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Requerimiento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="req_nombre" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" type="button" >Registrar</button>
                        </div>
                      </div>
                </form>
            </div>
    </div>
                