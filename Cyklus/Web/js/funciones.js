function agregaformU(datos){

	d=datos.split('||');

	$('#idU').val(d[0]);
	$('#descripcionU').val(d[1]);
	$('#estadoU').val(d[2]);
}

function actualizaDatos($modulo,$controlador){


	id=$('#idU').val();
	descripcion=$('#descripcionU').val();
	estado=$('#estadoU').val();

	cadena= "id=" + id + "&descripcion=" + descripcion + "&estado=" + estado;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEditar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro actualizado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}

function agregaformD(datos){

	d=datos.split('||');

	$('#idD').val(d[0]);
	$('#descripcionD').val(d[1]);
	$('#estadoD').val(d[2]);
}

function eliminaDatos($modulo,$controlador){


	id=$('#idD').val();
	descripcion=$('#descripcionD').val();
	estado=$('#estadoD').val();

	cadena= "id=" + id;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEliminar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro eliminado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}



function agregaformC(datos){

	d=datos.split('||');

	$('#idC').val(d[1]);
	$('#descripcionC').val(d[2]);
	$('#deptoC').val(d[3]);
	$('#estadoC').val(d[4]);
}

function actualizaDatosC($modulo,$controlador){


	id=$('#idC').val();
	descripcion=$('#descripcionC').val();
	depto=$('#deptoC').val();
	estado=$('#estadoC').val();

	cadena= "id=" + id + "&descripcion=" + descripcion + "&depto=" + depto + "&estado=" + estado;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEditar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro actualizado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}


function agregaformX(datos){

	d=datos.split('||');

	$('#idX').val(d[1]);
	$('#descripcionX').val(d[2]);
	$('#deptoX').val(d[3]);
	$('#estadoX').val(d[4]);
}

function eliminaDatosC($modulo,$controlador){


	id=$('#idX').val();
	descripcion=$('#descripcionX').val();
	depto=$('#deptoX').val();
	estado=$('#estadX').val();

	cadena= "id=" + id;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEliminar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro eliminado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}


function agregaformF(datos){

	d=datos.split('||');

	$('#idF').val(d[0]);
	$('#descripcionF').val(d[1]);
	$('#teleF').val(d[2]);
	$('#direccionF').val(d[3]);
	$('#ciudadF').val(d[4]);
	$('#estadoF').val(d[5]);
}

function actualizaDatosF($modulo,$controlador){


	id=$('#idF').val();
	descripcion=$('#descripcionF').val();
	tele=$('#teleF').val();
	direccion=$('#direccionF').val();
	ciudad=$('#ciudadF').val();
	estado=$('#estadoF').val();

	cadena= "id=" + id + "&descripcion=" + descripcion + "&tele=" + tele + "&direccion=" + direccion + "&ciudad=" + ciudad + "&estado=" + estado;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEditar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro actualizado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}


function agregaformZ(datos){

	d=datos.split('||');

	$('#idZ').val(d[0]);
	$('#descripcionZ').val(d[1]);
	$('#teleZ').val(d[2]);
	$('#direccionZ').val(d[3]);
	$('#ciudadZ').val(d[4]);
	$('#estadoZ').val(d[5]);
}

function eliminaDatosF($modulo,$controlador){


	id=$('#idZ').val();
	descripcion=$('#descripcionZ').val();
	tele=$('#teleZ').val();
	direccion=$('#direccionZ').val();
	ciudad=$('#ciudadZ').val();
	estado=$('#estadoZ').val();

	cadena= "id=" + id;

	$.ajax({
		type:"GET",
		url:"index.php?modulo="+$modulo+"&controlador="+$controlador+"&funcion=postEliminar",
		data:cadena,
		success:function(r){
			
			if(r==1){
				alertify.success("Registro eliminado con exito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	location.reload();
}