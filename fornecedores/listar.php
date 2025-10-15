<?php
    // Importando o arquivo de funções CRUD para Fornecedores
    require_once "../src/fornecedor_crud.php";

    // Chama a função (passando a conexão) e recebe um array associativo com os dados
    $fornecedores = buscarFornecedores($conexao);

    // Testando a exibição dos dados (só para visualizar os dados)
    //var_dump($fornecedores);
    // echo  "<pre>";
    // var_dump($fornecedores);
    // echo "</pre>";
?>
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar Fornecedores</title>
</head>
<body>
    <h1>Fornecedores</h1>
    <a href="../fornecedores/inserir.php">+ Novo Fornecedor</a>
    <a href="../index.php">🔙 Voltar</a>
    <!-- Estruturando uma tabela HTML para exibir os dados -->
     <table class="table table-striped table-hover">
        <caption>Relação de Fornecedores</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <!-- As linhas abaixo (tr/td), serão geradas dinâmicamente, usando um looping no array Fornecedores -->
         <?php
            foreach($fornecedores as $fornecedor){?>
                <tr>
                    <td><?=$fornecedor['id']?></td>
                    <td><?=$fornecedor["nome"]?></td>
                    <td>
                        <!-- Link Dinâmico - Repassando o(s) dado(s) (no caso ID) para o registro e ser editado -->
                        <a href="../fornecedores/editar.php?id=<?=$fornecedor['id']?>">Editar</a>
                        <a class="excluir" href="../fornecedores/excluir.php?id=<?=$fornecedor['id']?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
     </table>
     <script src="../js/confirmar-exclusao.js"></script>
</body>
</html>