/*
    Este ajax toma el valor de select y si es estudiante trae como respuesta
    el un campo para poder seleccionar la ficha 
*/

function campoFicha(){
    var condicion = document.getElementById("tipoUsuario"). value;
    var url = "../AjaxRespuestas/campoFicha.php";

    $.ajax({
        type:"post",
        url:url,
        data:{tipoUsuario:condicion},

        success:function(dato){
            $("#ficha").html(dato);
        }
    })
}