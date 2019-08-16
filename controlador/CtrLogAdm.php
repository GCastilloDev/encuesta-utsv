<?php  
	/**
	 * 
	 */
	class CtrLogAdm 
	{
		
		public function __construct()
		{
			
		}

		public function accionarBtn($btn, $usu, $pass){

		include_once('./modelo/Usuario.php');
		$usu = new Usuario(NULL, $usu, NULL, NULL, NULL, NULL, NULL, $pass);
		$usu->loginAdm();

		}
	}
?>