<?php

/*
	Classe que define quase todas as funções do sistema
*/

class Util{
	/* Atributos */
	private $pdo;

	/* Métodos */
	public function __construct(){

	}

	public function valid_login(){
		@session_start();

		if($_SESSION['logged'] == true){

		}else{
			$this->redirect("Você não está logado!","../index.php");
		}
	}

	public function redirect($alert,$url){
		echo "<script>alert('$alert');window.location = '$url';</script>";
	}
}
