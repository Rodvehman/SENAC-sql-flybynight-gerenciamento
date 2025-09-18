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

    -- Aqui criamos um id_fornecedor com uma coluna (campo) comum.
    fornecedor_id INT NOT NULL,
    -- Confoguramos a chave estrangeira, referenciando o id da tabela fornecedores.
    FOREIGN KEY(fornecedor_id) REFERENCES fornecedores(id)
);

CREATE TABLE lojas_produtos(
	loja_id INT NOT NULL,
    produto_id INT NOT NULL,
    estoque INT NOT NULL,

-- Criando uma chave primária composta, baseada em mais de uma coluna

    PRIMARY KEY(loja_id, produto_id),
    -- Se na tabela de lojas, uma loja for excluída, TODOS OS REGISTROS de Estoque serão excluídos e da loja também, mantendo integridade do Banco de Dados.
    FOREIGN KEY(loja_id) REFERENCES lojas(id) ON DELETE CASCADE,
    FOREIGN KEY(produtos_id) REFERENCES produtos(id) ON DELETE CASCADE
);

```

