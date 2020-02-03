<?php
    include_once '../Model/Requisitos/RequisitosModel.php';
    $ObjRequisitos= new RequisitosModel();

    $tip_usuario = $_POST['tipoUsuario'];

    $fichaConsulta = "SELECT ficha.fic_id FROM ficha";
    $ficha = $ObjRequisitos->consultar($fichaConsulta);


    if($tip_usuario == 1 || $tip_usuario == 2){
        ?>
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ficha Curso <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ficha" id="ficha" class="form-control" >
                                <option disabled selected>Seleccione...</option>
                                    <?php
                                        while($ficha1 = mysqli_fetch_assoc($ficha)){
                                            echo "<option value='" . $ficha1['fic_id'] . "'>" . $ficha1['fic_id'] . "</option>";
                                        }
                                    ?>
                                </select>
                        </div>
        <?php
    }
    if($tip_usuario == 3){

    }
    
?>