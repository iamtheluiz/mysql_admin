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

	public function listar_databases(){

		//Bancos de dados padrão do mysql
		$bancos_padrao = ['information_schema','mysql','performance_schema'];

		//Pega a conexão
		$pdo = $this->getPdo();

		//Comando SQL que exibe os bancos
		$sql = "SHOW DATABASES";
		$query = $pdo->prepare($sql);
		$query->execute();

		while($row = $query->fetch(PDO::FETCH_OBJ)){

			//Caso o banco seja um dos bancos padrões, sai do código
			if(in_array($row->Database,$bancos_padrao)){
				goto sair;
			}

			echo "<li>";
			echo "<div class='collapsible-header' onclick='vizualizar_database(".'"'.$row->Database.'"'.")'><i class='material-icons'>subdirectory_arrow_right</i>$row->Database</div>";
			echo "<div class='collapsible-body'>";

			//Faz a consulta das tabelas
			$pdo_o = $this->db_connect($_SESSION['host'], $row->Database, $_SESSION['port'], $_SESSION['user'], $_SESSION['pass']);

			$sql_t = "SHOW TABLES";
			$query_t = $pdo_o->prepare($sql_t);
			$query_t->execute();

			while($row_t = $query_t->fetch(PDO::FETCH_ASSOC)){
			    echo "<a href='#' class='collection-item'><i class='material-icons'>arrow_right</i>".$row_t["Tables_in_$row->Database"]."</a><br>";
			}

			echo "</div>";
			echo "</li>";

			//echo "<a href='#' class='collection-item'><i class='material-icons'>subdirectory_arrow_right</i>$row->Database</a>";

			sair:

		}

	}
	public function create_database($nm_database){

		//Define a conexão
		$pdo = $this->getPdo();

		//Executa a consulta
		$sql = "CREATE DATABASE $nm_database";
		$query = $pdo->query($sql);
		$query->execute();

		//Verifica se o comando foi executado
		if($query->rowCount() > 0){

			header("Location: ../vizualizar_database.php?nm_database=$nm_database");

		}else{
			$this->redirect("Não foi possível criar seu banco de dados!","../home.php");
		}

	}

	/* Métodos Especiais */
	

}
