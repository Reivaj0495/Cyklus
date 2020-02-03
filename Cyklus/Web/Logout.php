<?php
	session_start();
	session_destroy();
        $Cerrando= "Cerrando Sesión" ;
	echo "<script type='text/javascript'>
                                    alert('$Cerrando');
                                    window.location='login.php';
                            </script>";
?>