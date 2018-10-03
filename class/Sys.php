<?php

/*
	Classe que define quase todas as funções do sistema
*/

class Sys{
	/* Atributos */
	private $pdo;

	/* Métodos */
	public function __construct(){

	}

	private function db_connect($host,$db_name,$user,$pass){
		try{
			$pdo = new PDO("mysql:host=$host;dbname=$db_name;port=3307",$user,$pass);

			return $pdo;
		}catch (PDOException $e){
			echo "Erro ao conectar com o MySQL: ".$e->getMessage();
		}
	}

	public function redirect($alert,$url){
		echo "<script>alert('$alert');window.location = '$url';</script>";
	}

	/* Métodos Especiais */
	public function setPdo($pdo){
		$this->pdo = $pdo;
	}
	public function getPdo(){
		return $this->pdo;
	}
}
