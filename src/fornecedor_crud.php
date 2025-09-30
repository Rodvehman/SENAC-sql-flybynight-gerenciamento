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


?>