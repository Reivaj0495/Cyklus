  <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Usuarios</h1>
        </div>
    </div>
  <div class="row">
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input type="text" class="form-control" id="search" placeholder="Buscar Usuario">
      </div>
    </div> 
  </div>
<div class="row">
    <div class="col-md-12" id="result"> </div>
  </div>
                        <!-- /.row -->
    <div class="row"> 
        <div class="form-group">
            <table class="table table-striped" id="tablita">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Departamento</th>
                        <th>Tipo Documento</th>
                        <th>Tipo Usuario</th>
                        <th>NickName</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Documento</th>
                        <th>Celular</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Centro</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach($usuario_Bd as $usuario){
                            echo 
                               "<tr>"
                                . "<td>" . $usuario['usuario']['usu_id'] . "</td>" //Usuario
                                ."<td>";
                                    foreach($usuario['departamento'] as $departamento){
                                            echo $departamento['dep_descripcion']."<br>";
                                             }
                                echo "</td>"
                                    ."<td>";
                                    foreach($usuario['documento'] as $documento){
                                            echo $documento['tip_doc_descripcion']."<br>";
                                             }
                                echo "</td>"
                                    . "<td>";
                                    foreach($usuario['tipo'] as $tipo_U){
                                            echo $tipo_U['tip_usu_descripcion']."<br>";
                                             }
                                echo "</td>"
                                    . "<td>" . $usuario['usuario']['usu_nickname'] . "</td>" // NickName
                                    . "<td>" . $usuario['usuario']['usu_password'] . "</td>" // Contraseña
                                    ."<td>";
                                    foreach($usuario['rol'] as $documento){
                                            echo $documento['rol_descripcion']."<br>";
                                             }
                                echo "</td>"
                                    . "<td>" . $usuario['usuario']['usu_documento'] . "</td>"// Documento
                                    . "<td>" . $usuario['usuario']['usu_celular'] . "</td>" // Celular
                                    . "<td>" . $usuario['usuario']['usu_telefono'] . "</td>" // Telefono
                                    . "<td>" . $usuario['usuario']['usu_email'] . "</td>" // Email
                                    . "<td>"; foreach($usuario['centro'] as $centro){
                                            echo $centro['cen_descripcion']."<br>";
                                             }
                                echo "<td>"."<button type='button' id='".$usuario['usuario']['usu_id']."' class='btn btn-success' onclick='cambio(this);'>".$usuario['usuario']['usu_estado']."</button>"."</td>"
                                    . "<td><a href='".getUrl("Usuario", "Usuario", "getEditarUsuario",array("usu_id"=>$usuario['usuario']['usu_id']))."'<button class='btn btn-success '> Editar</a></td>"
                                    ."<td><a href='".getUrl("Usuario", "Usuario", "getEliminarUsuario",array("usu_id"=>$usuario['usuario']['usu_id']))."'<button type='button' class='btn btn-danger'> Eliminar</a></td>"
                                    . "<td>"; 
                        }
                    ?>
                </tbody>
            </table>
        </div>
                
    </div>

    <script src="../Web/vendor/jquery/jquery.min.js"></script>
    <script src="../Ajax/cambioEstado.js"></script>
    <script src="../Ajax/jquery-3.3.1.min.js">
    </script>
    <script type="text/javascript" src="../Ajax/search.js"></script>