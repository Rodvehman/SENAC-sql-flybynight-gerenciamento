<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    require_once '../conecta.php';

    function buscarProdutos($conexao){
        $sql = "SELECT * FROM Produtos";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    }

    function inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor_id){
        $sql = "INSERT INTO produtos(nome, descricao, preco, quantidade, fornecedor_id) VALUES (:nome, :descricao, :preco, :quantidade, :fornecedor_id)";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(":nome", $nome);
        $consulta -> bindValue(":descricao", $descricao);
        $consulta -> bindValue(":preco", $preco);
        $consulta -> bindValue(":quantidade", $quantidade);
        $consulta -> bindValue(":fornecedor_id", $fornecedor_id);
        $consulta -> execute();
    }

    function excluirProduto($conexao, $id){
        $sql = "DELETE FROM produtos WHERE id = :id";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(":id", $id);
        $consulta -> execute();
    }
?>