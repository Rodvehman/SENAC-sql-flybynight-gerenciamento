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
    