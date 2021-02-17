
<!-- Se utilizara una funcion encargada de obligar a los usuarios a iniciar session -->
<?php
 session_start();
       if(isset($_SESSION['usuario'])){
         $Nombre= $_SESSION['usuario'];
         $id =$_SESSION['id'];
        include_once "../Lib/helper.php";
        include_once "../View/Partials/header.php";
            echo "<body class='nav-md'>";
        include_once "../View/Partials/siderbar.php";
?>
          <!-- No tocar daña el head -->
             <div class="right_col" role="main">
          <!-- -->

            <?php
                if (isset($_GET['modulo'])) {
            		    resolve();
            	 }
               else{
                    include_once "../View/Partials/contenido.php";
                   }
            	echo "</div>";
            	      include_once "../View/Partials/footer.php"
              ?>
<!-- Aqui continua la funcion para retornar en caso de que la persona no tenga una Session iniciada -->
  <?php
     }else{
        echo '<script> window.location="Login.php";</script>';
     }
  ?>