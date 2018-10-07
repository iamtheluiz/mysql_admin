<?php

	include('../init/init.php');

	//Define o objeto banco
	$banco = new Banco;

	$nm_database = $_GET['nm_database'];

	$banco->vizualizar_database($nm_database);