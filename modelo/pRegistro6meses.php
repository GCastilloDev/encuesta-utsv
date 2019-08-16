<?php  session_start();

    if (isset($_POST['btn5'])) {

        //variables de las preguntas
        $q1 = $_POST['sl1'];
        $q2 = $_POST['sl2'];
        $q3 = $_POST['sl3'];
        $q4 = $_POST['sl4'];
        $q5 = $_POST['sl5'];
        $q6 = $_POST['sl6'];
        $q7 = $_POST['sl7'];
        $q8 = $_POST['sl8'];
        $q9 = $_POST['sl9'];
        $q10 = $_POST['comentario'];

        require_once 'encuesta_6meses_pdf.php';

               $pdf = $_SESSION['matricula'].".pdf";
               if (generarPdf($pdf, 'encuesta-pdf')) {
                    include_once('conexion.php');

                    $con = new DatabaseConnect();
                    $cdb = $con->dbConnectSimple();

                    date_default_timezone_set('America/Los_Angeles');
                    $date = date('Y-m-d');

            $insert = "INSERT INTO `encuesta_6meses` (`idencuesta6meses`, `fecha`, `esta_contestada`, `nombre_archivo`, `egresado_id_egresado`) VALUES (NULL, '$fecha', 'si', '$archivo', '$idE')";

            $resInsert = mysqli_query($cdb, $insert);


            if ($resInsert) {
                $idTest = "SELECT idEncuesta, matriculaEgresado FROM encuesta INNER JOIN usuario on encuesta.idEncuesta = usuario.encuesta_idEncuesta where matriculaEgresado = '".$matricula."'";
                $resIdTest = mysqli_query($cdb, $idTest);

                if ($row = mysqli_fetch_assoc($resIdTest)) {
                    $idTestRow = $row['idEncuesta'];
                }
                //CAMBIAMOS EL VALOR DEL TEST1
                $test = "UPDATE `encuesta`
				    SET encuesta6meses = 'si' where idEncuesta = '".$idTestRow."'";
                $res = mysqli_query($cdb, $test);

                if ($res) {
                    mysqli_close($cdb);
                    echo"<script>location.href='../Usuario.php?id=".$_GET['id']."'</script>";
                }
            } else {
                echo 'ERROR AL INSERTAR LOS DATOS:  '.mysqli_error($cdb);
            }
        } else {
            echo 'ALGO SALIÓ MAL';
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