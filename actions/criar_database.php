<?php

	include('../init/init.php');

	//Verifica se o formulário foi enviado
	if(isset($_POST['nm_database'])){

		//Verifica se os campos tem valor
		if(!empty($_POST['nm_database'])){

			$nm_database = $_POST['nm_database'];

			//Cria o banco de dados
			$admin->create_database($nm_database);

		}else{
			$admin->redirect("Favor, envie um valor válido!","../home.php");
		}

	}else{
		$admin->redirect("Favor, preencha o formulário!","../home.php");
	}