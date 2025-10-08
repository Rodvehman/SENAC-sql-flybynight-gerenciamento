<?php
    require_once '../src/produtos_crud.php';

    $id = $_GET['id'];
    excluirProdutos($conexao, $id);
    header("location:listar.php");
    exit;
?>