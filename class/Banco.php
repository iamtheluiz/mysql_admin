<?php 

	include_once('Util.php');

	class Banco extends Util{

		/* Atributos */


		/* Métodos */
		public function __construct(){

		}

		public function actions_database(){

			$pdo = $this->getPdo();

			echo "<div id='action_bar' class='z-depth-1 blue lighten-1'>";

				echo "<a href='#'>SQL</a>";
				echo "<a href='#'>Estrutura</a>";
				echo "<a href='#'>Estrutura</a>";

			echo "</div>";

		}

		public function vizualizar_database($nm_database){

			$pdo = $this->getPdo();

	        $sql_t = "SHOW TABLES";
	        $query_t = $pdo->prepare($sql_t);
	        $query_t->execute();

	        echo "<table>
				<thead class='blue lighten-1 white-text'>
				<tr>
				<th>Nome</th>
				<th>Item Name</th>
				<th>Item Price</th>
				</tr>
				</thead>";

	        echo "<tbody>";
	        while($row_t = $query_t->fetch(PDO::FETCH_ASSOC)){
	            echo "<tr>";
	            echo "<td>".$row_t["Tables_in_$nm_database"]."</td>";
	            echo "</tr>";
	        }
	        echo "</tbody></table>";
	        $pdo_o = null;

		}


		/* Métodos Especiais */


	}