/* 
    Este codigo se encarga del cambio de estado del usuario por medio del click en el boton
*/

function cambio(este){
    var id_usuario = este.id;
    var url="../AjaxRespuestas/cambioEstados.php";

    $.ajax({
        type:"post",
        url:url,
        data:{id_usuario},

        success:function(datos){
            location.reload();
        }
    });
}