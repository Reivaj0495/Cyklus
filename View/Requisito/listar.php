   <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Requisitos</h1>
        </div>
    </div>
        <div class="row">
            <div class="col-md-3">
             <div class="input-group">
               <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
               <input type="text" class="form-control" id="search" placeholder="Buscar Requisito">
             </div>
            </div>
        </div>
                        <!-- /.row -->
    <div class="row"> 
        <div class="form-group">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Proyecto</th>
                        <th>Nombre del Aprendiz</th>
                        <th>Nombre del Requisito</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       while($usu= mysqli_fetch_assoc($requisitos)){    
                                echo "<tr>";
                                echo     "<td>" . $usu['req_id'] . "</td>";
                                echo     "<td>" . $usu['pro_descripcion'] . "</td>"; 
                                echo     "<td>" . $usu['usu_nickname'] . "</td>" ;
                                echo     "<td>" . $usu['req_nombre'] . "</td>" ;
          
                                echo     "<td><a href='".getUrl("Requisito", "Requisito", "EditarRequisitos",array("id"=>$usu['req_id']))."'<button class='btn btn-success '> Editar</a></td>";
                                echo    "<td><a href='".getUrl("Requisito", "Requisito", "EliminarRequisitos",array("id"=>$usu['req_id']))."'<button type='button' class='btn btn-danger'> Eliminar</a></td>";
                                echo "<td>"; 
                        }
                    ?>
                </tbody>
            </table>
        </div>
                
    </div>