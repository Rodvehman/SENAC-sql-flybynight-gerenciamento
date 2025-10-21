<?php

    require_once "../src/fornecedor_crud.php";
    require_once "../src/produtos_crud.php";
    require_once "../conecta.php";

    function buscarProdutosPorLojas($conexao){
        $sql = "SELECT
                        lojas.id AS loja_id,
                        lojas.nome AS loja, 
                        produtos.id AS produto_id,
                        produtos.nome AS produto,
                        lojas_produtos.estoque
                    FROM
                        lojas_produtos
                    JOIN
                        lojas ON lojas_produtos.loja_id = lojas.id
                    JOIN
                        produtos ON lojas_produtos.produto_id = produtos.id";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    }

    function inserirEstoquePorLoja($conexao, $loja_id, $produto_id, $estoque){
        $sql = "INSERT INTO lojas_produtos(loja_id, produto_id, estoque) 
                VALUES (:loja_id, :produto_id, :estoque)";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(":loja_id", $loja_id);
        $consulta -> bindValue(":produto_id", $produto_id);
        $consulta -> bindValue(":estoque", $estoque);
        $consulta -> execute();
    }
?>