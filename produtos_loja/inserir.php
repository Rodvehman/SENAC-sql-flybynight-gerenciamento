<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Inserir Estoque</title>
</head>
<body>
    <?php
        require_once "../src/lojas_produtos_crud.php";
        require_once "../src/loja_crud.php";
        require_once "../src/produtos_crud.php";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $loja_id = $_POST['loja_id'];
            $produto_id = $_POST['produto_id'];
            $estoque = $_POST['estoque'];
            inserirEstoquePorLoja($conexao, $loja_id, $produto_id, $estoque);
            header("location:listar.php");
            exit;
        }

        $produtos_lojas = buscarProdutosPorLojas($conexao);
    ?>
    <h1>Adicionando Estoque</h1>
    <a href="../produtos_loja/listar.php">🔙 Voltar</a>
    <form action="" method="post">
        <div>
            <label for="loja">Loja:</label>
                <select name="loja" type="text" id="loja">
                    <option value="--Selecione--"></option>
                    <?php foreach ($produtos_lojas as $produto_loja): ?>
                    <option value="<?=$produto_loja['loja_id']?>"<?=$produto_loja['loja_nome']?>></option>                     
                    <?php endforeach ?>
                </select>
        </div>
        <div>
            <label for="produto">Produto: </label>
            <select value="produto" type="text" id="produto">
                <option value="--Selecione--"></option>
                <?php foreach ($produtos_lojas as $produto_loja): ?>
                <option value="<?=$produto_loja['loja_id']?>"><?=$produto_loja['nome']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">Quantidade:</label>
            <input class="quantidade" id="quantidade" type="int" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>