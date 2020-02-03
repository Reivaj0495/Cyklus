<div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Proyecto <small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form  name="crearProyecto" method="post" action="<?php echo getUrl("Proyecto", "Proyecto", "InsertProyecto"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Metodologia <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                               while($metogologia=mysqli_fetch_assoc($MetodologiaR)){
                            ?>  
                            <input type="hidden" name="met_pro_id" aria-describedby="emailHelp" required value="<?php echo $metogologia['met_pro_id']; ?>" >
                            
                            <input type="text" id="Metodologia" name="met_pro_descripcion" required="required" class="form-control col-md-7 col-xs-12"  readonly value="<?php echo $metogologia['met_pro_descripcion'];?>">
                          <?php
                               }
                            ?>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" name="pro_codigo" id="codigo" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Nombre" name="pro_nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Descripción</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="Descripcion" name="pro_descripcion" class="form-control col-md-7 col-xs-12" type="text"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Objetivos <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="Objetivos" name="pro_objetivos" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Seleccione El Tipo De Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="TipoMetodologia" name="tip_pro_id" type="text"  class="form-control" placeholder="">
                                <option value="0">Seleccione</option>
                                    <?php
                                        while($tipo=mysqli_fetch_assoc($Tipo)){
                                    echo "<option value='" . $tipo['tip_pro_id'] . "'>"."Codigo: " . $tipo['tip_pro_id'] ."  Descripcion: ". $tipo['tip_pro_descripcion'] . "</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lider <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="LiderProyecto" name="ins_id" type="text"  class="form-control" placeholder="">
                                <option value="0">Seleccione</option>
                                    <?php
                                        while($lider=mysqli_fetch_assoc($Inst)){
                                    echo "<option value='" . $lider['ins_id'] . "'>". $lider['usu_nickname'] . "</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                      </div>  
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ficha Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="Ficha" name="fic_id" type="text"  class="form-control" placeholder="">
                                <option value="0">Seleccione</option>
                                    <?php
                                        while($ficha=mysqli_fetch_assoc($Ficha)){
                                    echo "<option value='" . $ficha['fic_id'] . "'>". $ficha['fic_id'] ."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                      </div>  
                        
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Inicio <span class="required">*</span>
                          </label>
                            <div class="col-md-6 xdisplay_inputx form-group has-feedback">
                                <input type="datetime" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" name="fecha_inicio"  aria-describedby="inputSuccess2Status3">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Fin <span class="required">*</span>
                          </label>
                            <div class="col-md-6 xdisplay_inputx form-group has-feedback">
                                <input type="datetime" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" name="fecha_fin" aria-describedby="inputSuccess2Status3">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button  type="submit" class="btn btn-primary" type="button">Registrar</button>  
                            <a href="<?php echo getUrl("Proyecto", "Proyecto", "getProyecto");?>">
                            <button type="button" class="btn btn-info glyphicon glyphicon-chevron-left"> Volver </button></a>
                        </div>
                      </div>
                      
                      </div>
                    </form
                  </div>
                </div>