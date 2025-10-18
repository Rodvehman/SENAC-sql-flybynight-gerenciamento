<?php

    require_once "../src/fornecedor_crud.php";
    require_once "../src/produtos_crud.php";
    require_once "../conecta.php";

    function buscarProdutosPorLojas($conexao, $id){
        $sql = "SELECT 
                lojas_produtos.loja_id AS nome_loja, lojas.nome 
                FROM lojas_produtos JOIN lojas ON
                lojas.id = lojas_produtos.lojas_id";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    }