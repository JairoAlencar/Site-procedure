<?php
function listarVenda(){
	$sql = "CALL sp_listar_venda()";
    $resultado = mysqli_query(conn(), $sql);
    $venda = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $venda[] = $linha;
    }
    return $venda;
}
?>