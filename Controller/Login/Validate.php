<?php
session_start();
include '../../Lib/conf/Connection.php';

        $objConnection= new connection;
        $conexion=$objConnection->getConnect();

        $Documento=$_POST['Documento'];
        $Password=$_POST['Contraseña'];
      
            
        $sql = "SELECT  usuario.usu_id, usuario.usu_documento, usuario.usu_password, usuario.usu_nickname "
                . "FROM usuario "
                . "WHERE usu_documento = ".$Documento." and  usu_password =".$Password."";
        $Sentencia= mysqli_query($conexion, $sql);
            
        
        if(mysqli_num_rows($Sentencia)>0){
                
            while($resultado= mysqli_fetch_assoc($Sentencia)){
                    $_SESSION['usuario']=$resultado['usu_nickname'];
                    $_SESSION['id']=$resultado['usu_id'];
                    }
                    $_SESSION['iniciado']=true;
                    $mensaje="Bienvenido ".$_SESSION['usuario'];
                    $ruta= "../../Web/index.php";
                    
                }else{
                    $mensaje="Contraseña O Usuario Incorrecto";
                    $ruta='../../Web/login.php';
                    }

            redireccion($ruta,$mensaje);
            function redireccion($ruta,$mensaje){
                    echo "<script type='text/javascript'>
                                    alert('$mensaje');
                                    window.location='$ruta';
                            </script>";
            }
                
?>