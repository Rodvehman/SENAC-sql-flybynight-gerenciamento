<?php
    require_once "../src/lojas_produtos_crud.php";
    require_once "../src/loja_crud.php";
    require_once "../src/produtos_crud.php";

    // if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //     $loja = $_POST['loja'];
    //     $produto = $_POST['produto'];
    //     $quantidade = $_POST['quantidade'];
    //     $loja_id = $_POST['loja_id'];
    //     $produto_id = $_POST['produto_id'];

    // }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Inserir Estoque</title>
</head>
<body>
    <h1>Adicionando Estoque</h1>
    <a href="../produtos_loja/listar.php">🔙 Voltar</a>
    <form action="" method="post">
        <div>
            <label for="">Loja:</label>
                <select name="loja" type="text" id="loja">
                    <option value="--Selecione--"></option>
                    <?php
                        foreach ($produtos_lojas as $produto_loja): ?>
                        <option value="<?=$produto_loja['loja_id']?>"<?=$produto_loja['loja_nome']?>></option>                     
                        <?php endforeach ?>
                </select>
        </div>
        <div>
            <label for="">Produto: </label>
            <select value="produto" type="text" id="produto">
                <option value="--Selecione--"></option>
                <?php
                    foreach ($produtos_lojas as $produto_loja): ?>
                    <option value="<?=$produto_loja['produto_id']?>"<?=$produto_loja['produto_nome']?>></option>
                    <?php endforeach ?>
            </select>
        </div>
        <div>
            Quantidade:
            <input type="int">
        </div>
    </form>
</body>
</html>