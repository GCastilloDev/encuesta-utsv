<?php session_start();

$ida = $_SESSION['idamin'];
$mat = $_SESSION['usuario'];
$nom = $_SESSION['nombre'];

include_once('modelo/conexion.php'); 

$dcsimple = new DatabaseConnect();
$cdb = $dcsimple->dbConnectSimple();

$consulta = 'SELECT * FROM anio_respuestas';
$resultadoConsulta = mysqli_query($cdb, $consulta);

$pg = [0, 0, 0];
$p8 = [0, 0, 0, 0, 0, 0, 0, 0];
$p9 = [0, 0, 0, 0, 0, 0, 0, 0];
$p26 = [0, 0, 0, 0, 0, 0, 0];
$p19 = [0, 0, 0];
$p25 = [0, 0, 0, 0, 0, 0];

while ($row = mysqli_fetch_assoc($resultadoConsulta)) {
    
    if ($row['pg']) {
        $aux = $pg[0] + 1;
        $pg[0] = $aux;
        $aux = 0;

        if ($row['pg'] == 2) {
          $aux = $pg[1] + 1;
          $pg[1] = $aux;
          $aux = 0;
        }
  
        if ($row['pg'] == 1) {
            $aux = $pg[2] + 1;
            $pg[2] = $aux;
            $aux = 0;
        }
  
    }
    

    if ($row['p8']) {
      $aux = $p8[0] + 1;
      $p8[0] = $aux;
      $aux = 0;

      if ($row['p8'] == 7) {
        $aux = $p8[1] + 1;
        $p8[1] = $aux;
        $aux = 0;
      }

      if ($row['p8'] == 6) {
          $aux = $p8[2] + 1;
          $p8[2] = $aux;
          $aux = 0;
      }

      if ($row['p8'] == 5) {
          $aux = $p8[3] + 1;
          $p8[3] = $aux;
          $aux = 0;
      }

      if ($row['p8'] == 4) {
          $aux = $p8[4] + 1;
          $p8[4] = $aux;
          $aux = 0;
      }

      if ($row['p8'] == 3) {
          $aux = $p8[5] + 1;
          $p8[5] = $aux;
          $aux = 0;
      }

      if ($row['p8'] == 2) {
          $aux = $p8[6] + 1;
          $p8[6] = $aux;
          $aux = 0;
	  }
	  
	  if ($row['p8'] == 1) {
		$aux = $p8[7] + 1;
		$p8[7] = $aux;
		$aux = 0;
	}
  }

  if ($row['p9']) {
    $aux = $p9[0] + 1;
    $p9[0] = $aux;
    $aux = 0;

	if ($row['p9'] == 7) {
        $aux = $p9[1] + 1;
        $p9[1] = $aux;
        $aux = 0;
	}

      if ($row['p9'] == 6) {
          $aux = $p9[2] + 1;
          $p9[2] = $aux;
          $aux = 0;
      }

      if ($row['p9'] == 5) {
          $aux = $p9[3] + 1;
          $p9[3] = $aux;
          $aux = 0;
      }

      if ($row['p9'] == 4) {
          $aux = $p9[4] + 1;
          $p9[4] = $aux;
          $aux = 0;
      }

      if ($row['p9'] == 3) {
          $aux = $p9[5] + 1;
          $p9[5] = $aux;
          $aux = 0;
      }

      if ($row['p9'] == 2) {
          $aux = $p9[6] + 1;
          $p9[6] = $aux;
          $aux = 0;
	  }
	  
	  if ($row['p9'] == 1) {
		$aux = $p9[7] + 1;
		$p9[7] = $aux;
		$aux = 0;
	}
  }

  if ($row['p26']) {
    $aux = $p26[0] + 1;
    $p26[0] = $aux;
    $aux = 0;

    if ($row['p26'] == 6) {
      $aux = $p26[1] + 1;
      $p26[1] = $aux;
      $aux = 0;
    }

    if ($row['p26'] == 5) {
        $aux = $p26[2] + 1;
        $p26[2] = $aux;
        $aux = 0;
    }

    if ($row['p26'] == 4) {
        $aux = $p26[3] + 1;
        $p26[3] = $aux;
        $aux = 0;
    }

    if ($row['p26'] == 3) {
        $aux = $p26[4] + 1;
        $p26[4] = $aux;
        $aux = 0;
    }

    if ($row['p26'] == 2) {
        $aux = $p26[5] + 1;
        $p26[5] = $aux;
        $aux = 0;
    }

    if ($row['p26'] == 1) {
        $aux = $p26[6] + 1;
        $p26[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p19']) {
    $aux = $p19[0] + 1;
    $p19[0] = $aux;
    $aux = 0;

    if ($row['p19'] == 2) {
      $aux = $p19[1] + 1;
      $p19[1] = $aux;
      $aux = 0;
    }

    if ($row['p19'] == 1) {
        $aux = $p19[2] + 1;
        $p19[2] = $aux;
        $aux = 0;
    }

  }

  if ($row['p25']) {
    $aux = $p25[0] + 1;
    $p25[0] = $aux;
    $aux = 0;

    if ($row['p25'] == 5) {
        $aux = $p25[1] + 1;
        $p25[1] = $aux;
        $aux = 0;
    }

    if ($row['p25'] == 4) {
        $aux = $p25[2] + 1;
        $p25[2] = $aux;
        $aux = 0;
    }

    if ($row['p25'] == 3) {
        $aux = $p25[3] + 1;
        $p25[3] = $aux;
        $aux = 0;
    }

    if ($row['p25'] == 2) {
        $aux = $p25[4] + 1;
        $p25[4] = $aux;
        $aux = 0;
    }

    if ($row['p25'] == 1) {
        $aux = $p25[5] + 1;
        $p25[5] = $aux;
        $aux = 0;
    }
  }
  

  
}



?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title><?php echo $mat.' | '.$nom; ?></title>
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
	<?php include_once 'includes/nav-admin.php'; ?>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<?php include_once 'includes/header-admin.php'; ?>
		<div class="main-grid">
			
			<!-- <div class="social grid">
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
			</div> -->
			<p>
            <h1 class="text-center" style="margin-bottom:20px">Gráficas encuesta de un año</h1>
            </p>

            <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12" style="margin-bottom: 25px">


            <p style="margin-top: 20px">
            <a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaGenero('Gráfica Pregunta Genero','Genero:',<?php echo $pg[1].','.$pg[2]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta Genero </a>
			<a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaOcho('Gráfica Pregunta 8','Al concluir tus estudios en la UT ¿cuánto tiempo tardaste en encontrar tu primer empleo, en empezar a trabajar por tu cuenta o en un negocio familiar o propio?',<?php echo $p8[7].','.$p8[6].','.$p8[5].','.$p8[4].','.$p8[3].','.$p8[2].','.$p8[1]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 8 </a>
			<a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaNueve('Gráfica Pregunta 9','Indica la razón principal por la que no has empezado a trabajar:',<?php echo $p9[7].','.$p9[6].','.$p9[5].','.$p9[4].','.$p9[3].','.$p9[2].','.$p9[1]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 9 </a>
			<a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaVeintiseis('Gráfica Pregunta 26','Ingreso mensual aproximado en tu empleo actual o el último que desempeñaste',<?php echo $p26[6].','.$p26[5].','.$p26[4].','.$p26[3].','.$p26[2].','.$p26[1]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 26 </a>
			<a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaDiecinueve('Gráfica Pregunta 19','¿A qué régimen jurídico pertenece la empresa donde trabajas actualmente o donde trabajaste en tu último empleo?',<?php echo $p19[1].','.$p19[2]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 19 </a>
			<a style="margin-bottom: 5px" class="btn btn-success" onclick="graficaPreguntaVeinticinco('Gráfica Pregunta 25','¿Por cuantas horas a la semana estás contratado o lo estabas en el último empleo que desempeñaste?',<?php echo $p25[5].','.$p25[4].','.$p25[3].','.$p25[2].','.$p25[1]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 25 </a>
            </p>
              
            </div>

            <div class="col-lg-12">

              <p>
                <h3 class="text-center" style="padding-bottom:25px"><b id="titulo"></b></h3>
              </p>

              <p>
                <h4 class="text-center" style="padding-bottom:25px"><b id="pregunta"></b></h4>
              </p>


              <div class="text-center" id="chart_div" style="position:absolute; left: 0; width: 100%; height:500px;">
              
              </div>

            </div>
        </div>
      </div>	
		
		
	</section>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/graficasNuevo.js"></script>
    <script> graficaPreguntaGenero('Gráfica Pregunta Genero','Genero:',<?php echo $pg[1].','.$pg[2]; ?>) </script>
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