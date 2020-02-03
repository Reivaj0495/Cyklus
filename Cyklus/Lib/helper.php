<?php
function redirect($url){
    
    echo "<script type='text/javascript'>"
            . "window.location.href='$url';"
      . "</script>";   
}

function dd($var){
    
    echo "<pre>";
    die(print_r($var));
}

function getUrl($modulo,$controlador,$funcion,$parametros=false,$ajax=false){
    if($ajax){
        $pagina="ajax";
    }
    else{
        $pagina="index";
    }
    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
    if($parametros!=false){
        foreach($parametros as $key=>$valor){
            $url.="&$key=$valor";
        }
    }
    return $url;
}

function resolve(){
    $modulo= ucwords($_GET['modulo']);
    $controlador= ucwords($_GET['controlador']);
    $funcion= ucwords($_GET['funcion']);
    
    if(is_dir("../Controller/$modulo")){
        if(file_exists("../Controller/$modulo/".$controlador."Controller.php")){
            include_once "../Controller/$modulo/" .$controlador. "Controller.php";
        
            $nombreClase=$controlador."Controller";
            $objClase=new $nombreClase();
            if(method_exists($objClase, $funcion)){
                $objClase ->$funcion();
                
            }
            else{
                echo "El m&eacute;todo especificado no existe";
            }
            
        }
        else{
            echo "El controlador especificado no existe";
        }
    }   
    else{
     echo "El m&oacute;dulo especificado no existe";
    }
    
}

?>