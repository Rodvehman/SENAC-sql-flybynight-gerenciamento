<?php
    require_once "../src/lojas_produtos_crud.php";

    $produtos_lojas = buscarProdutosPorLojas($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Estoques</title>
</head>
<body>
    <h1>Listar Produtos x Loja</h1>
    <a href="../produtos_loja/inserir.php">+ Adicionar Estoque</a>
    <a href="../index.php">🔙 Voltar</a>
    <table>
        <caption>Lista de Lojas e Estoques</caption>
        <tr>
            <th>Loja</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach ($produtos_lojas as $produto_loja){?>
                <tr>
                    <td><?=$produto_loja['loja']?></td>
                    <td><?=$produto_loja['produto']?></td>
                    <td><?=$produto_loja['estoque']?></td>
                    <td>
                        <a href="../produtos_loja/editar.php">Editar</a>
                        <a class="excluir" href="../produtos_loja/excluir.php">Excluir</a>
                    </td>
                </tr>
        <?php } ?>
    </table>
</body>
</html>