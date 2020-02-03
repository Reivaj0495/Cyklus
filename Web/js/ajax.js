function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   } catch (E) {
     xmlhttp = false;
   }
 }

 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
  xmlhttp = new XMLHttpRequest();
}
return xmlhttp;
}

//cajas dinamics del contrato

$(document).ready(function(){

  $(document).on("input","#campodescripcion",function(){

    var dato=$(this).val();
    var url=$(this).attr("data-url");
    
    $.ajax({
      url:url,
      data:"dato="+dato,
      type:"POST",
      success: pasar_Aprendiz
      
      
    });
    
  });

  $(document).on("input","#campoid",function(){

    var dato=$(this).val();
    var url=$(this).attr("data-url");
    
    $.ajax({
      url:url,
      data:"dato="+dato,
      type:"POST",
      success: pasar_AprendizID
      
      
    });
    
  });

  function pasar_Aprendiz(identi){
    var text = document.getElementById("campodescripcion");
    
    
    if (identi==0){

     text.setCustomValidity("Este nombre ya existe");


   }else if(identi==1){


     text.setCustomValidity(""); 
     
   }
   
 }

 function pasar_AprendizID(identi){
  var text = document.getElementById("campoid");
  
  
  if (identi==0){

   text.setCustomValidity("Este ID ya existe");


 }else if(identi==1){


   text.setCustomValidity(""); 
   
 }
 
}




$(document).on("input","#valida_correo",function(){

  var dato=$(this).val();
  var url=$(this).attr("data-url");
  
  $.ajax({
    url:url,
    data:"dato="+dato,
    type:"POST",
    success: validar_correo
    
    
  });
  
});

function validar_correo(identi){
  var text = document.getElementById("valida_correo");
  
  
  if (identi==0){

   text.setCustomValidity("Ese correo ya existe");


 }else if(identi==1){


   text.setCustomValidity(""); 
   
 }
 
}

$(document).on("input","#valida_cedula",function(){

  var dato=$(this).val();
  var url=$(this).attr("data-url");
  
  $.ajax({
    url:url,
    data:"dato="+dato,
    type:"POST",
    success: validar_cedula
    
    
  });
  
});


function validar_cedula(identi){
  var text = document.getElementById("valida_cedula");
  
  
  if (identi==0){

   text.setCustomValidity("Esa cedúla ya existe");


 }else if(identi==1){


   text.setCustomValidity(""); 
   
 }
}

$(document).on("input","#valida_telefono",function(){

  var dato=$(this).val();
  var url=$(this).attr("data-url");
  
  $.ajax({
    url:url,
    data:"dato="+dato,
    type:"POST",
    success: validar_telefono
    
    
  });
  
});


function validar_telefono(identi){
  var text = document.getElementById("valida_telefono");
  
  
  if (identi==0){

   text.setCustomValidity("Ese teléfono ya existe");


 }else if(identi==1){


   text.setCustomValidity(""); 
   
 }
}

$(document).on("keyup","#item1",function(){

  var mar_id=$(this).val();
  var mar_nom=$('#Mar_nombre').val();
  var url=$(this).attr("data-url");
  
  $.ajax({
    url:url,
    data:"mar_id="+ciu_id+"&mar_nom="+ciu_nom,
    type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#info_marca").html(dato); //la información encontrada se pinta en el div
              }
              
              
            });
  
});              


    /*$(document).on("click", ".cargarDato", function(){
        
        var posicion=$(this).attr('id');
        var ciu_id=$('#ciu_identi'+posicion).val();
        var ciu_nombre=$('#ciu_nombre'+posicion).val();
        
        $("#id_ciudad").val(ciu_id);
        $("#nombre_ciudad").val(ciu_nombre);
         $("#info_ciudad").html("");
        
       });*/
       
       
    //CONSULTA DEL LISTAR 
    $(document).on("keyup","#cc",function(){

      var cc=$(this).val();
      
      var url="../../view/prestamoequipos/Consulta_usuario.php";
      
      $.ajax({
        url:url,
        data:"cc="+cc,
        type:"POST",
            success: function(dato){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#resultado_cc").html(dato); //la información encontrada se pinta en el div
              }
              
              
            });
      
    });      




    

    $(document).on("keyup", "#buscar_entidad", function(){

      var dato=$(this).val();
      var url=$(this).attr("data-url");
      
      $.ajax({

        url:url,
        data:"dato="+dato,
        type:"POST",
        success:function(filtro){
          $("#lista_entidad").html(filtro);
        }
        
      });
      
    });

    $(document).on("click","#ImprimirReport",function(){

      var fechaini=$('#fechaini').val();
      var fechafin=$('#fechafin').val();
      var alma=$('#alma').val();
      var fun=$('#funcionario').val();
      var equi=$('#equipo').val();
      var url=$(this).attr("data-url");
      
      $.ajax({
        url:url,
        data:"fechaini="+fechaini+"&fechafin="+fechafin+"&alma="+alma+"&instru="+fun+"&equipo="+equi,
        type:"POST",
            success: function(reporte){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                //$("#inforeportes").html(reporte); //id del tbody donde se visualizara la info de la consulta
              }
              
              
            });
      
    });  
    
    $(document).on("click","#BuscarReport",function(){

      var fechaini=$('#fechaini').val();
      var fechafin=$('#fechafin').val();
      var alma=$('#alma').val();
      var fun=$('#cc').val();
      var equi=$('#equipo').val();
      var url=$(this).attr("data-url");
      
      $.ajax({
        url:url,
        data:"fechaini="+fechaini+"&fechafin="+fechafin+"&alma="+alma+"&instru="+fun+"&equipo="+equi,
        type:"POST",
            success: function(reporte){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#inforeportes").html(reporte); //id del tbody donde se visualizara la info de la consulta
              }
              
              
            });
      
    });  















    $(document).on("click","#finalequipo",function(){


     var url=$(this).attr("data-url");
     contador=0;

     x=$("#pre_equipo input");

     
     x.each(resal);   




     function resal(){

       var x=$(this);
       
       if(x.attr("type")=="checkbox"  ){
        contador++;
        if(document.getElementById('traspaso'+contador).checked){    

          var z=document.getElementById("eleq_id"+contador).value;
          var deta=document.getElementById("Prese_id").value;
          $.ajax({
            url:url,
            data:"dato="+z+"&datodos="+deta,
            type:"POST",
            success: function(reporte){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#cas").html(reporte); //id del tbody donde se visualizara la info de la consulta
              }
            });
          
          var te = document.getElementById("cas");
          te.innerHTML=contador; 
        }
        
      }
    }
    
  }); 


    $(document).on("click","#finalHeramienta",function(){


     var url=$(this).attr("data-url");
     contador=0;

     x=$("#pre_equipo input");

     
     x.each(resal);   




     function resal(){

       var x=$(this);
       
       if(x.attr("type")=="checkbox"  ){
        contador++;
        if(document.getElementById('traspaso'+contador).checked){    

          var z=document.getElementById("Her_id"+contador).value;
          var deta=document.getElementById("presh_id").value;
          $.ajax({
            url:url,
            data:"dato="+z+"&datodos="+deta,
            type:"POST",
            success: function(reporte){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#cas").html(reporte); //id del tbody donde se visualizara la info de la consulta
              }
            });
          
          var te = document.getElementById("cas");
          te.innerHTML=contador; 
        }
        
      }
    }
    
  });       
    
    












    $(document).on("click","#BuscarReportReserva",function(){

      var fechaini=$('#fechaini').val();
      var fechafin=$('#fechafin').val();
      var fun=$('#cc').val();
      var url=$(this).attr("data-url");
      
      $.ajax({
        url:url,
        data:"fechaini="+fechaini+"&fechafin="+fechafin+"&instru="+fun,
        type:"POST",
            success: function(reporte){ //dato represnta la información que nos retorna el controlador o la función que se ejecutó
                $("#inforeportes").html(reporte); //id del tbody donde se visualizara la info de la consulta
              }
              
              
            });
      
    }); 


    $('#agregar').on('click', function(){        
      var contador=document.getElementById('cta_campos').value; 
      var dor=document.getElementById('dor').value;   
      contador++;
      $('#cta_campos').val(contador);
      if(contador<="8"){

       if(dor=="1"){
        $('<tr id="contra'+contador+'">\n\
          <td><input type="checkbox" name="traspaso"></td>\n\
          <td><input type="text" readonly id="item'+contador+'" size="4"  name="item[]" value='+contador+'></td>\n\
          <td><input type="text" id="eleq_id'+contador+'" size="20"  name="eleq_id[]"   oninput="dor()" class="esta" data-dor="0" ></td>\n\
          <td ><input type="text" id="Dprese_observacion'+contador+'" size="20" name="Dprese_observacion[]"></td><td><input type="button" id="elimi'+contador+'" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo( "#pre_equipo" );     
      }else{
        $('<tr id="contra'+contador+'">\n\
          <td><input type="text" readonly id="item'+contador+'" size="4"  name="item[]" value='+contador+'></td>\n\
          <td><input type="text" id="eleq_id'+contador+'" size="20"  name="eleq_id[]"   oninput="dor()" class="esta" data-dor="0" ></td>\n\
          <td ><input type="text" id="Dprese_observacion'+contador+'" size="20" name="Dprese_observacion[]"></td><td><input type="button" id="elimi'+contador+'" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo( "#pre_equipo" );     
        




      }}

      
    });


    $('#agregarHerramienta').on('click', function(){        
      var contador=document.getElementById('cta_campos').value;  
      var dor=document.getElementById('dor').value;   
      contador++;
      $('#cta_campos').val(contador);

      if(dor=="0"){
       $('<tr id="contra'+contador+'">\n\
         <td><input type="text" readonly id="item'+contador+'" size="4"  name="item[]" value='+contador+'></td>\n\
         <td><input type="text" id="Her_id'+contador+'" size="20"  name="Her_id[]"  class="esto" data-dor="0" ></td>\n\
         <td align="right"><input type="number" id="Dpresh_cantidad'+contador+'" size="20" name="Dpresh_cantidad[]"></td>\n\
         <td align="right"><input type="text" id="Dpresh_observacion'+contador+'" size="20" name="Dpresh_observacion[]"></td>\n\
         <td><input type="button" id="elimi'+contador+'" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo( "#pre_equipo" );     
     }else{

      $('<tr id="contra'+contador+'">\n\
        \n\<td><input type="checkbox" name="traspaso"></td>\n\
        <td><input type="text" readonly id="item'+contador+'" size="4"  name="item[]" value='+contador+'></td>\n\
        <td><input type="text" id="Her_id'+contador+'" size="20"  name="Her_id[]" class="esto" data-dor="0" ></td>\n\
        <td ><input type="number" id="Dpresh_cantidad'+contador+'" size="20" name="Dpresh_cantidad[]"></td>\n\
        <td ><input type="text" id="Dpresh_observacion'+contador+'" size="20" name="Dpresh_observacion[]"></td>\n\
        <td><input type="button" id="elimi'+contador+'" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo( "#pre_equipo" );     
      
      
    }
  });





    $(document).on("click","input.eliminar",function(){


      var mate=$(this).attr("value");
      var conta=document.getElementById('cta_campos').value; 
      if(conta>1){
        $("#contra"+mate).remove();
        
        var x;
        
        x=$("#pre_equipo input");
        
        contador=0;
        
        x.each(resaltarParrafos);

      }  });
    function resaltarParrafos()
    {

      var x=$(this);
      
      if(x.attr("name")=="item[]" || x.attr("type")=="button" ){

       if(x.attr("name")=="item[]"){    
         contador++;
       }

       x.attr("value",contador);
       
     }
     
     
   } 




   $(document).on("click","input.eliminar",function(){

    var z;
    trs=0;
    z=$("#pre_equipo tr");
    z.each(resaltarParr); 


    function resaltarParr(){
      trs++;
      var z=$(this);
      
      z.attr("id","contra"+trs); 
      
      
      var contador=document.getElementById('cta_campos').value;  
      
      $('#cta_campos').val(trs);
    }

    

  });



   $(document).on("click","input.eliminar",function(){


    var conx = document.getElementById("cta_campos").value;
    
    for(i=1;i<=conx;i++){
     var contador=0;  
     var textUno = document.getElementById("eleq_id"+i).value;
     var textUnoid = document.getElementById("eleq_id"+i);
     es = document.getElementById("eleq_id"+i).getAttribute("data-dor");
     
     
     for(j=1;j<=conx;j++){

       var textDos = document.getElementById("eleq_id"+j).value;
       
       if(textUno==textDos){
         contador++;    
       }
       
     }

     
     if(contador>=2 && es==0){


       textUnoid.setCustomValidity("Este repetidad"); 
       
     }else if(contador<2 && es==0){


       textUnoid.setCustomValidity(""); 
       
     }
     
     
   }




 });









   $(document).on("input","input.esta",function(){

     var mate=$(this).attr("id");
     
     var textUnoid = document.getElementById(mate);
     
     es = document.getElementById(mate).getAttribute("data-dor");
     
     var text = document.getElementById(mate).value;
     var trs = document.getElementById("conta").value;
     var url="ajax.php?modulo=PrestamoEquipos&controlador=prestamoequipos&funcion=elemento";
     $.ajax({
       url:url,
       data:"dato="+text,
       type:"POST",
       success: elemento
       
       
     });   

     function elemento(identi){ 
       if(identi==0){


         textUnoid.setCustomValidity("este elemento no existe"); 
         textUnoid.setAttribute('data-dor','1');
         esta = document.getElementById(mate).getAttribute("data-dor");
       }else if(identi==1){


         textUnoid.setCustomValidity(""); 
         textUnoid.setAttribute('data-dor','0');
         esta = document.getElementById(mate).getAttribute("data-dor");
       }
       
       if(esta==1 && es==0){
        trs++;
      }else if(esta==0 && es==1){
        trs--;
        
      }
      


    }   
    

  });









   
   $(document).on("click",".agregarFila",function(){
    var fila=$("#filaPrestamo").html();
    $("#detallePrestamo").append("<tr>"+fila+"</tr>");
  });
   
   
   $(document).on("click",".eliminarFila",function(){
    $(this).parent().parent().remove();
  });


   $(document).on("keyup","#rolBusqueda",function(){
    var dato = $(this).val();
    var url = $(this).attr("data-url");
    $.ajax({
     url: url,
     data: "rol="+dato,
     type: "get",
     success: function(retorno){
      $("#listarBusquedaResultado").html(retorno);
    }
  });
  });
 });


function agregar_campos()
{

  var contador=document.getElementById('cta_campos').value;  
  
  contador++;
  
  $('#cta_campos').val(contador);
  
  
  $('<tr id="contra'+contador+'">\n\
    <input type="text" readonly class="form-control" id="item'+contador+'" size="4"  name="item[]">\n\
    <td align="right"><input type="number" class="form-control" id="cantidad_pro'+contador+'" size="4" name="cantidad_pro[]"></td><td><input type="button" id="elimi'+contador+'" class="eliminar" value="'+contador+'"></td></tr>alert(contador)').appendTo( "#pre_equipo" );     
  $("input.eliminar").click(function(){       
    var mate=$(this).attr("value");
    $("#contra"+mate).remove();

  });
  
}




function dor()
{


  var conx = document.getElementById("cta_campos").value;
  
  for(i=1;i<=conx;i++){
   var contador=0;  
   var textUno = document.getElementById("eleq_id"+i).value;
   var textUnoid = document.getElementById("eleq_id"+i);
   es = document.getElementById("eleq_id"+i).getAttribute("data-dor");
   
   
   for(j=1;j<=conx;j++){

     var textDos = document.getElementById("eleq_id"+j).value;
     
     if(textUno==textDos){
       contador++;    
     }
     
   }

   
   if(contador>=2 && es==0){


     textUnoid.setCustomValidity("Este repetidad"); 
     
   }else if(contador<2 && es==0){


     textUnoid.setCustomValidity(""); 
     
   }
   
   
 }
}  




function pasar_usuario(identi){

  document.getElementById('usu_id_fun').value=document.getElementById('nombd'+identi).value;
  document.getElementById('cc').value=document.getElementById('ccbd'+identi).value;
  var dor = document.getElementById("resultado_cc");
  
  ajax=objetoAjax();
  ajax.open("GET", "../../web/Js/Blanco.php",true);
    //divResultado.style.height= "0px";
    ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
      //mostrar resultados en esta capa
      dor.innerHTML = ajax.responseText
    }
  }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  //enviando los valores
  ajax.send()
  
}