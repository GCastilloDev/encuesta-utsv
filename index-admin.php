<?php session_start(); 

$ida = $_SESSION['idamin'];
$mat = $_SESSION['usuario'];
$nom = $_SESSION['nombre'];
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title><?php echo $mat . " | " . $nom; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/datatables.min.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/alertify.min.css">
<link rel="stylesheet" type="text/css" href="css/alertify.css">
<link rel="stylesheet" type="text/css" href="css/alertify.rtl.min.css">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/alertify.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<?php include_once('includes/nav-admin.php'); ?>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<?php include_once('includes/header-admin.php'); ?>
		<div class="main-grid">
			
			<div class="social grid">
					<div class="grid-info">
						<div class="table-responsive text-center">
							<table id="egresados" class="display" style="width:100%">
					        <thead>
					            <tr>
					                <th>Nombre Completo</th>
					                <th>Matricula</th>
					                <th>Status Encuesta</th>
					                <th>Fecha de registro</th>
					                <th>Fecha de contestación de la encuesta</th>
					                <th>Acción</th>
					                
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Nombre Completo</th>
					                <th>Matricula</th>
					                <th>Status Encuesta</th>
					                <th>Fecha de registro</th>
					                <th>Fecha de contestación de la encuesta</th>
					                <th>Acción</th>
					            </tr>
					        </tfoot>
					    </table>
						</div>
					</div>
			</div>
			
			<?php include_once('modelo/conexion.php'); 
				$dcsimple = new DatabaseConnect();
				$cdb = $dcsimple->dbConnectSimple();

				$sql = "SELECT * FROM egresado group by matricula";
				$result = mysqli_query($cdb,$sql);
				$numero = mysqli_num_rows($result);

				$sql2 = "SELECT * FROM encuesta WHERE contesto_encuesta = 'true'";
				$result2 = mysqli_query($cdb,$sql2);
				$numero2 = mysqli_num_rows($result2);

			?>
			<div class="social grid">
				<div class="grid-info container">
					<div class="col-lg-3 col-md-3">
							
						<div class="panel panel-default">
						    <div class="panel-heading">Cantidad de Egresados en el Sistema</div>
						    <div class="panel-body"><center><h1><?php echo $numero ?></h1><br>En el sistema</center></div>
						</div>
						
					</div>
					<div class="col-lg-3 col-md-3">							
						  <div class="panel panel-default">
						    <div class="panel-heading">Egresados que contestaron la encuesta</div>
						    <div class="panel-body"><center><h1><?php echo $numero2 . " DE " . $numero ?></h1><br>Egresado(s)</center></div>
						  </div>
					</div>
				</div>
			</div>
			
		
		
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>


<script type="text/javascript">
 $(document).ready(function() {
    $('#egresados').DataTable( {
        "processing": true,
        "ajax": {
            "url": "funciones/tablaEgresadosEncuestas.php",
            "type": "POST"
        },
        "columns": [
            {"data":"nombre"},
            {"data":"matricula"},
            {"data":"status"},
            {"data":"fechaRegistro"},
            {"data":"fechaContesto"},
            {"data":"accion"}
        ]
    } );
} );
</script>



<script type="text/javascript">
	function eliminar(mat){
		//alert(mat);


		alertify.confirm('<span class="fa fa-question-circle fa-2x" ' + 'style="vertical-align:middle;color:#2B12B4;">' + '</span> Confirma la operación', 'Seguro que quieres eliminar el registro con la matricula <i><em>'+mat+'</em></i>', function()
			{ 
				location.href = 'modelo/delEgresado.php?mat='+mat;
			}, function()
			{ 
				alertify.error('Cancel')
			});
	}
</script>