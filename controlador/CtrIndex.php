<?php  

Class CtrIndex{


	public function __construct(){}

	public function accionarBtn($btn, $matricula, $pass){

		include_once('./modelo/Usuario.php');
		$usu = new Usuario(NULL, NULL, NULL, $matricula, NULL, NULL, NULL, $pass);
		//$usu->login();
		$usu->loginAlumno();
	}




}

?>