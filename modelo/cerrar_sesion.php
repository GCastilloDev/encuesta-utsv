 <?php 
	session_start();
	
	
	
	// Finalmente, destruye la sesion
	session_destroy();

	// Destruye todas las variables de la sesion
	session_unset();
	


	// Redireccionar a la pagina de login
	header ("Location: ../index.php");


 ?>

