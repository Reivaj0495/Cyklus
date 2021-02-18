<?php
include_once '../Model/Usuario/UsuarioModel.php';
include_once '../Lib/helper.php';

$ObjFuncion = new UsuariosModel();

$search = $_POST['search'];

$sql="SELECT * FROM usuario WHERE usu_nickname LIKE '%".$search."%' OR usu_documento LIKE '%".$search."%' OR usu_email LIKE '%".$search."%'";
            $user=$ObjFuncion->consultar($sql);
        
             $usuario_Bd=array();
             $i=0;
                  foreach($user as $usuario){
                  $usuario_Bd[$i]['usuario']=$usuario;

                  $sqlDepartamento="select usu.*, dep_descripcion from usuario usu, departamento dep"
                          . " WHERE usu.dep_id = dep.dep_id and usu_id =".$usuario['usu_id'];
                  $Departamentos=$ObjFuncion->consultar($sqlDepartamento);

                  $sqlTipoDocumento="SELECT usu.*, tip_doc_descripcion from usuario usu, tipo_documento tip WHERE usu.tip_doc_id= tip.tip_doc_id and usu_id =".$usuario['usu_id'];
                  $TipoDocumentos=$ObjFuncion->consultar($sqlTipoDocumento);

                  $sqlRol="SELECT usu.*, rol_descripcion "
                          . "from usuario usu, rol "
                          . "WHERE usu.rol_id= rol.rol_id and usu_id =".$usuario['usu_id'];
                  $Roles=$ObjFuncion->consultar($sqlRol);
                  
                  $sqlTipoUsu="SELECT usu.*, tip_usu_descripcion "
                          . "from usuario usu, tipo_usuario "
                          . "WHERE usu.tip_usu_id = tipo_usuario.tip_usu_id AND usu_id =".$usuario['usu_id'];
                  $tipo_usu=$ObjFuncion->consultar($sqlTipoUsu);
                  
                   $sqlCentro="SELECT usuario.usu_id, centro.cen_descripcion "
                        . "FROM usuario, centro "
                        . "WHERE usuario.usu_id =".$usuario['usu_id']." AND centro.cen_id = usuario.cen_id";
                  $Centros=$ObjFuncion->consultar($sqlCentro);
                    
                        foreach($Departamentos as $departamento){
                            $usuario_Bd[$i]['departamento'][]=$departamento;
                        }
                        foreach($TipoDocumentos as $documento){
                            $usuario_Bd[$i]['documento'][]=$documento;
                        }
                        foreach($Roles as $rol){
                            $usuario_Bd[$i]['rol'][]=$rol;
                        }
                        foreach ($tipo_usu as $tipo_U){
                            $usuario_Bd[$i]['tipo'][]=$tipo_U;
                        }
                        foreach ($Centros as $centro){
                            $usuario_Bd[$i]['centro'][]=$centro;
                            
                        }
                  
                $i++;
            
        }
?>
<h2>Resultados de la busqueda</h2> 

<div class="row"> 
        <div class="form-group">
            <table class="table table-striped">
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