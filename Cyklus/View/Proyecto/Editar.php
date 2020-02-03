<div class="x_panel">
    <div class="x_title">
        <h2>Editar Proyecto <small> Campos Obligatorios (*)</small></h2>
         <div class="clearfix"></div>
    </div>
         <div class="x_content">
            <br>
                    <form name="EditarProyectos" method="post" action="<?php echo getUrl("Proyecto", "Proyecto", "EditarProyectos"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                <?php
                    while($Datos= mysqli_fetch_assoc($DatosEditar)){
                ?>
                      
                      <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Codigo <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="id" name="pro_codigo" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $Datos['pro_codigo']; ?>">
                           </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Metodologia <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"   name="met_pro_id" id="TipoMetodologia" >
                              <option value="<?php echo $Datos['met_pro_id']; ?>"> <?php echo $Datos['met_pro_descripcion']; ?>  </option>
                                <?php
                                    foreach ($DatosMe as $metodologia){
                                        
                                        if($Datos['met_pro_id']==$metodologia['met_pro_id']){
                                        echo '';
                                        }else{          
                                            echo "<option value='" . $metodologia['met_pro_id'] . "'>" . $metodologia['met_pro_descripcion'] . "</option>";
                                        }
                                    }
                               ?>
                            </select>
                        </div>
                      </div>
                        
                      <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nombre <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="pro_nombre" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $Datos['pro_nombre']; ?>">
                           </div>
                      </div>  
                      <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Descripcion <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="pro_descripcion" name="pro_descripcion" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $Datos['pro_descripcion']; ?>">
                           </div>
                      </div>
                      <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Objetivos <span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="pro_objetivos" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $Datos['pro_objetivos']; ?>">
                           </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tipo Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"   name="tip_pro_id" id="selectTipoProyecto" >
                                <option value="<?php echo $Datos['tip_pro_id']; ?>"> <?php echo $Datos['tip_pro_descripcion']; ?>  </option>
                                    <?php
                                        foreach ($DatosTipoP as $TipoPro ){
                                            if($TipoPro['tip_pro_id']==$Datos['tip_pro_id']){
                                                    echo '';
                                                }else{
                                                echo "<option value='" . $TipoPro['tip_pro_id'] . "'>" . $TipoPro['tip_pro_descripcion'] . "</option>";
                                                }
                                            } 
                                    ?>
                            </select>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Lider Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"   name="ins_id" id="selectLider" >
                              <option value="<?php echo $Datos['ins_id']; ?>"> <?php echo $Datos['usu_nickname']; ?>  </option>
                                    <?php
                                        foreach ($Instr as $Lider ){
                                            if($Datos['ins_id']==$Lider['ins_id']){
                                                echo '';
                                            }else {
                                                echo "<option value='" . $Lider['ins_id'] . "'>" . $Lider['usu_nickname'] . "</option>";
                                            }
                                        }
                                    ?>
                            </select>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Ficha Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control"   name="fic_id" id="selectFicha" >
                                <option value="<?php echo $Datos['fic_id']; ?>"> <?php echo "Ficha : ", $Datos['fic_id'],"  Programa : ", $Datos['prog_descripcion']; ?>  </option>
                                    <?php 
                                        foreach ($Ficha as $fic ){
                                            if($Datos['fic_id']==$fic['fic_id']){   
                                                echo '';
                                            }else{
                                                echo "<option value='" . $fic['fic_id'] . "'>" . "Ficha : ", $fic['fic_id'],"  Programa : ", $fic['prog_descripcion'] . "</option>";
                                            }
                                        }
                                ?>
                            </select>
                        </div>
                      </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Inicio <span class="required">*</span>
                          </label>
                            <div class="col-md-6 xdisplay_inputx form-group has-feedback">
                                <input type="datetime" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" name="fecha_inicio" value="<?php echo $Datos['fecha_fin']; ?>"  aria-describedby="inputSuccess2Status3">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Fin <span class="required">*</span>
                          </label>
                            <div class="col-md-6 xdisplay_inputx form-group has-feedback">
                                <input type="datetime" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" name="fecha_fin" value="<?php echo $Datos['fecha_fin']; ?>" aria-describedby="inputSuccess2Status3">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                          
                <?php
                    }
                ?>  
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-info "> Actualizar Proyecto</button> 
                                     <a href="<?php echo getUrl("Proyecto", "Proyecto", "getProyecto");?>">
                                 <button type="button" class="btn btn-primary">Volver</button> </a>
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>