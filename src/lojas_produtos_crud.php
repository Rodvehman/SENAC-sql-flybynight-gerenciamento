<?php

    require_once "../src/fornecedor_crud.php";
    require_once "../src/produtos_crud.php";
    require_once "../conecta.php";

    function buscarProdutosPorLojas($conexao){
        $sql = "SELECT
                    lojas_produtos.loja_id,
                    lojas.nome AS
                    loja,
                    lojas_produtos.produto_id,
                    produtos.nome AS
                    produto,
                    lojas_produtos.estoque
                FROM
                    lojas_produtos
                JOIN
                    lojas
                ON
                    lojas_produtos.loja_id = lojas.id
                JOIN
                    produtos
                ON
                    lojas_produtos.produto_id = produtos.id";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    }

?>