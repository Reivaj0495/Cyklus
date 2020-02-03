<div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar Requisito <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                    <br>
                    <form name="EliminarRequisitos" method="post" action="<?php echo getUrl("Requisito", "Requisito", "deleteRequisitos"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                     <?php
                         while($Datos= mysqli_fetch_assoc($consulta)){
                    ?>
                  <input type="hidden" name="req_id" value="<?php echo $Datos['req_id'];?>"  readonly>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código Requisito<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="requisito" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $Datos['req_id'];?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre del Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="NombreProyecto" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $Datos['pro_descripcion'];?>">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Aprendiz <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="nombreAprendiz"class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" readonly value="<?php echo $Datos['usu_nickname'];?>">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre del Requisito <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="NombreRequisito" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $Datos['req_nombre'];?>">
                        </div>
                      </div>

                       <?php
                   }
                  ?>
                       
                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" type="button">Eliminar</button><a href="<?php echo getUrl("Requisito", "Requisito","getRequisitos");?>">
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>