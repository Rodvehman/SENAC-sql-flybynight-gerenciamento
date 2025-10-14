<?php
    require_once "lojas_crud.php";

    $lojas = buscarLojas($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relação de Lojas</title>
</head>
<body>
    <h1>Lojas</h1>
    <a href="../lojas/inserir.php">+ Novo Fornecedor</a>
    <a href="../index.php">🔙 Voltar</a>
    <table>
        <caption>Relação das Lojas</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach ($lojas as $loja){
                <td><?=$loja['id']?></td>
                <td<?=$loja['nome']?</td>
                <a href="http://">Editar</a>
                <a href="http://">Excluir</a>
            }
        ?>
    </table>
</body>
</html>