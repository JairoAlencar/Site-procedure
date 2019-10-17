<?php
 function listarItenvenda(){
 	$sql = "CALL sp_listar_itemvenda()";
    $resultado = mysqli_query(conn(), $sql);
    $itemvenda = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $itemvenda[] = $linha;
    }
    return $itemvenda;
 }
?>