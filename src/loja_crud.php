<?php
    require_once "../conecta.php";

    function buscarLojas($conexao){
        $sql = "SELECT * FROM lojas";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    }

    function inserirLojas($conexao, $nome){
        $sql = "INSERT INTO lojas(nome) VALUES (:nome)";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(":nome", $nome);
        $consulta -> execute();
    }

    function buscarLojasPorID($conexao, $id){
        $sql = "SELECT * FROM Lojas WHERE id= :id";
        $conexao = $conexao -> prepare($sql);
        $consulta -> bindValue(':id', $id);
        $consulta -> execute();
        return $consulta -> fetch();
    }

    function atualizarLojas($conexao, $nome, $id){
        $sql = "UPDATE lojas SET nome = :nome WHERE id = :id";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(':nome', $nome);
        $consulta -> bindValue(':id', $id);
        $consulta -> execute();
    }
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    
</body>
</html>