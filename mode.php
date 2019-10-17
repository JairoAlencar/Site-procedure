<?php
require_once "conexão.php";

function add_cliente(){
	if (ehPost()) {
			$rg   = $_POST["rg"];
			$nome = $_POST["nome"];

				$dados = mysqli_query('CALL sp_cadastro_de_cliente($rg, $nome)');

			exibir("cliente.php", $dados);
		}else {
			exibir("cliente.php");
		}
}

function add_produto(){
	if (ehPost()) {
		
	}else{
		exibir('produto.php');
	}
}
?>