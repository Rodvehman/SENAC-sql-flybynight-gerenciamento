<?php
/* Script de conexão ao servidor de Banco de Dados
Este arquivo é o responsável por permitir a comunicação entre seu site/projeto e o servidor MySQL
*/
// Parâmetros para a Conexão ao DB

$servidor = "localhost"; //Padrão no Xampp
$banco = "flybynight_rodrigo";
$usuario = "root"; //Padrão no Xampp
$senha = "";//Padrão no Xampp

try {
    // Criando um objeto de conexão, usando a classe PDO (driver de acesso ao BD)
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario, $senha);    
    // Habilitando a exibição de erros
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Configurando o modo de busca de dados para o formato ARRAY ASSOCIATIVO
    $conexao -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $erro){
    // 
    die("Erro ao conectar".$erro -> getMessage());
}

?>