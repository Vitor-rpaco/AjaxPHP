<?php
	
	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$estado = $_GET['estado'];

		switch ($estado) {

			case 'RJ':
				echo '{"estado": ["Rio de Janeiro", "Niteroi", "Angra", "Caxias"]} ';
				break;

			case 'SP':
				echo '{"estado": ["Sao Paulo", "Guarulhos", "Jundiai", "Campinas"]} ';
				break;
			
			default:
				echo "Opa, voce inseriu um estado invalido :(";
				break;
		}
		
	}

	

?>