<!DOCTYPE html>
<html>
<head >
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="../js/jquery2.0.3.min.js"></script>
	<script src="../js/alertify.min.js"></script>

</head>
<body style="background-color: #1C923E;>

</body>
</html>

<?php  
	
	if (isset($_REQUEST['mat'])) {
		$mat = $_REQUEST['mat'];

		procedimientoDelUsu($mat);
	}






	function procedimientoDelUsu($matricula){

			include_once('../modelo/conexion.php');
			
			$con = new DatabaseConnect();
			$cdb = $con->dbConnectSimple();

			mysqli_autocommit($cdb, false);

				$qIdEncuesta = "SELECT * FROM `egresado` WHERE matricula = '$matricula'";
    			$rIdEnc     = mysqli_query($cdb, $qIdEncuesta);

    			if ($fila = mysqli_fetch_assoc($rIdEnc)) {
    				$idEncuesta = $fila['encuesta_idencuesta']; 
    			}else{
    				echo mysqli_error($cdb);
    			}
				
				
				$flag1 = true;
				$flag2 = true;
				$flag3 = true;

				$q1 = "DELETE FROM `usuario` WHERE `usuario`.`matricula` = $matricula";

    			$result1 = mysqli_query($cdb,$q1); 
    			
    			

    			$q2 = 'DELETE FROM `egresado` WHERE `egresado`.`matricula` = '.$matricula.';';

    			$result2 = mysqli_query($cdb,$q2); 

				

    			$q3 = "DELETE FROM encuesta WHERE idencuesta = ".$idEncuesta.";";

                $result3 = mysqli_query($cdb,$q3); 

    			  

    			 

				 if (!$result1) {  
				     $flag1 = false;  
				     echo "Error q1: " . mysqli_error($cdb) . ". ";
				     echo $q1;  
				 } 

				 

				 if (!$result2) {  
				     $flag2 = false;  
				     echo "Error q2: " . mysqli_error($cdb) . ". ";
				     echo $q2;  
				 } 

				  

				 if (!$result3) {  
				     $flag3 = false;  
				     echo "Error q3: " . mysqli_error($cdb) . ". ";
				     echo $q3;  
				 } 



    			if ($flag1 == true && $flag2 == true and $flag3 = true) {
    				mysqli_commit($cdb);
					?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-check-square-o fa-2x" '
						                +    'style="vertical-align:middle;color:#13C366;">'
						                + '</span> La acción trascurrió satisfactoriamente';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("El usuario fué eliminado satisfactoriamente");

						    setTimeout("location.href='../index-admin.php'", 4000);

					</script>
				<?php		
				}else{
					mysqli_rollback($cdb);
					?>
					<script type="text/javascript">
						 //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-times-circle fa-2x" '
						                +    'style="vertical-align:middle;color:#e10000;">'
						                + '</span>  Error en la Aplicación';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, Hubo un error en la eliminación del registro; si el problema perciste favor de reportarlo. ERROR: <?php echo mysqli_error($cdb); ?>");
					</script>
				<?php	
				}

			 
		}
?>

