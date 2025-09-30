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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar Fornecedores</title>
</head>
<body>
    <h1>Fornecedores</h1>
    <a href="../fornecedores/listar.php">+ Novo Fornecedor</a>
    <a href="../index.php">🔙 Voltar</a>
    <!-- Estruturando uma tabela HTML para exibir os dados -->
     <table>
        <caption>Relação de Fornecedores</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <!-- As linhas abaixo (tr/td), serão geradas dinâmicamente, usando um looping no array Fornecedores -->
         <?php
            foreach($fornecedores as $fornecedor){?>
                <tr>
                    <td><?=$fornecedor['id']?></td>
                    <td><?=$fornecedor["nome"]?></td>
                </tr>
            <?php } ?>

            
     </table>
</body>
</html>