# Comandos CRUD para banco de dados Flybynight

C -> Create -> INSERT
R -> READ -> SELECT
U -> UPDATE -> UPDATE
D -> DELETE -> DELETE

# Inserir dados em Fornecedores
'' sql
    INSERT INTO fornecedores(nome) VALUES ('Eletrônicos Tabajara');
    INSERT INTO forncededores(nome) VALUES
    ('Games ABC'),
    ('Supermercados Tem de Tudo'),
    ('Livraria Demais da Conta');

# Inserindo produtos
''sql
    INSERT INTO produtos(nome, descricao, preco, quantidade, fornecedor_id) VALUES (
        'Smartphone Galaxy S23', 
        'Equipamento com sistema Android e câmera FullHD',
        1599.50,
        20,
        1
        );
    INSERT INTO produtos(nome, descricao, quantidade, fornecedor_id) VALUES (
        'TV Led',
        'Tela 50 polegadas, resulução 4k, 4 entradas HDMI e etc e tal',
        3420,
        12,
        1
    );
''

# Inserindo Lojas em LOTE
''sql
    INSERT INTO lojas(nome) VALUES
        ('Casas Bahia'),
        ('Shopping Zona Leste'),
        ('Bazar das Coisas'),
        ('Americanas');

# Inserindo estoque de produtos para cada loja
''sql    
    INSERT INTO lojas_produtos(loja_id, produto_id, estoque) VALUES
        (4,2,500);

# Atualizando registros
''sql
    UPDATE fornecedores SET nome='Distribuidora XYZ' WHERE id = 3;
    UPDATE produtos SET preco = 2600.77, quantidade = 15 WHERE id = 1;
    UPDATE produtos SET preco = 125 WHERE fornecedor_id = 4;
    UPDATE lojas_produtos SET quantidade = 5 WHERE loja_id = 4 AND produto_id = 1;

# Excluíndo Registros
''sql
    DELETE FROM produtos WHERE id = 4;

# Contando registros em uma tabela
''sql
    SELECT COUNT(*) FROM produtos;
    SELECT nome, preco, quantidade FROM produtos;
    SELECT nome, preco, quantidade FROM produtos WHERE preco > 1000;

# Usando uma junção de tabelas(produtos e fornecedores), para exibir o nome do fornecedor
''sql
    SELECT 
        fornecedores.id, 
        fornecedores.nome, 
        produtos.nome, 
        produtos.descricao, 
        produtos.preco 
    FROM produtos JOIN fornecedores 
    ON produtos.fornecedor_id = fornecedores.id 
    WHERE produtos.fornecedor_id = 4;