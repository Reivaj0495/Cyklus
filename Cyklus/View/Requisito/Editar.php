<div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Requisito<small>Campos Obligatorios (*)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form name="EditarRequisitos" method="post" action="<?php echo getUrl("Requisito", "Requisito","EditRequisitos"); ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                          <?php
    //echo "hola mundo ";
        while($emp= mysqli_fetch_assoc($Datos)){
    ?>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"id="req_id" name="req_id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $emp['req_id'];?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Proyecto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                               <select name="pro_codigo" id="selectProyecto" class="form-control">
            <?php
                foreach($Datos as $usu){ 
            ?>
                <option value="<?php echo $usu['pro_codigo']; ?>"> <?php echo $usu['pro_descripcion']; ?>  </option>
            <?php
                while($nom = mysqli_fetch_assoc($proyectos)){
                    if ($usu['pro_codigo'] == $nom['pro_codigo']) {
                        echo '';
                    } else {
                        echo "<option value='" . $nom['pro_codigo'] . "'>" . $nom['pro_descripcion'] . "</option>";
                      }
                    }
                 }
              ?>
            </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Aprendiz <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="apr_id" id="selectAprendiz" class="form-control">
                <?php
                    foreach($Datos as $usu){ 
                    ?>
                     <option value="<?php echo $usu['apr_id']; ?>"> <?php echo $usu['usu_nickname']; ?>  </option>
                <?php
                    while($nom = mysqli_fetch_assoc($datosNombre)){
                        if($usu['apr_id']==$nom['apr_id']){
                            echo '';
                        }else
                        echo "<option value='" . $nom['apr_id'] . "'>" . $nom['usu_nickname'] . "</option>";
                    }
                  }
                ?>
            </select>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del Requisito <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="req_nombre" name="req_nombre" class="date-picker form-control col-md-7 col-xs-12" required="" type="text" value="<?php echo $emp['req_nombre'];?>">
                        </div>
                      </div>
                      
                        
                        <?php
        }
        ?>
                        
                      <!--<div class="ln_solid"></div>-->
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" type="button" >Editar</button> <a href="<?php echo getUrl("Requisitos", "Requisitos","getRequisitos");?>">
                        </div>
                      </div>
                      
                      </div>
                    </form>
                  </div>
                </div>