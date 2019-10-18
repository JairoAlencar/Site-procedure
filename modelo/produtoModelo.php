<?php
function adicionarProduto($desc, $quant){
	$sql = "CALL sp_cadastro_produto ('$desc', '$quant')";
    $resultado = mysqli_query(conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error(conn())); }
    return 'Produto cadastrado com sucesso!!';
}

function listarProduto(){
    $sql = "CALL sp_listar_produto()";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function deletarProduto($codProduto){
    $sql = "CALL sp_deletar_produto('$codProduto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
}

function editarProduto($desc, $quant, $codProduto){
    $sql = "CALL sp_editar_produto ('$desc', '$quant', '$codProduto')";
    $resultado = mysqli_query(conn(), $sql);
    if(!$resultado) { die('Erro ao editar produto' . mysqli_error(conn())); }
    return 'Produto editado com sucesso!!';
}
?>