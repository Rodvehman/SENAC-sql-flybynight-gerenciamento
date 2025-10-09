<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produto</title>
</head>
<body>
    <?php
        require_once "../src/produtos_crud.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            $fornecedor_is = $_POST['fornecedor_id'];
            inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor_id);
            header("location:listar.php");
            exit;
        }
    ?>
    <h1>Adicionando um novo Produto</h1>
    <form action="" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao" required>
            <label for="preco">Preço: </label>
            <input type="float" name="preco" id="preco">
            <label for="quantidade">Quantidade: </label>
            <input type="int" name="quantidade" id="quantidade">
            <label for="fornecedor_id">ID Fornecedor</label>
            <input type="int" name="fornecedor_id" id="fornecedor_id">
        </div>
    </form>
</body>
</html>