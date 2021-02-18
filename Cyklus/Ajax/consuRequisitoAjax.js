/*
    En este ajax trae como respuesta la tabla de los requisitos correspondientes
    al proyecto seleccionado
*/

function consultamelo(){
    var proyectoNombre = document.getElementById("proyecto").value;
    var url = "../AjaxRespuestas/RespuestaRequisito.php";

    $.ajax({
        type:"post",
        url:url,
        data:{proyecto:proyectoNombre},

        success:function(datos){
            $("#tablaConsulta").html(datos);
        }
    })
}
