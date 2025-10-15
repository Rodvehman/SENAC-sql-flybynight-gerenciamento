<?php
    require_once "../src/loja_crud.php";

    $lojas = buscarLojas($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
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
            foreach ($lojas as $loja) {?>
                <tr>
                    <td><?=$loja['id']?></td>
                    <td><?=$loja['nome']?></td>
                    <td>
                        <a href="../lojas/editar.php?id=<?=$loja['id']?>">Editar</a>
                        <a class="excluir" href="../lojas/excluir.php?id<?=$loja['id']?>">Excluir</a>
                    </td>                
                </tr> 
        <?php } ?>
    </table>
    <script src="../js/confirmar-exclusao.js"></script>
</body>
</html>