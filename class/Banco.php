<?php 

	include_once('Util.php');

	class Banco extends Util{

		/* Atributos */


		/* Métodos */
		public function __construct(){

		}

		public function vizualizar_database($nm_database){

			$pdo = $this->db_connect($_SESSION['host'],$nm_database,$_SESSION['port'],$_SESSION['user'],$_SESSION['pass']);
			$this->setPdo($pdo);

	        $sql_t = "SHOW TABLES";
	        $query_t = $pdo->prepare($sql_t);
	        $query_t->execute();

	        echo "<table>
				<thead>
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