<?php  

	include_once('./modelo/Encuesta.php');

	class CtrEncuesta{

		public function __construct(){}

		public function accionarBtn($btn, $matricula, $idPersona, $nombre, $informacion){
			
			if (isset($btn)) {




				$nombrePdf = $matricula.".pdf";
				date_default_timezone_set('América/Ciudad_de_México');
				$fechaActual = date('d-m-Y');
				$contesto = true;	

				$encuesta = new Encuesta();
				$encuesta->setPdf($nombrePdf);
				$encuesta->setContesto_encuesta($contesto);
				$encuesta->setFecha_contesto($fechaActual);
				$encuesta->crearEncuesta($matricula, $nombre, $informacion);
			}
			


		} 
	}
?>