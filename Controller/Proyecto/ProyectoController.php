<?php
    include_once '../Model/Proyecto/ProyectoModel.php';
    
    class ProyectoController{
        
         public function getProyecto(){
        
        $pro= new ProyectoModel();
        
         $sql="SELECT usuario.usu_id, usuario.usu_nickname, instructor.ins_id, proyecto.pro_codigo, proyecto.pro_nombre, metodologia_proyecto.met_pro_descripcion
               FROM usuario, instructor, proyecto, metodologia_proyecto
               WHERE metodologia_proyecto.met_pro_id = proyecto.met_pro_id AND proyecto.ins_id = instructor.ins_id AND instructor.usu_id= usuario.usu_id";
            $listar=$pro->consultar($sql);
                
        include_once '../View/Proyecto/listar.php';
    }
        public function getElegir(){
            
            include '../View/Proyecto/elegir.php';            
        }
        public function getInsertScrum(){
            
          $proyectoObj=new ProyectoModel();
        
        $sqtip="select * from tipo_proyecto";
        $sqlLi="SELECT usuario.usu_id, usuario.usu_nickname, instructor.ins_id, tipo_usuario.tip_usu_id, tipo_usuario.tip_usu_descripcion 
                FROM instructor, usuario, tipo_usuario
                WHERE instructor.usu_id = usuario.usu_id AND usuario.tip_usu_id = tipo_usuario.tip_usu_id";
        $sqlFic="Select * from ficha";
        
        $sqlMe="SELECT metodologia_proyecto.met_pro_id, metodologia_proyecto.met_pro_descripcion
                FROM `metodologia_proyecto` WHERE met_pro_id = 1";
        
        $MetodologiaR=$proyectoObj->consultar($sqlMe);
        $Inst=$proyectoObj->consultar($sqlLi);
        $Ficha=$proyectoObj->consultar($sqlFic);
        $Tipo=$proyectoObj->consultar($sqtip);
            
            
            include '../View/Proyecto/insert.php';
        }
        public function getInsertRup(){
             
            $proyectoObj=new ProyectoModel();
        
        $sqtip="select * from tipo_proyecto";
        $sqlLi="SELECT usuario.usu_id, usuario.usu_nickname, instructor.ins_id, tipo_usuario.tip_usu_id, tipo_usuario.tip_usu_descripcion 
                FROM instructor, usuario, tipo_usuario
                WHERE instructor.usu_id = usuario.usu_id AND usuario.tip_usu_id = tipo_usuario.tip_usu_id";
        $sqlFic="Select * from ficha";
        
        $sqlMe="SELECT metodologia_proyecto.met_pro_id, metodologia_proyecto.met_pro_descripcion
                FROM `metodologia_proyecto` WHERE met_pro_id = 2";
        
        $MetodologiaR=$proyectoObj->consultar($sqlMe);
        $Inst=$proyectoObj->consultar($sqlLi);
        $Ficha=$proyectoObj->consultar($sqlFic);
        $Tipo=$proyectoObj->consultar($sqtip);
            
            include '../View/Proyecto/insert.php';
        }
        public function InsertProyecto(){
            
             if(isset($_POST)){
        
          $proyectoObj=new ProyectoModel();

         $codigo=$proyectoObj->autoincrement('proyecto','pro_codigo');
         $met_pro_id=$_POST['met_pro_id'];
         $pro_codigo=$_POST['pro_codigo'];
         $pro_nombre=$_POST['pro_nombre'];
         $pro_descripcion=$_POST['pro_descripcion'];
         $pro_objetivos=$_POST['pro_objetivos'];
         $tip_pro_id=$_POST['tip_pro_id'];
         $ins_id=$_POST['ins_id'];
         $fic_id=$_POST['fic_id'];
         $fecha_inicio=$_POST['fecha_inicio'];
         $fecha_fin=$_POST['fecha_fin'];
         $pro_fic_id="0";
         $fase_id="1";
         $fas_pro_id="0";
         
        $cons1= $sqlP="INSERT INTO `proyecto` VALUES ($pro_codigo,$met_pro_id,$tip_pro_id,'$pro_descripcion','$pro_objetivos',$ins_id,'$pro_nombre')";
         $cons2= $sqlF="insert into proyecto_ficha values($pro_fic_id,$fic_id,$pro_codigo)";
         $cons3= $sqlFP="insert into fase_proyecto values($fas_pro_id,$pro_codigo,$fase_id,$fecha_inicio,$fecha_fin)";
         
        
         $Fun1=$proyectoObj->insertar($sqlP);
         $Fun2=$proyectoObj->insertar($sqlF);
         $Fun3=$proyectoObj->insertar($sqlFP);

         echo "Consulta 1".$cons1."<br>";
         echo "Consulta 2".$cons2."<br>";
         echo "Consulta 3".$cons3."<br>";
         
         if($Fun1>0 && $Fun2>0 && $Fun3>0){
             
             echo "<script type='text/javascript'>alert('Se Inserto Correctamente');</script>";
             
             redirect (getUrl('Proyecto','Proyecto','getProyecto'));
             
         } else 
             
             echo "<script type='text/javascript'>alert('Ocurrio un error Revise Datos');</script>";

          redirect (getUrl('Proyecto','Proyecto','getProyecto'));
      
            }
        }

        public function getEditarProyecto(){
            $proyectoObj=new ProyectoModel();
            if(isset($_GET['id'])){
                
            $sql="SELECT metodologia_proyecto.met_pro_id, metodologia_proyecto.met_pro_descripcion, proyecto.pro_codigo, proyecto.pro_nombre, proyecto.pro_descripcion, proyecto.pro_objetivos, tipo_proyecto.tip_pro_id, tipo_proyecto.tip_pro_descripcion, instructor.ins_id, usuario.usu_nickname, ficha.fic_id, proyecto_ficha.pro_codigo, fase_proyecto.fecha_inicio,
            fase_proyecto.fecha_fin, programa.prog_descripcion
            FROM usuario, metodologia_proyecto, proyecto, tipo_proyecto, instructor,  fase_proyecto, ficha, proyecto_ficha, programa
            WHERE proyecto.pro_codigo= '".$_GET['id']."' AND proyecto.met_pro_id = metodologia_proyecto.met_pro_id AND proyecto.tip_pro_id= tipo_proyecto.tip_pro_id AND fase_proyecto.pro_codigo = proyecto.pro_codigo AND proyecto.ins_id = instructor.ins_id AND instructor.usu_id = usuario.usu_id AND proyecto_ficha.pro_codigo = proyecto.pro_codigo AND proyecto_ficha.fic_id = ficha.fic_id AND ficha.prog_id= programa.prog_id";
            
            $sqlM="SELECT * FROM metodologia_proyecto";
            $sqlTi="SELECT * FROM tipo_proyecto";
            $sqlIns="SELECT * FROM usuario, instructor WHERE instructor.usu_id = usuario.usu_id";
            $sqlF="SELECT * FROM ficha, programa WHERE ficha.prog_id = programa.prog_id";
            
            $Ficha=$proyectoObj->consultar($sqlF);
            $Instr=$proyectoObj->consultar($sqlIns);
            $DatosTipoP=$proyectoObj->consultar($sqlTi);
            $DatosMe=$proyectoObj->consultar($sqlM);
            $DatosEditar=$proyectoObj->consultar($sql);
            
            
            
            }
            include '../View/Proyecto/Editar.php';
        }
        public function EditarProyectos(){
            $proyectoObj=new ProyectoModel();
            if(isset($_POST["pro_codigo"])){
                
                
            $met_pro_id=$_POST['met_pro_id'];
            $pro_codigo=$_POST['pro_codigo'];
            $pro_nombre=$_POST['pro_nombre'];
            $pro_descripcion=$_POST['pro_descripcion'];
            $pro_objetivos=$_POST['pro_objetivos'];
            $tip_pro_id=$_POST['tip_pro_id'];
            $ins_id=$_POST['ins_id'];
            $fic_id=$_POST['fic_id'];
            $fecha_inicio=$_POST['fecha_inicio'];
            $fecha_fin=$_POST['fecha_fin'];
            
           $sql1="UPDATE proyecto SET met_pro_id = $met_pro_id, tip_pro_id = $tip_pro_id, pro_descripcion = '$pro_descripcion', pro_objetivos = '$pro_objetivos', ins_id = $ins_id, pro_nombre = '$pro_nombre' WHERE pro_codigo= $pro_codigo";
           
           $sql2="UPDATE proyecto_ficha SET fic_id = $fic_id WHERE pro_codigo= $pro_codigo";
           
           $sql3="UPDATE fase_proyecto SET fecha_inicio = $fecha_inicio, fecha_fin = $fecha_fin WHERE pro_codigo= $pro_codigo";
           
           $Fun1=$proyectoObj->editar($sql1);
           $Fun2=$proyectoObj->editar($sql2);
           $Fun3=$proyectoObj->editar($sql3);
           
           if($Fun1>0){
                    if($Fun2>0){
                        if($Fun3>0){
                            echo "<script>alert('Editado exitoso')</script>"; 
                                 redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                        }else{
                            echo "<script>alert('Fallo Al Editar')</script>"; 
                                 redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                             } 
                    }else{
                        echo "<script>alert('Fallo Al Editar')</script>"; 
                                 redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                    }
                }else{
                    echo "<script>alert('Fallo Al Editar')</script>"; 
                                 redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                 }
            }
        }

        public function EliminarProyecto(){
        $proyectoObj=new ProyectoModel();
        if(isset($_GET['id'])){

        $sql="select * from proyecto where pro_codigo='".$_GET['id']."'";

        $consultaDatos = "SELECT proyecto.pro_codigo, proyecto.pro_nombre, metodologia_proyecto.met_pro_descripcion, instructor.ins_id, usuario.usu_nickname, tipo_proyecto.tip_pro_descripcion, proyecto.pro_descripcion, proyecto.pro_objetivos
        FROM proyecto, metodologia_proyecto, instructor, usuario, tipo_proyecto
        WHERE proyecto.pro_codigo='".$_GET['id']."' AND proyecto.met_pro_id = metodologia_proyecto.met_pro_id AND proyecto.ins_id = instructor.ins_id AND instructor.usu_id = usuario.usu_id AND proyecto.tip_pro_id = tipo_proyecto.tip_pro_id";

        $DatosProyecto=$proyectoObj->consultar($consultaDatos);
        
         include_once '../View/Proyecto/Eliminar.php';
            }
        }
        public function deleteProyecto(){
        
        $proyectoObj= new ProyectoModel();
            if(isset($_POST['codigo'])){
                $pro_codigo=$_POST['codigo'];
            
            $sql1="delete from proyecto_ficha where pro_codigo=".$pro_codigo;
            $sql2="delete from fase_proyecto where pro_codigo=".$pro_codigo;
            $sql3="delete from proyecto where pro_codigo=".$pro_codigo;
            
            $update1=$proyectoObj->eliminar($sql1);
            $update2=$proyectoObj->eliminar($sql2);
            $update3=$proyectoObj->eliminar($sql3);
            
                if($update1>0){
                    if($update2>0){
                      if($update3>0){
                         echo "<script>alert('Borrado exitoso')</script>";
                              redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                      } else {
                      echo "<script>alert('Error Al Elimibar')</script>";
                          redirect (getUrl('Proyecto','Proyecto','getProyecto'));    
                      }
                  }else {
                      echo "<script>alert('Error Al Elimibar')</script>";
                          redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                  }
                }else{
                    echo "<script>alert('Error Al Elimibar')</script>";
                          redirect (getUrl('Proyecto','Proyecto','getProyecto'));
                }
            }
        }

        public function ListarRequisitosProyecto(){
        //Funcion Especializada a listar Requisitos Segun el Codigo Del Proyecto Que Le Envien
            include '../View/Proyecto/ListarRequisito.php';
        }
    }
?>