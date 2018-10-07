<?php

/*
	Classe que define quase todas as funções do sistema
*/

include_once('Util.php');

class Admin extends Util{
	/* Atributos */


	/* Métodos */
	public function __construct(){

	}

	public function db_connect($host,$db_name,$port,$user,$pass){
		try{
			$pdo = new PDO("mysql:host=$host;dbname=$db_name;port=$port",$user,$pass);

			$this->setPdo($pdo);

			@session_start();

			$_SESSION['logged'] = true;
			$_SESSION['host'] = $host;
			$_SESSION['db_name'] = $db_name;
			$_SESSION['port'] = $port;
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;

		}catch (PDOException $e){
			echo "Erro ao conectar com o MySQL: ".$e->getMessage();
			exit;
		}
	}

	/* Métodos Especiais */
	public function setPdo($pdo){
		$this->pdo = $pdo;
	}
	public function getPdo(){
		return $this->pdo;
	}

}
