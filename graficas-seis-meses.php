<?php session_start();

$ida = $_SESSION['idamin'];
$mat = $_SESSION['usuario'];
$nom = $_SESSION['nombre'];

include_once('modelo/conexion.php'); 

$dcsimple = new DatabaseConnect();
$cdb = $dcsimple->dbConnectSimple();

$consulta = 'SELECT * FROM tsu_respuestas';
$resultadoConsulta = mysqli_query($cdb, $consulta);

$p1 = [0, 0, 0, 0, 0, 0, 0];
$p2 = [0, 0, 0, 0, 0, 0, 0];
$p3 = [0, 0, 0, 0, 0, 0, 0];
$p4 = [0, 0, 0, 0, 0, 0, 0];
$p5 = [0, 0, 0, 0, 0, 0, 0];
$p6 = [0, 0, 0, 0, 0, 0, 0];
$p7 = [0, 0, 0, 0, 0, 0, 0];
$p8 = [0, 0, 0, 0, 0, 0, 0];
$p9 = [0, 0, 0, 0, 0, 0, 0];

while ($row = mysqli_fetch_assoc($resultadoConsulta)) {
    
    if ($row['p1']) {
        $aux = $p1[0] + 1;
        $p1[0] = $aux;
        $aux = 0;

        if ($row['p1'] == 5) {
          $aux = $p1[1] + 1;
          $p1[1] = $aux;
          $aux = 0;
        }
  
        if ($row['p1'] == 4) {
            $aux = $p1[2] + 1;
            $p1[2] = $aux;
            $aux = 0;
        }
  
        if ($row['p1'] == 3) {
            $aux = $p1[3] + 1;
            $p1[3] = $aux;
            $aux = 0;
        }
  
        if ($row['p1'] == 2) {
            $aux = $p1[4] + 1;
            $p1[4] = $aux;
            $aux = 0;
        }
  
        if ($row['p1'] == 1) {
            $aux = $p1[5] + 1;
            $p1[5] = $aux;
            $aux = 0;
        }
  
        if ($row['p1'] == 0) {
            $aux = $p1[6] + 1;
            $p1[6] = $aux;
            $aux = 0;
        }
    }
    

    if ($row['p2']) {
      $aux = $p2[0] + 1;
      $p2[0] = $aux;
      $aux = 0;

      if ($row['p2'] == 5) {
        $aux = $p2[1] + 1;
        $p2[1] = $aux;
        $aux = 0;
      }

      if ($row['p2'] == 4) {
          $aux = $p2[2] + 1;
          $p2[2] = $aux;
          $aux = 0;
      }

      if ($row['p2'] == 3) {
          $aux = $p2[3] + 1;
          $p2[3] = $aux;
          $aux = 0;
      }

      if ($row['p2'] == 2) {
          $aux = $p2[4] + 1;
          $p2[4] = $aux;
          $aux = 0;
      }

      if ($row['p2'] == 1) {
          $aux = $p2[5] + 1;
          $p2[5] = $aux;
          $aux = 0;
      }

      if ($row['p2'] == 0) {
          $aux = $p2[6] + 1;
          $p2[6] = $aux;
          $aux = 0;
      }
  }

  if ($row['p3']) {
    $aux = $p3[0] + 1;
    $p3[0] = $aux;
    $aux = 0;

    if ($row['p3'] == 5) {
      $aux = $p3[1] + 1;
      $p3[1] = $aux;
      $aux = 0;
    }

    if ($row['p3'] == 4) {
        $aux = $p3[2] + 1;
        $p3[2] = $aux;
        $aux = 0;
    }

    if ($row['p3'] == 3) {
        $aux = $p3[3] + 1;
        $p3[3] = $aux;
        $aux = 0;
    }

    if ($row['p3'] == 2) {
        $aux = $p3[4] + 1;
        $p3[4] = $aux;
        $aux = 0;
    }

    if ($row['p3'] == 1) {
        $aux = $p3[5] + 1;
        $p3[5] = $aux;
        $aux = 0;
    }

    if ($row['p3'] == 0) {
        $aux = $p3[6] + 1;
        $p3[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p4']) {
    $aux = $p4[0] + 1;
    $p4[0] = $aux;
    $aux = 0;

    if ($row['p4'] == 5) {
      $aux = $p4[1] + 1;
      $p4[1] = $aux;
      $aux = 0;
    }

    if ($row['p4'] == 4) {
        $aux = $p4[2] + 1;
        $p4[2] = $aux;
        $aux = 0;
    }

    if ($row['p4'] == 3) {
        $aux = $p4[3] + 1;
        $p4[3] = $aux;
        $aux = 0;
    }

    if ($row['p4'] == 2) {
        $aux = $p4[4] + 1;
        $p4[4] = $aux;
        $aux = 0;
    }

    if ($row['p4'] == 1) {
        $aux = $p4[5] + 1;
        $p4[5] = $aux;
        $aux = 0;
    }

    if ($row['p4'] == 0) {
        $aux = $p4[6] + 1;
        $p4[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p5']) {
    $aux = $p5[0] + 1;
    $p5[0] = $aux;
    $aux = 0;

    if ($row['p5'] == 5) {
      $aux = $p5[1] + 1;
      $p5[1] = $aux;
      $aux = 0;
    }

    if ($row['p5'] == 4) {
        $aux = $p5[2] + 1;
        $p5[2] = $aux;
        $aux = 0;
    }

    if ($row['p5'] == 3) {
        $aux = $p5[3] + 1;
        $p5[3] = $aux;
        $aux = 0;
    }

    if ($row['p5'] == 2) {
        $aux = $p5[4] + 1;
        $p5[4] = $aux;
        $aux = 0;
    }

    if ($row['p5'] == 1) {
        $aux = $p5[5] + 1;
        $p5[5] = $aux;
        $aux = 0;
    }

    if ($row['p5'] == 0) {
        $aux = $p5[6] + 1;
        $p5[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p6']) {
    $aux = $p6[0] + 1;
    $p6[0] = $aux;
    $aux = 0;

    if ($row['p6'] == 5) {
      $aux = $p6[1] + 1;
      $p6[1] = $aux;
      $aux = 0;
    }

    if ($row['p6'] == 4) {
        $aux = $p6[2] + 1;
        $p6[2] = $aux;
        $aux = 0;
    }

    if ($row['p6'] == 3) {
        $aux = $p6[3] + 1;
        $p6[3] = $aux;
        $aux = 0;
    }

    if ($row['p6'] == 2) {
        $aux = $p6[4] + 1;
        $p6[4] = $aux;
        $aux = 0;
    }

    if ($row['p6'] == 1) {
        $aux = $p6[5] + 1;
        $p6[5] = $aux;
        $aux = 0;
    }

    if ($row['p6'] == 0) {
        $aux = $p6[6] + 1;
        $p6[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p7']) {
    $aux = $p7[0] + 1;
    $p7[0] = $aux;
    $aux = 0;

    if ($row['p7'] == 5) {
      $aux = $p7[1] + 1;
      $p7[1] = $aux;
      $aux = 0;
    }

    if ($row['p7'] == 4) {
        $aux = $p7[2] + 1;
        $p7[2] = $aux;
        $aux = 0;
    }

    if ($row['p7'] == 3) {
        $aux = $p7[3] + 1;
        $p7[3] = $aux;
        $aux = 0;
    }

    if ($row['p7'] == 2) {
        $aux = $p7[4] + 1;
        $p7[4] = $aux;
        $aux = 0;
    }

    if ($row['p7'] == 1) {
        $aux = $p7[5] + 1;
        $p7[5] = $aux;
        $aux = 0;
    }

    if ($row['p7'] == 0) {
        $aux = $p7[6] + 1;
        $p7[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p8']) {
    $aux = $p8[0] + 1;
    $p8[0] = $aux;
    $aux = 0;

    if ($row['p8'] == 5) {
      $aux = $p8[1] + 1;
      $p8[1] = $aux;
      $aux = 0;
    }

    if ($row['p8'] == 4) {
        $aux = $p8[2] + 1;
        $p8[2] = $aux;
        $aux = 0;
    }

    if ($row['p8'] == 3) {
        $aux = $p8[3] + 1;
        $p8[3] = $aux;
        $aux = 0;
    }

    if ($row['p8'] == 2) {
        $aux = $p8[4] + 1;
        $p8[4] = $aux;
        $aux = 0;
    }

    if ($row['p8'] == 1) {
        $aux = $p8[5] + 1;
        $p8[5] = $aux;
        $aux = 0;
    }

    if ($row['p8'] == 0) {
        $aux = $p8[6] + 1;
        $p8[6] = $aux;
        $aux = 0;
    }
  }

  if ($row['p9']) {
    $aux = $p9[0] + 1;
    $p9[0] = $aux;
    $aux = 0;

    if ($row['p9'] == 5) {
      $aux = $p9[1] + 1;
      $p9[1] = $aux;
      $aux = 0;
    }

    if ($row['p9'] == 4) {
        $aux = $p9[2] + 1;
        $p9[2] = $aux;
        $aux = 0;
    }

    if ($row['p9'] == 3) {
        $aux = $p9[3] + 1;
        $p9[3] = $aux;
        $aux = 0;
    }

    if ($row['p9'] == 2) {
        $aux = $p9[4] + 1;
        $p9[4] = $aux;
        $aux = 0;
    }

    if ($row['p9'] == 1) {
        $aux = $p9[5] + 1;
        $p9[5] = $aux;
        $aux = 0;
    }

    if ($row['p9'] == 0) {
        $aux = $p9[6] + 1;
        $p9[6] = $aux;
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
            <h1 class="text-center" style="margin-bottom:20px">Gráficas encuesta seis meses</h1>
            </p>

            <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-4">


            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 1','La infraestructura física con que fué dotada la universidad tecnológica, ¿le pareció?',<?php echo $p1[1].','.$p1[2].','.$p1[3].','.$p1[4].','.$p1[5].','.$p1[6]; ?>)">
            <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 1 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 2','¿El equipamiento de los laboratorios y talleres le pareció?',<?php echo $p2[1].','.$p2[2].','.$p2[3].','.$p2[4].','.$p2[5].','.$p2[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 2 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 3','¿Los servicios prestados en la Bolsa de Trabajo de la Universidad como los considera?',<?php echo $p3[1].','.$p3[2].','.$p3[3].','.$p3[4].','.$p3[5].','.$p3[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 3 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 4','¿El nivel de conocimiento y dominio de los temas mostrado por sus profesores al momento de impartirle la cátedra le pareció?',<?php echo $p4[1].','.$p4[2].','.$p4[3].','.$p4[4].','.$p4[5].','.$p4[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 4 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 5','¿El nivel de conocimiento y domino por parte de los profesores en el manejo de los equipos que de encuentran en los laboratorios y talleres al momento de realizar prácticas que su carrera requiere, lo considera?',<?php echo $p5[1].','.$p5[2].','.$p5[3].','.$p5[4].','.$p5[5].','.$p5[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 5 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 6','La experiencia práctica adquirida por parte suya, derivada de las visitas, prácticas en las empresas, las considera:',<?php echo $p6[1].','.$p6[2].','.$p6[3].','.$p6[4].','.$p6[5].','.$p6[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 6 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 7','¿Cómo considera la preparación académica adquirida?',<?php echo $p7[1].','.$p7[2].','.$p7[3].','.$p7[4].','.$p7[5].','.$p7[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 7 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 8','¿Considera que la Estadia complementó su preparación para el mercado laboral?',<?php echo $p8[1].','.$p8[2].','.$p8[3].','.$p8[4].','.$p8[5].','.$p8[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 8 </a>
            </p>
            <p style="margin-top: 20px">
            <a class="btn btn-success" onclick="graficaPreguntas('Gráfica Pregunta 9','¿Cómo califica el modelos educativo del nivel 5B Técnico Superior Universitario o Profesional Asociado?',<?php echo $p9[1].','.$p9[2].','.$p9[3].','.$p9[4].','.$p9[5].','.$p9[6]; ?>)">
              <span class="glyphicon glyphicon-tasks"></span> Gráfica Pregunta 9 </a>
            </p>
              
            </div>

            <div class="col-lg-8">

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
    <script>graficaPreguntas('Gráfica Pregunta 1','La infraestructura física con que fué dotada la universidad tecnológica, ¿le pareció?',<?php echo $p1[1].','.$p1[2].','.$p1[3].','.$p1[4].','.$p1[5].','.$p1[6]; ?>);</script>
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