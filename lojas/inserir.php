<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Inserir Loja</title>
</head>
<body>
    <h1>Adicionando Uma Nova Loja</h1>
    <a href="../lojas/listar.php">🔙 Voltar</a>
    <form action="" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <button type="button">Salvar</button>
    </form>
    <?php
        require_once "../src/loja_crud.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['nome'];
            inserirLojas($conexao, $nome);
            header("location:listar.php");
            exit;
        }
    ?>
</body>
</html>