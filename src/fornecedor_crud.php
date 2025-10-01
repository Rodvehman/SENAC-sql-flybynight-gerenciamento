<!DOCTYPE html>
<html lang="en">
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
/* Neste arquivo teremos todas as funções que serão usadas para manipulação de (CRUD) de Fornecedores em nosso sistema e banco de dados. */

// Acessando o arquivo de conexão com o BD
    require_once "../conecta.php";

    // Retronará um array associativo com os fornecedores
    function buscarFornecedores($conexao){
            // Montamos o comando SQL para consulta
            $sql = "SELECT * FROM Fornecedores ORDER BY nome";
            // Executamos e guardamos o resultado da consulta
            $consulta = $conexao -> query($sql);
            // Retornamos o resultado em formato de Array Associativo
            return $consulta -> fetchAll();
    };

    function inserirFornecedor($conexao, $nome){
        // Montando comando SQL de INSERT e aplicando um "named parameter". Parâmetro nomeado é utilizado para atribuir um valor.
        $sql = "INSERT INTO fornecedores(nome) VALUES (:nome)";
        // Prepare o comando acima antes de executar no BD.
        $consulta = $conexao -> prepare($sql);
        // Anexar/Atrelar um valor
        $consulta -> bindValue(":nome",$nome);
        // Executa a consulta com o comando e o valor
        $consulta -> execute();
    }

    // Vai Receber o ID do Fornecedor a ser carregado, e depois atualizado
    function buscarFornecedorPorId($conexao, $id){
        $sql = "SELECT * FROM Fornecedores WHERE id= :id";
        $consulta = $conexao -> prepare($sql); //prepare: coloca o comando na memória
        $consulta -> bindValue(':id', $id); // bindValue: liga o valor ($id) ao parâmetro (:id)
        $consulta -> execute(); // execute: roda a consulta no banco
        return $consulta -> fetch();// retorna o resultado da consulta como um vetor
        
    }

    // Recebe o nome e o id do fornecedor que será atualizado
    function atualizarFornecedor($conexao, $nome, $id){
        $sql = "UPDATE fornecedores SET nome = :nome WHERE id = :id";
        $consulta = $conexao -> prepare($sql);
        // Vincular o valor ao parâmetro
        $consulta -> bindValue(":nome", $nome);
        $consulta -> bindValue("id", $id);

        $consulta -> execute();
    }
    // Recebe o id do fornecedor a ser excluído
    function excluirFornecedor($conexao, $id){
        $sql = "DELETE FROM fornecedores WHERE id = :id";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(':id', $id);
        $consulta -> execute();
    }
?>