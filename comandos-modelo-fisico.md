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

CREATE TABLE produtos(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    fornecedor_id INT NOT NULL,
    FOREIGN KEY(fornecedor_id) REFERENCES fornecedores(id)
);
```

