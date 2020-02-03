<div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Requisito <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form  name="crearRequisitos" method="post" action="<?php echo getUrl("Requisito", "Requisito", "InsertRequisitos"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Seleccione Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <select name="pro_codigo" type="text"  class="form-control" placeholder="">
                    <option value="0">Seleccione</option>
                <?php
                    foreach($Proyecto as $proyecto){
                        echo "<option value='" . $proyecto['pro_codigo'] . "'>"."Codigo: " . $proyecto['pro_codigo'] ."  Descripcion: ". $proyecto['pro_descripcion'] . "</option>";
                    }
                ?>
                </select>
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
                          <input name="req_nombre"   class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      
                      
                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" type="button" >Registrar</button><a href="<?php echo getUrl("Requisito", "Requisito", "getRequisitos");?>">
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>