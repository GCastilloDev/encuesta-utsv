<?php  
	class CtrRegistrar{

		

		public function __construct(){} 

		public function accionBtn($btn, $matricula, $nombre, $apeP, $apeM, $contra){
			if ($btn == 'btnRegistrar') {
				include_once('./modelo/Usuario.php');
				$usuario = new Usuario("", "", "", $matricula, $nombre, $apeP, $apeM, $contra);
				$respuesta = $usuario->add();

				
			}
		}

		public function __destruct(){}
	}
?>