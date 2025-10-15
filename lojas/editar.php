<?php
    require_once "../src/lojas_crud.php";

    $id = $_GET['id'];

    buscarLojas($conexao);

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $POST['nome'];
        atualizarLojas($conexao, $id);
        header("location:listar.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Editar Loja</title>
</head>
<body>
    
</body>
</html>