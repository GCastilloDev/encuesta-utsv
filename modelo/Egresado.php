<?php  
include_once('./modelo/InterfaceProcesos.php');


	class Egresado implements AbcSistema{

		private $idEgresado;
		private $matricula;
		private $nombre;
		private $apellido_paterno;
		private $apellido_materno;
		
		public function __construct($idEgresado, $matricula, $nombre, $apellido_paterno, $apellido_materno){

			$this->idEgresado = $idEgresado;
			$this->matricula = $matricula;
			$this->nombre    = $nombre;
			$this->apellido_paterno = $apellido_paterno;
			$this->apellido_materno = $apellido_materno;
			


		}


		

		public function getMatricula(){
			return $this->matricula;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getApellidoPaterno(){
			return $this->apellido_paterno;
		}

		public function getApellidoMaterno(){
			return $this->apellido_materno;
		}

		public function add(){}

		public function upd(){}

		public function del($mat){}

		public function __destruct(){}
		

	}
?>