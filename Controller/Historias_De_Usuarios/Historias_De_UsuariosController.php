<?php
include_once '../Model/Historias_De_Usuarios/Historias_De_UsuariosModel.php';

class Historias_De_UsuariosController{
    
    
    public function  getHistorias(){
        
         $sql="select * from historias_usuarios";
         $usu= new Historias_De_UsuariosModel();
         $listar=$usu->consultar($sql);
         include_once '../View/Historias_De_Usuarios/listarHistorias_De_Usuarios.php';
    }
    
    public function ConsultarHistorias(){
        if(isset($_POST['consultar'])){
            $busqueda=$_POST['consultar'];
            $sql="select * from historias_usuarios where descripcion_historia like '%".$busqueda."%' order by historia_id";
            $usu=new Historias_De_UsuariosModel();
            $listar=$usu->consultar($sql);
             if($listar!=""){
              include_once '../View/Historias_De_Usuarios/listarHistorias_De_Usuarios.php';
            }else{
              "<script> alert('Su busqueda no fue exitosa'); </script>";
          }
        }
    }
    
      public function CrearHistorias(){
    
       $sql="select * from historias_usuarios";
        
        $facturaObj=new Historias_De_UsuariosModel();
        $barrio=$facturaObj->consultar($sql);
        
        
        $sql="select historias_usuarios  from historias_usuarios";
        $maqui=$facturaObj->consultar($sql);
       
       
         include_once '../View/Historias_De_Usuarios/crearHistorias_De_Usuarios.php';

    }
    
  public function InsertHistorias(){
      if(isset($_POST)){
      
        $barrioObj=new Historias_De_UsuariosModel();

        $codigo=$barrioObj->autoincrement('historias_usuarios','historia_id');
        
        $historia_id=$_POST['historia_id'];
        $titulo_historia=$_POST['titulo_historia'];
        $descripcion_historia=$_POST['descripcion_historia'];
        $dependencia_historia=$_POST['dependencia_historia'];
        $estimacion_historia=$_POST['estimacion_historia'];
        $prioridad_historia=$_POST['prioridad_historia'];
        $pruebas_aceptacion_historia=$_POST['pruebas_aceptacion_historia'];
        $responsables_historia=$_POST['responsables_historia'];
        $estado_historia=$_POST['estado_historia'];

       $sql="insert into  historias_usuarios  values($historia_id,'$titulo_historia','$descripcion_historia','$dependencia_historia','$estimacion_historia','$prioridad_historia','$pruebas_aceptacion_historia','$responsables_historia','$estado_historia')";

        
        $barrioObj->insertar($sql);

        redirect (getUrl('Historias_De_Usuarios','Historias_De_Usuarios','getHistorias'));

        echo"<script> alert('Insercion exitosa'); </script>";

      }
    }

    
   
      public function EditarHistorias(){
        if(isset($_GET['id'])){
        $sql="select * from historias_usuarios";
        $empresaObj= new Historias_De_UsuariosModel();
        $cliente=$empresaObj->consultar($sql);
        
        $sql="select * from historias_usuarios where historia_id='".$_GET['id']."'";
        $empresa=$empresaObj->consultar($sql);
        }
        //echo "<script>alert('Actualizacion exitosa')</script>";
        include_once '../View/Historias_De_Usuarios/editarHistorias_De_Usuarios.php';
    }
    
    public function EditHistorias(){
        if(isset($_POST["historia_id"])){
            
            

            $historiaObj= new Historias_De_UsuariosModel();

            
             $codigo=$historiaObj->autoincrement('historias_usuarios','historia_id');
        
              
        $historia_id=$_POST['historia_id'];
        $titulo_historia=$_POST['titulo_historia'];
        $descripcion_historia=$_POST['descripcion_historia'];
        $dependencia_historia=$_POST['dependencia_historia'];
        $estimacion_historia=$_POST['estimacion_historia'];
        $prioridad_historia=$_POST['prioridad_historia'];
        $pruebas_aceptacion_historia=$_POST['pruebas_aceptacion_historia'];
        $estado_historia=$_POST['estado_historia'];

      // echo  "responsable".$responsables_historia;
           
            $sql="update historias_usuarios set historia_id='$historia_id', titulo_historia='$titulo_historia',descripcion_historia='$descripcion_historia',dependencia_historia='$dependencia_historia',estimacion_historia='$estimacion_historia', prioridad_historia='$prioridad_historia', pruebas_aceptacion_historia='$pruebas_aceptacion_historia' ,  estado_historia='$estado_historia'  where historia_id='$historia_id'";

            $historiaObj->editar($sql);
            
            

              redirect (getUrl('Historias_De_Usuarios','Historias_De_Usuarios','getHistorias'));

        }
    }
    
        public function EliminarHistoria(){

        if(isset($_GET['id'])){
            
        $sql="select * from historias_usuarios where historia_id='".$_GET['id']."'";
       
        $clienteObj=new Historias_De_UsuariosModel();
        $cliente=$clienteObj->consultar($sql);
        
        
         include_once '../View/Historias_De_Usuarios/eliminarHistorias_De_Usuarios.php';
        }
    }
    
    public function deleteHistory(){
        if(isset($_POST['codigo'])){
            
            $clienteObj= new Historias_De_UsuariosModel();
            
            $sql="delete from historias_usuarios where historia_id=".$_POST['codigo'];
            $update=$clienteObj->eliminar($sql);
            
           // $sql="delete from fac_usu_cli where cliente_cli_id=".$_POST['codigo'];
           // $update=$clienteObj->eliminar($sql);
            
           // $sql="delete from cliente where cli_id='".$_POST['codigo']."'";
           // $update=$clienteObj->eliminar($sql);
            
            echo "<script>alert('Borrado exitoso')</script>";
           

             redirect (getUrl('Historias_De_Usuarios','Historias_De_Usuarios','getHistorias'));

        }
    }
    
}
?>