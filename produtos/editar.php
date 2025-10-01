<?php
    require_once '../src/fornecedor_crud.php';

    // Pegando da URL o parâmetro chamado id
    $id = $_GET['id'];
    // Chamamos a função, passando a conexão e o id do fornecedor a ser buscado
    $fornecedor = buscarFornecedorPorId($conexao, $id);
    
    // echo "<pre>";
    // var_dump($fornecedor);
    // echo "</pre>";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        atualizarFornecedor($conexao, $nome, $id);
        // Após direcionar usando header()...
        header("location:listar.php");
        // ... sempre encerre/interrompa o script (evitando erros/execuções adicionais)
        exit;
    }      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Editar Fornecedor</title>
</head>
<body>
    <h1>Editar fornecedor</h1>
    <form action="" method="post">
        <!-- Sempre coloque o código/id do registro de forma oculta no formulário -->
        <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
        <div>
            <label for="nome">Nome: </label>
            <input value="<?=$fornecedor['nome']?>" type="text" name="nome" id="nome" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>

    <a href="../fornecedores/listar.php">🔙 Voltar</a>
</body>
</html>

