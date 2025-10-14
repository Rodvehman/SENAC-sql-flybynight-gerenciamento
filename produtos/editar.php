<?php
    require_once "../src/fornecedor_crud.php";

    $fornecedores = buscarFornecedores($conexao);

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Editar Produtos</title>
</head>
<body>
    <h1>Editar Produtos</h1>
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
            <select type="int" name="fornecedor_id" id="fornecedor_id">
            <option value=""></option>
                <?php foreach($fornecedores as $fornecedor): ?>
                <option value="<?=$fornecedor['id']?>"><?=$fornecedor['nome']?></option>
                <?php endforeach?>
                
        </div>
            <button type="submit">Atualizar</button>
    </form>

    <a href="../produtos/listar.php">🔙 Voltar</a>
</body>
</html>

