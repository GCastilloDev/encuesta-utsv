A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
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
<link rel="stylesheet" type="text/css" href="css/diseñoAlertaContraseña.css">
</head>
<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div style="background: #099025; background-color: #099025;" class="grids-heading gallery-heading signup-heading">
					<h2 style="color: #fff;">Registro</h2>
				</div>
				<form method="post" action="">
					<input required="" type="text" name="matricula" placeholder="Ingrese su Matricula" >
					<input required="" type="text" name="nombre" placeholder="Ingrese su(s) Nombre(s)">
					<input required="" type="text" name="apellidoP" placeholder="Ingrese su Apellido Paterno" >
					<input required="" type="text" name="apellidoM" placeholder="Ingrrese su Apellido Materno" >
					<input required="" autofocus="autofocus" min="6" max="10" type="password" id="contra" name="contra" placeholder="Ingrese la Contraseña">
					<input required="" autofocus="autofocus" min="6" max="10" type="password" id="contraConfirm" name="contraConfir" placeholder="Confirma la Contraseña">
					
					<input type="submit" id="registrar" class="register" name="btnRegistrar" value="Registrarse">
				</form>
				<a href="index.php">Regresar</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/alertify.min.js"></script>
	<script src="js/proton.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>

<script type="text/javascript">

$(document).ready(function() {
	//variables
	var pass1 = $('#contra');
	var pass2 = $('#contraConfirm');
	var confirmacion = "Las contraseñas si coinciden, Puede continuar ";
	var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
	var negacion = "No coinciden las contraseñas, No podra continuar hasta que corrija su contraseña";
	var vacio = "La contraseña no puede estar vacía";
	//oculto por defecto el elemento span
	var span = $('<span></span>').insertAfter(pass2);
	span.hide();
	//función que comprueba las dos contraseñas
	function coincidePassword(){
	var valor1 = pass1.val();
	var valor2 = pass2.val();
	//muestro el span
	span.show().removeClass();
	//condiciones dentro de la función
	if(valor1 != valor2){
	span.text(negacion).addClass('negacion');
	$("#registrar").prop("disabled", true);
	}
	if(valor1.length==0 || valor1==""){
	span.text(vacio).addClass('negacion');	
	}
	//if(valor1.length<6 || valor1.length>10){
	//span.text(longitud).addClass('longitud');
	//}
	if(valor1.length!=0 && valor1==valor2){
	span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
	$("#registrar").prop("disabled", false);	
	}
	}
	//ejecuto la función al soltar la tecla
	pass2.keyup(function(){
	coincidePassword();
	});
});
</script>


<?php  
	if (isset($_POST['btnRegistrar'])) {

		include_once('./controlador/CtrRegistrar.php');

		$ctrRegistrar = new CtrRegistrar();
		$ctrRegistrar->accionBtn('btnRegistrar', $_POST['matricula'], $_POST['nombre'], $_POST['apellidoP'], $_POST['apellidoM'], $_POST['contraConfir']);
	}
?>

