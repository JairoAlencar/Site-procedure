<?php
require_once "modelo/itemvendaModelo.php";

function listar(){
	$dados = array();
	$dados['itemvenda'] = listarItenvenda();
	exibir('itemvenda/listar', $dados);
}
?>