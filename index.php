<?php session_start(); ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Encuesta Egresado UTSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" type="text/css" href="css/alertify.min.css">
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div style="background: #099025; background-color: #099025; " class="grids-heading gallery-heading signup-heading">
					<h2  style="color: #fff;">Inicio de Sesión</h2>
				</div>
				<div><br>
					<center><img style="width: 250px; height: auto;" class="img img-responsive" src="images/utsv.png"></center>
				</div>
				<form action="" method="post">
					<input required="" type="text" name="matricula"  placeholder="Matricula" >
					<input required="" type="password" name="contrasena" placeholder="Contaseña" >
					<input type="submit" class="btn register" name="btnLog" value="Iniciar Sesión">
				</form>
				<div class="signin-text">
					
					<div class="text-right">
						<p><a href="registrar.php"> Crear Cuenta</a></p>
						<p><a href="log-adm.php"> Administrador</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
			
			
			
		</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/alertify.min.js"></script>
	<script src="js/proton.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>


<?php  

	if (isset($_POST['btnLog'])) {
		
		include_once('controlador/CtrIndex.php');

		$ctr = new CtrIndex();
		$ctr->accionarBtn($_POST['btnLog'], $_POST['matricula'], $_POST['contrasena']);
	}

?>