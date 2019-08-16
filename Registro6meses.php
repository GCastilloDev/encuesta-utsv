<?php session_start(); 

if (isset($_SESSION['idegresado']) && isset($_SESSION['idUsuario']) && isset($_SESSION['matricula']) && isset($_SESSION['nombre']) ) {

    $idE = $_SESSION['idegresado'];
    $idU = $_SESSION['idUsuario'];
    $mat = $_SESSION['matricula'];
    $nom = $_SESSION['nombre'];



}else{

    echo "<script>location.href='index.php';</script>";
    
}

?>  
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilo-encuesta.css">
<link rel="stylesheet" type="text/css" href="css/noty.min.css">
<link rel="stylesheet" type="text/css" href="css/toastr.min.css">
<link rel="stylesheet" type="text/css" href="css/">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/proton.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wizard.js"></script>
<script src="js/toastr.min.js"></script>
<script src="js/noty.min.js"></script>
			
			
<!------ Include the above in your HEAD tag ---------->
<div class="text-center page-header">
    <a href="./modelo/cerrar_sesion.php"><button class="btn btn-danger" align="right">Cerrar Sesión</button></a>


			<h1>UTSV</h1>

		</div>
		<div class="jumbotron">
			<div class="container">
				<div class="col-lg-4 ">
					<center><img class="responsive" height="130" src="logos/sep.jpg"></center>
				</div>
				<div class="col-lg-4">
					<center>
						<small>SUBSECRETARIA DE EDUACIÒN SUPERIOR.</small>	<br><br>
						<small>COORDINACIÒN GENERAL</small><br>
						<small>DE UNIVERSIDADES TECNOLOGICAS</small><br><br>
						<small>Registro Nacional de Egresados</small><br>
						<small>de las Universidades Tecnologicas</small>
					</center>
				</div>
				<div class="col-lg-4">
					<center></center>
				</div>
			</div>
		</div>	
			<form id="formulario" name="formulario" action="modelo/pRegistro6meses.php?id=<?php echo $_GET['id']; ?>" method="post">
				<fieldset>
					<center>
							<div class="col-lg-12">
								<div class="container">
									<legend>QUESTIONARIO PARA MEDIR LA SATISFACCIÓN DE LOS EGRESADOS DE LA UNIVERSIDAD</legend>
									<legend class="text-justify">
										Con el propósito de conocer la opinión de los egresados de la Universidad Tecnológica acerca de la atención, servicios y preparación académica que recibieron a lo largo de su permanencia en la institución.
									</legend>
								</div>
							</div>
							<center>
								
							
							<div class="col-lg-12">	
								<div class="container">
									<legend><p class="text-justify">
									Le agradecemos proporcione la información solicitada en este cuestionario, que será de carácter estrictamente confidencial. Señala con el número tu nivel de satisfacción de acuerdo a la siguiente escala de valores: <b>Muy Bien MB=5; Bien B=4; Regular R=3; Mal M=2; Pésimo P=1; o bien No Aplica NA=0. Favor de no dejar espacios sin respuestas.</b>
									</p>
								</legend>
								</div>
								<div class="col-lg-1"></div>		
								<div class="col-lg-10">
									
									<p class="text-justify">1.-La infraestructura física con que fué dotada la universidad tecnológica, ¿le pareció?
									<select class="form-control" name="sl1">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select>
									</p>
									<p class="text-justify">2.-¿El equipamiento de los laboratorios y talleres le pareció?
									<select class="form-control" name="sl2">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">3.-¿Los servicios prestados en la Bolsa de Trabajo de la Universidad como los considera?
									<select class="form-control" name="sl3">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">4.-¿El nivel de conocimiento y dominio de los temas mostrado por sus profesores al momento de impartirle la cátedra le pareció?
									<select class="form-control" name="sl4">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">5.-¿El nivel de conocimiento y domino por parte de los profesores en el manejo de los equipos que de encuentran en los laboratorios y talleres al momento de realizar prácticas que su carrera requiere, lo considera?
									<select class="form-control" name="sl5">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p> 
									<p class="text-justify">6.-La experiencia práctica adquirida por parte suya, derivada de las visitas, prácticas en las empresas, las considera
									<select class="form-control" name="sl6">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">7.-¿Cómo considera la preparación académica adquirida?
									<select class="form-control" name="sl7">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">8.-¿Considera que la Estadia complementó su preparación para el mercado laboral?
									<select class="form-control" name="sl8">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p class="text-justify">9.-¿Cómo califica el modelos educativo del nivel 5B Técnico Superior Universitario o Profesional Asociado?
									<select class="form-control" name="sl9">
										<option value="5">MB</option>
										<option value="4">B</option>
										<option value="3">R</option>
										<option value="2">M</option>
										<option value="1">P</option>
										<option value="0">NA</option>
									</select></p>
									<p>Comentarios para mejorar los servicios
										<textarea required="" name="comentario" class="form-control" placeholder="Ingrese un comentario"></textarea>
									</p>
									<p><legend>¡Gracias por su colaboración!</legend></p>
								</div>
							</div>
							
						
					</center>	
				</fieldset>
				
				
				<center>
					<br>
					<button type="submit" name="btn5" class="btn btn-danger">Siguiente ></button>
				</center>
					
				</form>
				
				<br><br>
	</body>
</html>






















 