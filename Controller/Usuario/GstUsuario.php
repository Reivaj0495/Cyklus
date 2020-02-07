<?php
	include_once '../Model/Usuario/UsuarioModel.php';

	Class GstUsuario{

		public function GstCrearUsuario(){

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

		public function GstPostCrearUsuario(){

			/*
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

                $ObjFuncion->insertar($sqlInsertUsuario);

                */

		}



	}

	
	

?>
