<?php
        include_once '../Model/Requisitos/RequisitosModel.php';
        $ObjRequisitos= new RequisitosModel();
        
        $nomPro = $_POST['proyecto'];

        $sqlProyecto = "SELECT usuario.usu_nickname, aprendiz.usu_id, requisito.apr_id, requisito.req_nombre, proyecto.pro_codigo, proyecto.pro_descripcion, requisito.req_id 
                        FROM usuario,aprendiz,requisito,proyecto 
                        WHERE proyecto.pro_descripcion = '$nomPro' AND usuario.tip_usu_id AND usuario.usu_id = aprendiz.usu_id AND requisito.apr_id = aprendiz.apr_id AND proyecto.pro_codigo = requisito.pro_codigo";
        $EjeProyecto = $ObjRequisitos->consultar($sqlProyecto);
?>

        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre Proyecto</th>
                        <th>Encargado</th>
                        <th>Requisito</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                       while($usu= mysqli_fetch_assoc($EjeProyecto)){    
                                echo "<tr>";
                                echo     "<td>" . $usu['req_id'] . "</td>";
                                echo     "<td>" . $usu['pro_descripcion'] . "</td>"; 
                                echo     "<td>" . $usu['usu_nickname'] . "</td>" ;
                                echo     "<td>" . $usu['req_nombre'] . "</td>" ;
          
                                //echo     "<td><a href='".getUrl("Requisito", "Requisito", "EditarRequisitos",array("id"=>$usu['req_id']))."'<button class='btn btn-success '> Editar</a></td>";
                                //echo    "<td><a href='".getUrl("Requisito", "Requisito", "EliminarRequisitos",array("id"=>$usu['req_id']))."'<button type='button' class='btn btn-danger'> Eliminar</a></td>";
                                echo "<tr>"; 
                        }
                    ?>
                </tbody>
            </table>

    