<?php
    require_once "../src/produtos_crud.php";

    $produtos = buscarProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="../produtos/inserir.php">+ Produto</a>
    <a href="../index.php">🔙 Voltar</a>
    <table>
        <caption>Relação de Produtos</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Fornecedor ID</th>
    <?php
        foreach($produtos as $produto){?>
            <tr>
                <td><?=$produto['id']?></td>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['preco']?></td>
                <td><?=$produto['quantidade']?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="../produtos/excluir.php">Excluir</a>
                </td>
            </tr>
    <?php } ?>
        </tr>
    </table>
</body>
</html>