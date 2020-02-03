<?php
    include_once '../Model/Usuario/UsuarioModel.php';
    $ObjFuncion = new UsuariosModel();

    $id = $_POST['id_usuario'];
    
    $sql="SELECT usuario.usu_estado FROM usuario WHERE usuario.usu_id = $id";
    $consultalo = $ObjFuncion->consultar($sql);

    //esta condicional verifica el estado del usuario y lo reemplaza por el antonimo 
    while($consulta = mysqli_fetch_assoc($consultalo)){

        if($consulta['usu_estado'] == "Activo"){
            $sentencia ="UPDATE usuario SET usuario.usu_estado='Inactivo' WHERE usuario.usu_id = $id";
            $eje = $ObjFuncion->editar($sentencia);
        }
        if($consulta['usu_estado'] == "Inactivo"){
            $sentencia ="UPDATE usuario SET usuario.usu_estado='Activo' WHERE usuario.usu_id = $id";
            $eje = $ObjFuncion->editar($sentencia);
        }
    }
?>