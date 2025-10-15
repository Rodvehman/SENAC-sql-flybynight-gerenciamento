<?php
    require_once "../src/loja_crud.php";

    $id = $_GET['id'];

    $loja = buscarLojasPorID($conexao, $id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        atualizarLojas($conexao, $nome, $id);
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
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$loja['id']?>">
        <div>
            <label for="nome">Nome:</label>
            <input value="<?=$loja['nome']?>" type="text" name="nome" id="nome" required>
        </div>
    </form>
    <button type="submit">Atualizar</button>
</head>
<body>
    
</body>
</html>