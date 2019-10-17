<?php
require_once "modelo/produtoModelo.php";

function adicionar(){
	if(ehPost()){
		$desc = $_POST['desc'];
		$quant = $_POST['quant'];

		adicionarProduto($desc, $quant);
		exibir('produto/produto');
	}else{
		exibir('produto/produto');
	}
}

function listar(){
	$dados = array();
	$dados['produto'] = listarProduto();
	exibir('produto/listar', $dados); 
}

function deletar($codProduto){
	deletarProduto($codProduto);
	redirecionar("produto/listar");
}

function editar($codProduto){
	if(ehPost()){
		$desc = $_POST['desc'];
		$quant = $_POST['quant'];

		editarProduto($desc, $quant);
		exibir('produto/produto');
	}else{
		exibir('produto/produto');
	}
}
?>