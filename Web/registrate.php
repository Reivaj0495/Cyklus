<?php  
include_once('../Lib/helper.php'); 
include_once('../View/Partials/head.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>RegistEr</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body class="cover" style="background-image: url(../../Web/assets/img/loginFont.jpg);">
	<form action="#" method="POST" class="form-inline registErForm" align="center">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-add zmdi-hc-5x" style='margin-right: 15px;'></i></p>
		<p class="text-center text-muted text-uppercase">Registrate</p>

		<div class="form-group label-floating" id="label-form-L">
			<label class="control-label" for="UserCedu">Cedúla</label>
			<input class="form-control" name="Usu_id" type="text" required="" maxlength="10" pattern="[0-9].{7,}" title="Solo se pueden números" id="valida_cedula" >
			<p class="help-block" >Escribe tú cedúla</p>
		</div>
		
		<div class="form-group label-floating" id="label-form-R">
			<label class="control-label" for="UserNom">Nombres</label>
			<input class="form-control" name="Usu_nombre" id="Usu_nombre" type="text" required="" pattern="[a-zA-Z]*" title="Solo se pueden letras">
			<p class="help-block" >Escribe tús nombres</p>
		</div>

		<div class="form-group label-floating" id="label-form-L">
			<label class="control-label" for="UserApe">Apellidos</label>
			<input class="form-control" name="Usu_apellido" id="Usu_apellido" type="text" required="" pattern="[a-zA-Z]*" title="Solo se pueden letras">
			<p class="help-block" >Escribe tús apellidos</p>
		</div>

		<div class="form-group label-floating" id="label-form-R">
			<label class="control-label" for="UserEmail">E-mail</label>
			<input class="form-control" name="Usu_correo" type="email" required="" id="valida_correo">
			<p class="help-block">Escribe tú E-mail</p>
		</div>

		<div class="form-group label-floating" id="select-form-L">
			<select class="form-control" id="select-centrado" name="Cen_id" required="">
				<option value="">Seleccione Centro</option>
				<?php 
				foreach ($cen as $centros){
					echo "<option value=" . $centros['Cen_id']. ">" . $centros['Cen_nombre']. "</option>";
				}
				?>
			</select>
		</div>

		<div class="form-group label-floating" id="select-form-R">
			<select class="form-control" id="select-centrado" name="Esp_id" required="">
				<option value="">Seleccione Especialidad</option>
				<?php 
				foreach ($esp as $especialidad){
					echo "<option value=" . $especialidad['Esp_id']. ">" . $especialidad['Esp_nombre']. "</option>";
				}
				?>
			</select>
		</div>

		<div class="form-group label-floating" id="label-form-L">
			<label class="control-label" for="UserTel">Telefono</label>
			<input class="form-control" name="Usu_telefono" type="text" required="" maxlength="10" pattern="[0-9].{6,}" title="Solo se pueden números"  id="valida_telefono" >
			<p class="help-block">Escribe tú telefono</p>
		</div>

		<div class="form-group label-floating" id="label-form-R">
			<label class="control-label" for="UserPass">Contraseña</label>
			<input class="form-control" name="Usu_contrasena" id="pass" type="password" required="">
			<p class="help-block">Escribe tú contraseña</p>
		</div>

		<div class="text-center">
			<input type="submit" value="Regístrate" class="btn btn-raised btn-danger">
		</div>

		<label class="eye" id="change" style="margin-right: 50px;"></label>

		<p class="text-center">
			¿Ya tienes una cuenta?
		</p>
		<div class="text-center">
			<a href="login.php" class="btn btn-raised btn-primary">Inicia sesión</a>
		</div>
	</form>



	<?php 
	include_once('../View/Partials/footer1.php');
	?>