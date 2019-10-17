<?php
require_once "modelo/clienteModelo.php";

function adicionar(){
	if (ehPost()) {
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];

		adicionarCliente($rg, $nome);
	exibir('cliente/cliente');
	}else{
	exibir('cliente/cliente');	
	}
}

function listar(){
	$dados = array();
	$dados['clientes'] = listarCliente();
	exibir('cliente/listar', $dados);
}

function deletar($idCliente){
	deletarCliente($idCliente);
	redirecionar ("cliente/listar");
}	

function editar(){
	if (ehPost()) {
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];

		editarCliente($rg, $nome);
	exibir('cliente/cliente');
	}else{
	exibir('cliente/cliente');	
	}
}
?>