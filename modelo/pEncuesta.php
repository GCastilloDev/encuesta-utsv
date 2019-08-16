<?php  session_start();

	
    if (isset($_POST['btnFinalizar'])) {
        


                //GENERAL
                $pg  = $_POST['pg'];
                $q1  = $_POST['p1'];
                $q2  = $_POST['p2'];
                $q3  = $_POST['p3'];
                if (isset($_POST['nombreUni'])) {
                    $q4  = $_POST['nombreUni'];
                }else{ $q4 = NULL; }

                //CONTACTO
                
                $q5  = $_POST['telFijo'];
                $q6  = $_POST['telMovil'];
                $q7  = $_POST['radio'];
                $q8  = $_POST['telRecado'];
                $q9  = $_POST['propietarioRecado'];
                $q10 = $_POST['localizacion_a'];
                $q11  = $_POST['colonia_a'];
                $q12  = $_POST['municipio_a'];
                $q13  = $_POST['estado_a'];
                $q14  = $_POST['pais_a'];
                $q15  = $_POST['localizacion_b'];
                $q16  = $_POST['colonia_b'];
                $q17  = $_POST['municipio_b'];
                $q18  = $_POST['estado_b'];
                $q19  = $_POST['pais_b'];
                $q20  = $_POST['localizacion_c'];
                $q21  = $_POST['colonia_c'];
                $q22  = $_POST['municipio_c'];
                $q23  = $_POST['estado_c'];
                $q24  = $_POST['pais_c'];
                $q25  = $_POST['propietarioRecado_c'];
                $q26  = $_POST['correoPersonal'];
                $q27  = $_POST['correoLaboral'];
                $q28  = $_POST['facebook'];
                $q29  = $_POST['twitter'];
                $q30  = $_POST['myspace'];
                $q31  = $_POST['skype'];
                $q32  = $_POST['otro'];
                $q33  = $_POST['nombre_familia_1'];
                $q34  = $_POST['telefono_familia_1'];
                $q35  = $_POST['correo_familia_1'];
                $q36  = $_POST['nombre_familia_2'];
                $q37  = $_POST['telefono_familia_2'];
                $q38  = $_POST['correo_familia_2'];
                $q39  = $_POST['nombre_laboral_1'];
                $q40  = $_POST['telefono_laboral_1'];
                $q41  = $_POST['correo_laboral_1'];
                $q42  = $_POST['nombre_laboral_2'];
                $q43  = $_POST['telefono_laboral_2'];
                $q44  = $_POST['correo_laboral_2'];
                $q45  = $_POST['nombre_escolar_1'];
                $q46  = $_POST['telefono_escolar_1'];
                $q47  = $_POST['correo_escolar_1'];
                $q48  = $_POST['nombre_escolar_2'];
                $q49  = $_POST['telefono_escolar_2'];
                $q50  = $_POST['correo_escolar_2'];

                //FORMACIÓN RECIBIDA

                    $q51 = $_POST['p33-a'];
                    $q52 = $_POST['p33-b'];
                    $q53 = $_POST['p33-c'];
                    $q54 = $_POST['p33-d'];
                    $q55 = $_POST['p33-e'];
                    $q56 = $_POST['p33-f'];
                    $q57 = $_POST['p33-g'];
                    $q58 = $_POST['p33-h'];
                    $q59 = $_POST['p33-i'];
                    $q60 = $_POST['p33-j'];
                    $q61 = $_POST['p33-k'];
                    $q62 = $_POST['p33-l'];
                    $q63 = $_POST['p33-m'];

                    $q64 = $_POST['p34'];
                    $q65 = $_POST['p35'];

                //_____________________________________________________________________________
                $q66 = $_POST['p8'];
                $q67 = $_POST['p9'];

                $q90 = $_POST['p26'];
                $q91 = $_POST['p19'];
                $q92 = $_POST['p25'];


               include_once('./encuesta_1anio_pdf_1.php');

               $pdf = $_SESSION['matricula'].".pdf";
               if (generarPdf($pdf, 'encuesta-pdf')) {
               		include_once('conexion.php');

               		$con = new DatabaseConnect();
               		$cdb = $con->dbConnectSimple();

               		date_default_timezone_set('America/Los_Angeles');
               		$date = date('Y-m-d');

               		$updEncuesta = "UPDATE `encuesta` SET `contesto_encuesta` = 'true', `fecha_contesto` = '$date' WHERE `encuesta`.`idencuesta` = (SELECT encuesta_idencuesta FROM egresado WHERE egresado.matricula = '".$_SESSION['matricula']."');";

               		 $resUpd = mysqli_query($cdb, $updEncuesta);

                     $est = "INSERT INTO `anio_respuestas` (`idanio_respuestas`,`anio_fecha`,`pg`, `p8`, `p9`, `p26`, `p19`, `p25`) VALUES (NULL,'".$date"','".$pg."','".$q66."','".$q67."','".$q90."','".$q91."','".$q92."');";

                    $respes = mysqli_query($cdb,$est);
                    $idanio_respuestas = mysqli_insert_id($cdb);
                   


               		 if ($resUpd) {
               		 	echo "<script>
							location.href='../info-contesto.php';
               		 	</script>";
               		 }else{
               		 	echo "error: " . $resUpd . "  " . mysqli_error($cdb);
               		 }
               }else{
               	echo "no se creo";
               }

    }





    function generarPdf($archivoPdf, $carpeta){

	  $content = ob_get_clean();
	  ini_set("pcre.backtrack_limit", "5000000");
	  set_time_limit(0);
	  $mpdf = new \Mpdf\Mpdf([
	  'default_font_size' => 7,
	  'default_font' => 'dejavusans'
	]);
	  $mpdf->SetHTMLHeader('<h3 style="color: #3D8F2F">UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRÚZ (UTSV)</h3>');
	  $mpdf->setFooter('{PAGENO}');
	  $mpdf->allow_charset_conversion=true;
	  $mpdf->charset_in='UTF-8';
	  $mpdf->writeHTML($content);
	  $mpdf->output('../'.$carpeta.'/'.$archivoPdf, 'F');

	  if (file_exists('../'.$carpeta.'/'.$archivoPdf)) {
	    return true;
	  }else{
	    return false;
	  }

}

?>