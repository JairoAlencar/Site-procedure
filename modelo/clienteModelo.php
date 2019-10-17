<?php
function adicionarCliente($rg, $nome){
    $sql = "CALL sp_cadastro_de_cliente ('$rg', '$nome')";
    $resultado = mysqli_query(conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente' . mysqli_error(conn())); }
    return 'Cliente cadastrado com sucesso!!';
}

function listarCliente(){
    $sql = "CALL sp_listar_cliente()";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $linha;
    }
    return $clientes;
}

function deletarCliente($idCliente){
    $sql = "CALL sp_deletar_cliente('$idCliente')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cliente' . mysqli_error($cnx)); }
    return 'Cliente deletado com sucesso!';
}

function ($rg, $nome){
    $sql = "CALL sp_editar_cliente ('$rg', '$nome')";
    $resultado = mysqli_query(conn(), $sql);
    if(!$resultado) { die('Erro ao editar cliente' . mysqli_error(conn())); }
    return 'Cliente editado com sucesso!!';
}
?>