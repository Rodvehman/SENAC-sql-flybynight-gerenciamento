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
        $sql = "INCLUDE INTO Fornecedores(nome) Values (:nome)";
        // Prepare o comando acima antes de executar no BD.
        $consulta = $conexao -> prepare($sql);
        // Anexar/Atrelar um valor
        $consulta -> bindValue(":nome",$nome);
        // Executa a consulta com o comando e o valor
        $consulta -> execute();
    }

?>