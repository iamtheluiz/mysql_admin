<?php

	include('../init/init.php');

	//Define o objeto banco
	$banco = new Banco;

	$banco->setPdo($banco->db_connect($_SESSION['host'],$nm_database,$_SESSION['port'],$_SESSION['user'],$_SESSION['pass']));
	
	$banco->actions_database();
	$banco->vizualizar_database($nm_database);