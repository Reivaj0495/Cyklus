<?php
    include_once '../Model/Usuario/UsuarioModel.php';
  
    class UsuarioController{
        
        public function getCrearUsuario(){
            
             $ObjFuncion = new UsuariosModel();
             
             $sqlDep="select * from departamento";
             $sqlTipD="select * from tipo_documento";
             $sqlTipU="select * from tipo_usuario";
             $sqlRol="select * from rol";
             $sqlCen="select * from centro";
             
             $Departamento=$ObjFuncion->consultar($sqlDep);
             $TipoDo=$ObjFuncion->consultar($sqlTipD);
             $TipoUsu=$ObjFuncion->consultar($sqlTipU);
             $Roles=$ObjFuncion->consultar($sqlRol);
             $Centros=$ObjFuncion->consultar($sqlCen);
             
            include '../View/Usuarios/insertUsuario.php';    
        }
        
        public function postCrearUsuario(){
        
            $ObjFuncion = new UsuariosModel();
                
                $Usuario=$ObjFuncion->autoIncrement('usuario', 'usu_id');
                $usu_id=$Usuario;
                $nombre=$_POST['usu_nickname'];
                $contraseña=$_POST['usu_password'];
                $celular=$_POST['usu_celular'];
                $telefono=$_POST['usu_telefono'];
                $correo=$_POST['usu_email'];
                $departamento=$_POST['dep_id'];
                $tipodocumento=$_POST['tip_doc_id'];
                $documento=$_POST['usu_documento'];
                $tipousuario=$_POST['tip_usu_id'];
                $rol=$_POST['rol_id'];
                $centro=$_POST['cen_id'];
                $estado=$_POST['usu_estado'];
            
               $res=$sqlInsertUsuario="insert into usuario values("."$usu_id,"."$departamento,"."
                    $tipodocumento,"."$tipousuario,"."'$nombre',"."'$contraseña',"."$rol,".""
                    . "'$documento',"."'$celular',"."'$telefono',"."'$correo',"."$centro,"."'$estado')";
           
               $RESPUESTA=$ObjFuncion->insertar($sqlInsertUsuario);
               
               if($RESPUESTA>0 ){
                   $mensaje= "Se Inserto Correctamente";
               echo "<script type='text/javascript'>
                            alert('$mensaje') </script>";
               redirect(getUrl("Usuario","Usuario","ListarUsuarios"));
               }else{
                   $mensaje= "Error Al Insertar Verifique Los Datos";
               echo "<script type='text/javascript'>
                            alert('$mensaje') </script>";
               redirect(getUrl("Usuario","Usuario","getCrearUsuario"));
               
                }
   
        }
        
        public function getEditarUsuario(){
            $ObjFuncion = new UsuariosModel();
            if(isset($_GET['usu_id'])){
                $usu_id = $_GET['usu_id'];
              
             $sql="select * from usuario where usu_id ='".$_GET['usu_id']."'";
             
             $sqlDep="select * from departamento";
             $sqlDepID="SELECT * FROM usuario, departamento WHERE usuario.dep_id= departamento.dep_id AND usuario.usu_id ='".$_GET['usu_id']."'";
             
             $sqlTipD="select * from tipo_documento";
             $sqlTipDUsus="SELECT * FROM usuario, tipo_documento WHERE usuario.tip_doc_id= tipo_documento.tip_doc_id AND usuario.usu_id ='".$_GET['usu_id']."'";
             
             $sqlTipUsuarios="SELECT * FROM tipo_usuario";
             $sqlTipU = "SELECT * FROM usuario, tipo_usuario WHERE usuario.usu_id = $usu_id AND usuario.tip_usu_id = tipo_usuario.tip_usu_id";
             
             $sqlRol="select * from rol";
             $sqlR="SELECT usuario.usu_id, usuario.usu_nickname, rol.rol_id, rol.rol_descripcion 
                    from usuario, rol
                    WHERE usuario.rol_id = rol.rol_id AND usuario.usu_id =".$usu_id;
             
             $sqlCentros="select centro.cen_id, centro.cen_descripcion from centro";
             $sqlCentro="SELECT usuario.usu_id, centro.cen_id, centro.cen_descripcion FROM usuario, centro WHERE usuario.usu_id = $usu_id AND centro.cen_id = usuario.cen_id";
            
            
            $Usuarios=$ObjFuncion->consultar($sql);
            
            $Departamento=$ObjFuncion->consultar($sqlDep);
            $DepartamentoID=$ObjFuncion->consultar($sqlDepID);
            
            $TipoDo=$ObjFuncion->consultar($sqlTipD);
            $TipoDoUsuario=$ObjFuncion->consultar($sqlTipDUsus);
            
            $TipoUsuarios=$ObjFuncion->consultar($sqlTipUsuarios);
            $TipoUsu=$ObjFuncion->consultar($sqlTipU);
            
            $Roles=$ObjFuncion->consultar($sqlRol);
            $Rol=$ObjFuncion->consultar($sqlR);
            
            $Centros=$ObjFuncion->consultar($sqlCentros);
            $Centro=$ObjFuncion->consultar($sqlCentro);
            
            
            include '../View/Usuarios/EditarUsuario.php';
            }
        }
        public function postEditarUsuario(){
            $ObjFuncion = new UsuariosModel();
            
            $_POST['usu_id'];
        
            if(isset($_POST['usu_id'])){

                $id=$_POST['usu_id'];
                $nickname=$_POST['usu_nickname'];
                $password=$_POST['usu_password'];
                $celular=$_POST['usu_celular'];
                $telefono=$_POST['usu_telefono'];
                $correo=$_POST['usu_email'];
                $departamento=$_POST['dep_id'];
                $tipo_documento=$_POST['tip_doc_id'];
                $documento=$_POST['usu_documento'];
                $tipo_usuario=$_POST['tip_usu_id'];
                echo $rol_id=$_POST['rol_id'];
                $centro=$_POST['cen_id'];
                
                
                $sql="update usuario set usu_id='".$id[0]."',usu_nickname='".$nickname."',usu_password='".$password."',usu_email='".$correo."'"
                        . ",usu_telefono='".$telefono."',usu_celular='".$celular."',dep_id='".$departamento."',tip_doc_id='".$tipo_documento."'"
                . ",usu_documento='".$documento."',tip_usu_id='".$tipo_usuario."',rol_id='".$rol_id."',cen_id='".$centro."' WHERE usu_id='".$id."'";
                $update=$ObjFuncion->editar($sql);
                
                if($update>0){
                echo "<script type='text/javascript'>alert('Usuario actualizado exitosamente');</script>";
                        redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));

                }
                else{
                    echo "<script type='text/javascript'>alert('Ocurrio un error');</script>";
                       // redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));
                }
            }
            
        }
        
        public function getEliminarUsuario(){
            
            $ObjFuncion= new UsuariosModel();
            
            $id=$_GET['usu_id'];
            
            $sql="select * from usuario, rol where usu_id=".$id."AND usuario.rol_id = rol.rol_id";
            $Buscar=$ObjFuncion->consultar($sql);
                 
            include '../View/Usuarios/EliminarUsuario.php';
        }
        public function postEliminarUsuario(){
            
            $ObjFuncion = new UsuariosModel();
            $usu_id=$_POST['usu_id'];
            
           $sql="Delete from usuario, instructor, aprendiz where usu_id =".$usu_id;
           
            $Eliminar=$ObjFuncion->eliminar($sql);
                
            if($Eliminar>0){
             echo "<script type='text/javascript'>alert('Usuario Eliminado exitosamente');</script>";

                    redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));

                }
                else{
                    echo "<script type='text/javascript'>alert('Ocurrio un error');</script>";

               //     redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));

                }
        }

        public function ListarUsuarios(){
            
            $ObjFuncion = new UsuariosModel();
            
            $sql="SELECT * FROM usuario";
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
                  $tipo_usu=$ObjFuncion->consultarArray($sqlTipoUsu);
                  
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
             
        include '../View/Usuarios/ListarUsuario.php';
        
       }
       
        public function Config(){
            $ObjConfig = new UsuariosModel();
            
            $id=$_SESSION['id'];
            
            $sqlU="SELECT * FROM usuario WHERE usuario.usu_id=".$id;
            
                $DatosConf=$ObjConfig->consultar($sqlU);
          
            include '../View/Usuarios/ConfigurarPerfil.php';
        }
        public function postConfig(){
            $ObjConfig = new UsuariosModel();
            
            $id =$_POST['usu_id'];
            $nickname=$_POST['usu_nickname'];
            $password=$_POST['usu_password'];
            $telephone=$_POST['usu_telefono'];
            $cell=$_POST['usu_celular'];
            $email=$_POST['usu_email'];
            
            $sql="update usuario set usu_id='".$id."',usu_nickname='".$nickname."',usu_password='".$password."',usu_email='".$email."'"
                        . ",usu_telefono='".$telephone."',usu_celular='".$cell."' WHERE usu_id = '".$id."'";
            
            $update=$ObjConfig->editar($sql);
                
                if($update>0){
                echo "<script type='text/javascript'>alert('Usuario actualizado exitosamente');</script>";
                        redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));

                }
                else{
                    echo "<script type='text/javascript'>alert('Ocurrio un error');</script>";
                        redirect(getUrl("Usuario", "Usuario", "ListarUsuarios"));
                }
            }
            
        public function CargaMasiva(){
            include '../View/Usuarios/CargarUsuarios.php';
            $ObjFuncion = new UsuariosModel();
            if(isset($_POST["Enviar"])) { // Permite recepcionar una variable que exista y no sea null
    
            $ruta= "../Upload/Usuario/";
            $archivo= $_FILES["csv"]["name"];
            $archivo_Copiado= $_FILES["csv"]["tmp_name"];

            $fecha= getdate();
            $fechaD="(".$fecha["mday"]."-".$fecha["mon"]."-".$fecha["year"].")"."hours"." - ".$fecha["hours"]."-".$fecha["minutes"]."-".$fecha["seconds"].".csv";
            $archivo_guardar =$archivo." - ".$fechaD;
            $destino=$ruta.$archivo_guardar;

            if(copy($archivo_Copiado, $destino)){
              // echo "Se Copio Correctamente En La Carpeta Upload/Usuario";  
                            if (file_exists($archivo_Copiado)){
                            $data = fopen($archivo_Copiado,"r"); // abre y lee el archivo cargado 
                         $Cont=0;
                        while ($datos = fgetcsv($data," " ,";")){
                            
                            $Usuario=$ObjFuncion->autoIncrement('usuario', 'usu_id');
                            $usu_id=$Usuario;
                            $dep_id=$datos[1]; 
                            $tip_doc_id=$datos[2];
                            $tip_usu_id=$datos[3];
                            $usu_nickname=$datos[4];
                            $usu_password=$datos[5];
                            $rol_usu_id=$datos[6];
                            $usu_documento=$datos[7];
                            $usu_celular=$datos[8];
                            $usu_telefono=$datos[9];
                            $usu_email=$datos[10];
                            $cen_id=$datos[11];
                            $usu_estado=$datos[12];
                            $sql = "insert into usuario values ($usu_id,$dep_id,$tip_doc_id,$tip_usu_id,'$usu_nickname','$usu_password',$rol_usu_id,'$usu_documento','$usu_celular','$usu_telefono','$usu_email',$cen_id,'$usu_estado')";
                            $respuesta=$ObjFuncion->insertar($sql);
      
                            if($respuesta){
                                 $Cont++;
                                    //Se Inserto Correctamente
                                }else {
                                    $ruta="index.php?modulo=Usuario&controlador=Usuario&funcion=CargaMasiva";
                                    $mensaje= "Error Al Cargar El Archivo"; 
                                        echo "<script type='text/javascript'>
                                                alert('$mensaje');
                                                    window.location='$ruta'; </script>";
                                }
                        }if($Cont>0){
                            $ruta="index.php?modulo=Usuario&controlador=Usuario&funcion=ListarUsuarios";
                        $mensaje= "Se Inserto Correctamente En La Base De Datos"; 
                               echo "<script type='text/javascript'>
                                    alert('$mensaje');
                                        window.location='$ruta'; </script>";
                                        
                                }
                    }
                     
                }else {
                    $ruta="index.php?modulo=Usuario&controlador=Usuario&funcion=CargaMasiva";
                   $mensaje="No Selecciono Archivo CSV";
                     echo "<script type='text/javascript'>
                                    alert('$mensaje'); 
                                        window.location='$ruta';
                            </script>";
                       }
            }
       }//CargaMasiva
        
    }//controller
?>