<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Usuario</title>
       <link rel="shortcut icon" type="image/x-icon" href="images/sena.png" />
	 <link rel="stylesheet" href="css/SingUp.css">
	 <link rel="stylesheet" href="css/style1.css">
</head>

<div class="Register-Box">
	<form   class="FormRegister" id="FormLogin" style="" method="POST">
    	<h4>CREAR CUENTA</h4>

<div class="form-input">
    <i class="icon-user"></i>
    	<input type="username"  class="form-control" name="username" autofocus=""  required="">
    		<label class="label-box" for="">Nombre de usuario</label>
				</div>

<div class="form-input">
	<i class="icon-envelope"></i>
    	<input  type="email" class="form-control" name="username" required="" >
    		<label class="label-box" for="">Email</label>
				</div>

<div class="form-input">
    <i class="icon-key"></i>
    	<input type="password"  class="form-control" name="password" required="">
    		<label class="label-box" for="">Contraseña</label>
				</div>

<div class="form-input">
    <i class="icon-enter"></i>
    	<input type="password"  class="form-control" name="password2" required="">
    		<label class="label-box" for="">Confirmar contraseña</label>
</div>


<div class="radio">
	<input  type="radio" value="masculino" name="genero"  id="hombre" required="">
		<label class="label-opciones" for="hombre">Hombre</label>

    <input type="radio" value="femenino" name="genero"  id="mujer" required="">
        <label class="label-opciones" for="mujer">Mujer</label>
        
</div>

                
<div class="checkbox">
	<input type="checkbox" name="terminos" id="checkbox1" value="si" required="">
        <label class="label-opciones" for="checkbox1">Acepto los <a href="#">terminos y condiciones</a></label>
</div>
 
<div>
    <button type="submit"  class="btn-enviar">Registrarse</buttom>
        
</div>
          
</form>
      
 </div>
</body>
</html>