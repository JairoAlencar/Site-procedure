<?php
require_once "modelo/vendaModelo.php";

function listar(){
	$dados = array();
	$dados['venda'] = listarVenda();
	exibir('venda/listar', $dados);
}
?>