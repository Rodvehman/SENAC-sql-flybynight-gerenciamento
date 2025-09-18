# Referência de Comandos SQL para modelagem física


## Projeto Fly By Night - Gerenciamento de Estoque

```sql
CREATE DATABASE flybynight_rodrigo CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE fornecedores(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);
```