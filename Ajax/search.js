/* 
 Va a ser la funcion de buscar segun ( Nombre, Cedula )
 */
$(document).ready(function(){
  $('#search').focus()
  
  $('#search').on('keyup', function(){
    var Buscar = $('#search').val();
    var url = '../AjaxRespuestas/search.php';
    
        $.ajax({
          type: 'POST',
          url: url,
          data: ('search='+Buscar),
          success: function(resultado){
              if(resultado!=""){
                  $('#result').html(resultado);
                  $('#tablita').remove();
              }
              
          }
        })
    
    })
  })