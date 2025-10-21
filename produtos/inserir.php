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
        require_once "../src/fornecedor_crud.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            $fornecedor_id = $_POST['fornecedor_id'];
            inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor_id);
            header("location:listar.php");
            exit;
        }

        $fornecedores = buscarFornecedores($conexao);
    ?>
    <h1>Adicionando um novo Produto</h1>
    <a href="../produtos/listar.php">🔙 Voltar</a>
    <form action="" method="post">
        <div>
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao" required>
            </div>
            <div>
                <label for="preco">Preço: </label>
                <input type="float" name="preco" id="preco">
            </div>
            <div>
                <label for="quantidade">Quantidade: </label>
                <input type="int" name="quantidade" id="quantidade">
            </div>
            <div>
            <label for="fornecedor_id">Fornecedor</label>
                <select type="int" name="fornecedor" id="fornecedor">
                    <option value="--Selecione--">--Selecione--</option>
                    <?php foreach($fornecedores as $fornecedor): ?>
                    <option value="<?=$fornecedor['id']?>"><?=$fornecedor['nome']?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>