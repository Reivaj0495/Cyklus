<?php
    include_once '../Model/Requisitos/RequisitosModel.php';
    $ObjRequisitos= new RequisitosModel();

    $tip_usuario = $_POST['tipoUsuario'];

    $fichaConsulta = "SELECT ficha.fic_id FROM ficha";
    $ficha = $ObjRequisitos->consultar($fichaConsulta);


    if($tip_usuario == 1 || $tip_usuario == 2){
        ?>
        <div class="form-group col-md-6 col-xs-12">
            <label class="control-label">Ficha Curso <span class="required">*</span></label><br>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <select name="ficha" id="ficha" class="form-control" >
                    <option disabled selected>Seleccione...</option>
                    <?php
                        while($ficha1 = mysqli_fetch_assoc($ficha)){
                            echo "<option value='" . $ficha1['fic_id'] . "'>" . $ficha1['fic_id'] . "</option>";
                        }
                    ?>
                </select>
            </div>
        </div>                
        <?php
            }
            if($tip_usuario == 3){

            }
        ?>