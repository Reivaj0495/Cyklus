<div class="x_panel">
    <div class="x_title">
        <h2>Listado de Proyectos<small>*Click en el codigo para revisar requisitos</small></h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Código</th>
            <th>Nombre Proyecto</th>
            <th>Lider</th>
            <th>Metodología</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $i=1;
                while($pro= mysqli_fetch_assoc($listar)){
                    echo"<tr>";
                    echo "<td>" .$i."</td>";
                    echo "<td> <a href='".getUrl("Requisito", "Requisito", "ListarRequisitoCodigo", array("id"=>$pro['pro_codigo']))."'>".$pro['pro_codigo'] ."</td>";
                    echo "<td>" .$pro['pro_nombre'] ."</td>";
                    echo "<td>" .$pro['usu_nickname'] ."</td>";
                    echo "<td>" .$pro['met_pro_descripcion'] ."</td>";
                    echo "<td> <a href='".getUrl("Proyecto", "Proyecto", "getEditarProyecto",array("id"=>$pro['pro_codigo']))."'<button class='btn btn-success '> Editar</a></td>";
                    echo "<td>  <a href='".getUrl("Proyecto", "Proyecto", "EliminarProyecto",array("id"=>$pro['pro_codigo']))."'<button type='button' class='btn btn-danger'> Eliminar</a></td>";
                   $i++;
                }
            ?>
        </tbody>
      </table>
    </div>
</div>