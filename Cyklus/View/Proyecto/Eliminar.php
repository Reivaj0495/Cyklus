<div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar Proyecto <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form name="EliminarProyecto" method="post" action="<?php echo getUrl("Proyecto", "Proyecto", "deleteProyecto"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <?php
                        while($pro= mysqli_fetch_assoc($DatosProyecto)){
                      ?>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="pro_codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $pro['pro_codigo'];?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Metologia <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"id="met_pro_id" name="Methodologia" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $pro['met_pro_descripcion'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"id="pro_nombre" name="NombreProyecto" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $pro['pro_nombre'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Lider <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"id="usu_nickname" name="NombreUsuario" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $pro['usu_nickname'];?>">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Proyecto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input  id="tip_pro_id" name="TipoProyecto" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" readonly="" value="<?php echo $pro['tip_pro_descripcion'];?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="pro_descripcion" name="DescripcionProyecto" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" readonly="" value="<?php echo $pro['pro_descripcion'];?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Objetivos <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pro_objetivos" name="Proyecto_Objetivos" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" readonly="" value="<?php echo $pro['pro_objetivos'];?>">
                        </div>
                      </div>
                        
                        <?php
                            }
                        ?>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-danger" type="button">Eliminar</button><a href="<?php echo getUrl("Proyecto", "Proyecto","getProyecto");?>">
                            <a href="<?php echo getUrl("Proyecto", "Proyecto", "getProyecto");?>"> <button type="button" class="btn btn-primary">Volver</button> </a>    
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>