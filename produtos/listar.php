<?php
    require_once "../src/produtos_crud.php";

    $produtos = buscarProdutos($conexao);
?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="../produtos/inserir.php">+ Novo Produto</a>
    <a href="../index.php">🔙 Voltar</a>
     <table class="table table-striped">
        <caption>Relação de Produtos</caption>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Fornecedor</th>
            <th>Ações</th>
        </tr>
         <?php
            foreach($produtos as $produto){?>
                <tr>
                    <td><?=$produto['nome_produto']?></td>
                    <td><?=$produto["preco"]?></td>
                    <td><?=$produto["quantidade"]?></td>
                    <td><?=$produto["nome_fornecedor"]?></td>
                    <td>
                        <a href="../produtos/editar.php?id=<?=$produto['id']?>">Editar</a>
                        <a class="excluir" href="../produtos/excluir.php?id=<?=$produto['id']?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
     </table>
     <script src="../js/confirmar-exclusao.js"></script>
</body>
</html>