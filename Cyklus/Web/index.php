<?php
       session_start();
             if(isset($_SESSION['usuario'])){
              $Usuarios$Nombre= $_SESSION['usuario'];
               $id =$_SESSION['id'];
        
        include_once "../Lib/helper.php";
	include_once "../View/Partials/header.php";
        echo "<body class='nav-md'>";
        include_once "../View/Partials/siderbar.php";
    ?>
<!--	<body class="nav-md footer_fixed">-->
        <div class="right_col" role="main">
    <?php
        
	if (isset($_GET['modulo'])) {
		resolve();
	}else{
		include_once "../View/Partials/contenido.php";
       
	}
	echo "</div>";
	include_once "../View/Partials/footer.php"
?>

<?php
     }else{
        echo '<script> window.location="Login.php";</script>';
    }
?>