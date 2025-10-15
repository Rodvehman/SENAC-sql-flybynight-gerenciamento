<?php
    require_once "../conecta.php";

    function buscarLojas($conexao){
        $sql = "SELECT * FROM lojas";
        $consulta = $conexao -> query($sql);
        return $consulta -> fetchAll();
    };

    function inserirLojas($conexao, $nome){
        $sql = "INSERT INTO lojas(nome) VALUES (:nome)";
        $consulta = $conexao -> prepare($sql);
        $consulta -> bindValue(":nome", $nome);
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