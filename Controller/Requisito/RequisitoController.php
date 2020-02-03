<?php
include_once '../Model/Requisitos/RequisitosModel.php';

class RequisitoController{
    
    
    public function  getRequisitos(){
       $ObjRequisitos= new RequisitosModel(); 
       
       $sql="SELECT usuario.usu_nickname, aprendiz.usu_id, requisito.apr_id, requisito.req_nombre, proyecto.pro_codigo, proyecto.pro_descripcion, requisito.req_id "
               . "FROM usuario,aprendiz,requisito,proyecto "
               . "WHERE usuario.tip_usu_id AND usuario.usu_id = aprendiz.usu_id AND requisito.apr_id = aprendiz.apr_id AND proyecto.pro_codigo = requisito.pro_codigo";
       
      $requisitos=$ObjRequisitos->consultar($sql);
    
        include_once '../View/Requisito/listar.php';
        
    }
    public function ListarRequisitoCodigo(){
        $objetoRequisitos = new RequisitosModel();
        if(isset($_GET['id'])){
            $codigo=$_GET['id'];
            
            $sqlC="SELECT proyecto.pro_codigo, proyecto.pro_nombre FROM proyecto WHERE proyecto.pro_codigo= $codigo";
           
            $sql="SELECT usuario.usu_nickname, aprendiz.usu_id, requisito.apr_id, requisito.req_nombre, pro_nombre, proyecto.pro_codigo, proyecto.pro_descripcion, requisito.req_id
                  FROM usuario,aprendiz,requisito,proyecto
                  WHERE proyecto.pro_codigo = $codigo AND usuario.tip_usu_id AND usuario.usu_id = aprendiz.usu_id AND requisito.apr_id = aprendiz.apr_id AND proyecto.pro_codigo = requisito.pro_codigo";
            
          $requisitosC=$objetoRequisitos->consultar($sql);
          $requisitos=$objetoRequisitos->consultar($sqlC);
        }
        
        include_once '../View/Requisito/ListarCodigo.php';
    }
    public function CrearRequisitos(){
    
       $ObjRequisito =new RequisitosModel();
       
       $sqlP="Select * from proyecto";
       $sqlA="Select * from aprendiz";
       $sql2 = "SELECT usuario.usu_nickname, aprendiz.usu_id, aprendiz.apr_id "
              ."FROM usuario,aprendiz "
              ."WHERE usuario.usu_id = aprendiz.usu_id";
       
        $Proyecto=$ObjRequisito->consultar($sqlP);
        $Aprendices=$ObjRequisito->consultar($sqlA);
        $consulta = $ObjRequisito->consultar($sql2);
        
         include_once '../View/Requisito/insertRequisito.php';

    }
    public function CrearRequisitoCo(){
          
          $ObjRequisito =new RequisitosModel();
          
          if(isset($_GET['id'])){
            $codigo=$_GET['id'];
        
        $sqlP="Select * from proyecto WHERE Proyecto.pro_codigo = $codigo";
        $sqlA="Select * from aprendiz";
        $sql2 = "SELECT usuario.usu_nickname, aprendiz.usu_id, aprendiz.apr_id "
              ."FROM usuario,aprendiz "
              ."WHERE usuario.usu_id = aprendiz.usu_id";
       
        $Proyecto=$ObjRequisito->consultar($sqlP);
        $Aprendices=$ObjRequisito->consultar($sqlA);
        $consulta = $ObjRequisito->consultar($sql2);
          
            }
            
            include_once '../View/Requisito/CrearRequisitoC.php';    
    }
    
    public function InsertarRequisitoCo() {
        
        if(isset($_POST)){
      
        $ObjRequisitos = new RequisitosModel();

        $req_id=$ObjRequisitos->autoincrement('requisito', 'req_id');
        $apr_id=$_POST['apr_id'];
        $pro_codigo=$_POST['pro_codigo'];
        $req_nombre=$_POST['req_nombre'];
        
        $sql="insert into requisito  values ($req_id,$pro_codigo,$apr_id,'$req_nombre')";
        $Respuesta=$ObjRequisitos->insertar($sql);
            if ($Respuesta > 0) {
                echo"<script> alert('Insercion exitosa'); </script>";
                redirect(getUrl('Proyecto', 'Proyecto', 'getProyecto' ));
            } else {
                echo"<script> alert('Fallo Al Registrar Revise Los Datos'); </script>";
            }
            redirect (getUrl('Requisito','Requisito','CrearRequisitoCo'));
       
         } 
        
    }
    
    public function InsertRequisitos(){
      if(isset($_POST)){
      
      $ObjRequisitos = new RequisitosModel();

        $req_id=$ObjRequisitos->autoincrement('requisito', 'req_id');
        $apr_id=$_POST['apr_id'];
        $pro_codigo=$_POST['pro_codigo'];
        $req_nombre=$_POST['req_nombre'];
        
        $sql="insert into requisito  values ($req_id,$pro_codigo,$apr_id,'$req_nombre')";
        $Respuesta=$ObjRequisitos->insertar($sql);
            if ($Respuesta > 0) {
                echo"<script> alert('Insercion exitosa'); </script>";
                redirect(getUrl('Requisito', 'Requisito', 'getRequisitos'));
            } else {
                echo"<script> alert('Fallo Al Registrar Revise Los Datos'); </script>";
            }
            redirect (getUrl('Requisito','Requisito','CrearRequisitos'));
       
         } 
        
    }
    
    public function editarRequisitos(){
        $ObjRequisitos = new RequisitosModel();
        
        if(isset($_GET['id'])){
            $req_id = $_GET['id'];
        
        $sql="select * from requisito where req_id='".$_GET['id']."'";
        $nombres = "SELECT usuario.usu_nickname, aprendiz.usu_id, aprendiz.apr_id "
              ."FROM usuario,aprendiz "
              ."WHERE usuario.usu_id = aprendiz.usu_id";
        $consultaDatos = "SELECT  proyecto.pro_codigo, proyecto.pro_descripcion, usuario.usu_nickname, requisito.req_nombre, requisito.req_id, aprendiz.apr_id
                          FROM proyecto, usuario, aprendiz, requisito
                          WHERE requisito.req_id = $req_id AND proyecto.pro_codigo = requisito.pro_codigo AND aprendiz.apr_id = requisito.apr_id AND aprendiz.usu_id = usuario.usu_id";
        $proyecto="select * from proyecto";
        
        $proyectos=$ObjRequisitos->consultar($proyecto);
        $Datos=$ObjRequisitos->consultar($consultaDatos);
        $datosNombre=$ObjRequisitos->consultar($nombres);
        }
        
        include_once '../View/Requisito/Editar.php';
    }
    
    public function EditRequisitos(){
        $ObjRequisitos= new RequisitosModel();
        
        if(isset($_POST["req_id"])){
        
        $req_id=$ObjRequisitos->autoincrement('requisito','req_id');
        $req_id=$_POST['req_id'];
        $pro_codigo=$_POST['pro_codigo'];
        $apr_id=$_POST['apr_id'];
        $req_nombre=$_POST['req_nombre'];

        $sql="update requisito set req_id='$req_id', pro_codigo='$pro_codigo',apr_id='$apr_id',req_nombre='$req_nombre' where req_id='$req_id'";

            $res=$ObjRequisitos->editar($sql);
            
            if($res>0){
                echo "<script>alert('Actualizacion exitosa')</script>";
            
                redirect(getUrl('Requisito', 'Requisito', 'getRequisitos'));
            } else
              echo  "<script>alert('Error Al Actualizar Revise Los Datos')</script>";
            
                redirect(getUrl('Requisito', 'Requisito', 'getRequisitos'));
        }
    }
    
    public function EliminarRequisitos(){
        
       $ObjRequisitos=new RequisitosModel();
        if(isset($_GET['id'])){
            $req_id=$_GET['id'];
            
        $sql="SELECT  proyecto.pro_codigo, proyecto.pro_descripcion, usuario.usu_nickname, requisito.req_nombre, requisito.req_id, aprendiz.apr_id
                          FROM proyecto, usuario, aprendiz, requisito
                          WHERE requisito.req_id = $req_id AND proyecto.pro_codigo = requisito.pro_codigo AND aprendiz.apr_id = requisito.apr_id AND aprendiz.usu_id = usuario.usu_id";
       
        $consulta=$ObjRequisitos->consultar($sql);
        
        
         include_once '../View/Requisito/Eliminar.php';
        }
    }
    
    public function deleteRequisitos(){
        if(isset($_POST['req_id'])){
            
            $ObjRequisitos= new RequisitosModel();
            
            $res=$sql="delete from requisito where req_id=".$_POST['req_id'];
            $update=$ObjRequisitos->eliminar($sql);
            
            
            echo "<script>alert('Borrado exitoso')</script>";
           

             redirect (getUrl('Requisito','Requisito','getRequisitos'));

        }
    }
    
}
?>