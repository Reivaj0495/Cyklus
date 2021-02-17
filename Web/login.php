<?php 
    session_start();
    //Funcion que redirige si la sesion esta iniciada lo manda a el index si no te quedas en el login
    if(isset($_SESSION['usuario'])){
        echo '<script> window.location="index.php";</script>';
    }
    else{
      include '../Lib/conf/Connection.php';
      include_once('../Lib/helper.php');
      if(isset($_GET['modulo'])){
                 resolve();
    }
    else{
  ?>
            <!DOCTYPE html>
            <html lang="en" >

            <head>
              <meta charset="UTF-8">
               <link rel="shortcut icon" type="image/x-icon" href="images/sena.png" />
              <title>Iniciar Sesión</title>
                  <link rel="stylesheet" href="css/style.css">
            </head>

            <body style="background: #238276">

              <div  style="background: #238276" class="wrapper">

              <div class="container" style="background: #596548" >
                
                <h1 style="font-weight: bold; "  >BIENVENIDO</h1>
                <div >
                <img src="images/logo.png" width="15%"><img src="images/sena1.png" width="10%" >

                </div>
                             <form class="" action="../Controller/Login/Validate.php" method="post">
                  <input type="text" placeholder=" Documento" name="Documento">
                  <input type="Password" placeholder="Contraseña" name="Contraseña">
                  <button type="submit"  style="background:#fc7323;" ><b style="color: black;">Iniciar Sesión</b></button>
                  <a href="registrate.php"><button  type="button" style="background: #fc7323"><b style="color: black;">Registrarse</b></button></a>
                </form>
                
                <a href="" style="color: black">¿Olvidaste tu contraseña?</a>
                
              </div>
              
              <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
              <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
              <script  src="js/index.js"></script>
            </body>
            </html>
    <?php
 }

}


