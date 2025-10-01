<?php
    // Importando o arquivo de funções CRUD para Fornecedores
    require_once "../src/fornecedor_crud.php";

    // Chama a função (passando a conexão) e recebe um array associativo com os dados
    $produtos = buscarFornecedores($conexao);

    // Testando a exibição dos dados (só para visualizar os dados)
    //var_dump($fornecedores);
    // echo  "<pre>";
    // var_dump($fornecedores);
    // echo "</pre>";
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
    <h1>Fornecedores</h1>
    <a href="../fornecedores/inserir.php">+ Novo Produto</a>
    <a href="../index.php">🔙 Voltar</a>
    <!-- Estruturando uma tabela HTML para exibir os dados -->
     <table>
        <caption>Relação de Produtos</caption>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Fornecedor</th>
            <th>Ações</th>
        </tr>
        <!-- As linhas abaixo (tr/td), serão geradas dinâmicamente, usando um looping no array Fornecedores -->
         <?php
            foreach($produtos as $produto){?>
                <tr>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto["preco"]?></td>
                    <td><?=$produto["quantidade"]?></td>
                    <td><?=$produto["fornecedor"]?></td>
                    <td><?=$produto["acoes"]?></td>
                    <td>
                        <!-- Link Dinâmico - Repassando o(s) dado(s) (no caso ID) para o registro e ser editado -->
                        <a href="../fornecedores/editar.php?id=<?=$produto['id']?>">Editar</a>
                        <a class="excluir" href="../fornecedores/excluir.php?id=<?=$produto['id']?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
     </table>
     <script src="../js/confirmar-exclusao.js"></script>
</body>
</html>