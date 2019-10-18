<?php
require_once "modelo/itemvendaModelo.php";

function listar(){
	$dados = array();
	$dados['itemvenda'] = listarItemvenda();
	exibir('itemvenda/listar', $dados);
}
?>