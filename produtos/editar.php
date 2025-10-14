<?php
    require_once "../src/fornecedor_crud.php";
    require_once "../src/produtos_crud.php";

    $id = $_GET['id'];
    
    $produto =  buscarProdutoPorId($conexao, $id);

    $fornecedores = buscarFornecedores($conexao);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $fornecedor_id = $_POST["fornecedor_id"];
        
        atualizarProduto($conexao, $id, $nome, $descricao, $preco, $quantidade, $fornecedor_id);
        header("location:listar.php");
        exit;
    }

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
     <a href="../produtos/listar.php">🔙 Voltar</a>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">

            <div>
                <label for="nome">Nome: </label>
                <input value="<?=$produto['nome']?>" type="text" name="nome" id="nome" required>
            </div>

            <div>
                <label for="descricao">Descrição: </label>
                <!-- Não dê a entender ou identação detro da tag textarea, pois os espaços vão aparecer se fizer isso. Portanto, deixe na mesma linha... -->
                <textarea name="descricao" id="descricao" rows="5"><?=$produto['descricao']?></textarea>
            </div>

            <div>
                <label for="preco">Preço: </label>
                <input value="<?=$produto['preco']?> "type="float" name="preco" id="preco">
            </div>
            <div>
                <label for="quantidade">Quantidade: </label>
                <input value="<?=$produto['quantidade']?>" type="int" name="quantidade" id="quantidade">
            </div>
            <div>
                <label for="fornecedor_id">Fornecedor</label>
                <select type="int" name="fornecedor_id" id="fornecedor_id">
                <option value=""></option>
                    <?php foreach($fornecedores as $fornecedor): ?>

                          <!-- Lógica da Condicional abaixo é: Se o ID do fornecedor da lista de opções for igual ao fornecedor do produto, escolhemos editar, então faça com que fique selecionado. Caso contrário, não faça nada -->
                    <option value="<?=$fornecedor['id']?>" <?=$fornecedor['id'] === $produto['fornecedor_id']? 'selected': ''?>>                       
                    <?=$fornecedor['nome']?></option>
                    <?php endforeach?>
            </div>    
            </select>
        
        <button type="submit">Atualizar</button> 
    </form>
</body>
</html>

