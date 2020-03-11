<?php
	include_once '../Model/Usuario/UsuarioModel.php';

	Class GstUsuario{

		/**
         * Funcion que consulta la bd
         * @category GstUsuario
         * @package GstUsuarios
         * @version 1.0
         * @author Javier R
        */

		public function GstConsultarDatos(){

            $sqlDep="select * from departamento";
	    	$sqlTipD="select * from tipo_documento";
	    	$sqlTipU="select * from tipo_usuario";
	    	$sqlRol="select * from rol";
	    	$sqlCen="select * from centro";

	    	$ObjFuncion = new UsuariosModel();
	        
	             $dato['departamento'] = $Departamento=$ObjFuncion->consultar($sqlDep);
	             $dato['tipo_documento'] = $TipoDo=$ObjFuncion->consultar($sqlTipD);
	             $dato['tipo_usuario'] = $TipoUsu=$ObjFuncion->consultar($sqlTipU);
	             $dato['rol'] = $Roles=$ObjFuncion->consultar($sqlRol);
	             $dato['centro'] = $Centros=$ObjFuncion->consultar($sqlCen);
		      
            return $dato;
		}

		/**
         * Funcion que recibe los datos y los inserta en la bd
         * @category GstUsuario
         * @package GstUsuarios
         * @version 1.0
         * @author Javier R
        */

		public function GstPostCrearUsuario(){

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
            
                $sqlInsertUsuario="insert into usuario values("."$usu_id,"."$departamento,"."
                    $tipodocumento,"."$tipousuario,"."'$nombre',"."'$contraseña',"."$rol,".""
                    . "'$documento',"."'$celular',"."'$telefono',"."'$correo',"."$centro,"."'$estado')";

                $respuesta = $ObjFuncion->insertar($sqlInsertUsuario);
				return $respuesta;
		}

		public function GstgetEditarUsuario($idUsuario){

			 $ObjFuncion = new UsuariosModel();
                
             $sql="select * from usuario where usu_id = '$idUsuario'";
            
             $sqlDepID="SELECT * FROM usuario, departamento WHERE usuario.dep_id= departamento.dep_id AND usuario.usu_id ='$idUsuario'";
             $sqlTipDUsus="SELECT * FROM usuario, tipo_documento WHERE usuario.tip_doc_id= tipo_documento.tip_doc_id AND usuario.usu_id ='$idUsuario'";
             $sqlTipU = "SELECT * FROM usuario, tipo_usuario WHERE usuario.usu_id = '$idUsuario' AND usuario.tip_usu_id = tipo_usuario.tip_usu_id";
             $sqlR="SELECT usuario.usu_id, usuario.usu_nickname, rol.rol_id, rol.rol_descripcion 
                    from usuario, rol
                    WHERE usuario.rol_id = rol.rol_id AND usuario.usu_id ='$idUsuario'";
             $sqlCentro="SELECT usuario.usu_id, centro.cen_id, centro.cen_descripcion FROM usuario, centro WHERE usuario.usu_id = '$idUsuario' AND centro.cen_id = usuario.cen_id";
            
            $datosUsuario['usuario']=$ObjFuncion->consultarArray($sql);
            return $datosUsuario;
		}



	}

	
	

?>
