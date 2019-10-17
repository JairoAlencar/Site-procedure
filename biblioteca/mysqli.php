<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "venda_loja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}