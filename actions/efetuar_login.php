<meta charset="utf-8">
<?php

	//Include das funções do sistema
	include_once('../class/Admin.php');
	$admin = new Admin;

	$host = $_SERVER['HTTP_HOST'];
	$host = explode(':',$host);
	$host = $host[0];
	
	//Verifica se o formulário foi enviado
	if(isset($_POST['tx_user']) and isset($_POST['tx_pass']) and isset($_POST['nr_port'])){

		//Verifica se entre os dados enviados não existe algum nulo
		if(!empty($_POST['tx_user']) and !empty($_POST['tx_pass']) and !empty($_POST['nr_port'])){

			$tx_user = $_POST['tx_user'];
			$tx_pass = $_POST['tx_pass'];
			$nr_port = $_POST['nr_port'];

			$admin->db_connect($host,'mysql', $nr_port, $tx_user, $tx_pass);

			header("Location: ../home.php");

		}else{
			$admin->redirect("Prencha o formulário!","../index.php");
		}
	}else{
		$admin->redirect("Favor, envie o formulário!","../index.php");
	}