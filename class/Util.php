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
	public function db_connect($host,$db_name,$port,$user,$pass){
		try{
			$pdo = new PDO("mysql:host=$host;dbname=$db_name;port=$port",$user,$pass);

			@session_start();

			$_SESSION['logged'] = true;
			$_SESSION['host'] = $host;
			$_SESSION['db_name'] = $db_name;
			$_SESSION['port'] = $port;
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;

			return $pdo;

		}catch (PDOException $e){
			echo "Erro ao conectar com o MySQL: ".$e->getMessage();
			exit;
		}
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

	/* Métodos Especiais */
	public function setPdo($pdo){
		$this->pdo = $pdo;
	}
	public function getPdo(){
		return $this->pdo;
	}
}
