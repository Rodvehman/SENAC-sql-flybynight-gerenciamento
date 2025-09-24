# Comandos usados para projeto Microblog

## Modelagem conceitual


## Criar o Banco de Dados
    create database microblog_rodrigo_avehman charset utf8mb4;

### Criar tabela usuarios
    CREATE TABLE usuarios(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL,
        senha VARCHAR(255) NOT NULL,
        nivel_acesso ENUM('admin', 'editor') NOT NULL
    );

### Criar tabela publicacoes
    CREATE TABLE publicacoes(
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        resumo TEXT NOT NULL,
        imagem VARCHAR(50) NOT NULL,
        data_publicacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        usuario_id INT NOT NULL,
        FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
    )
