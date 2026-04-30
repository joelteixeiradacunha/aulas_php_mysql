use escola;

create table tbl_categorias(
	ID_categoria smallint(6) primary key auto_increment,
    Categoria varchar(30)
);

create table tbl_editoras(
	ID_editora int primary key auto_increment,
    Nome_editora varchar(50)
);

create table tbl_autores(
	ID_autor int primary key auto_increment,
    Nome_autor varchar(30),
    Sobrenome_autor varchar(60)
);

create table tbl_livros(
	ID_livro smallint(6) primary key auto_increment,
    Nome_livro varchar(70),
    ID_categoria smallint(6),
    ID_autor smallint(6),
    data_pub date,
    preco_livro decimal(6,2),
    ID_editora smallint(6),
    ISBN13 char(13),
    ISBN10 char(10),
    
    foreign key (ID_categoria) references tbl_categorias(ID_categoria),
    foreign key (ID_autor) references tbl_autores(ID_autor),
    foreign key (ID_editora) references tbl_editoras(ID_editora)
);
-- Excluindo a coluna ID_autor da tabela tbl_livro:
-- ALTER TABLE nome-tabela DROP COLUMN nome-coluna;

describe tbl_livros;

ALTER TABLE tbl_livros
DROP COLUMN ID_Autor;

describe tbl_livros;

-- ADICIONAR COLUNAS -> ALTER TABLE ADD
-- ALTER TABLE nome_da_tabela ADD nome_coluna tipo_dados constraints;

ALTER TABLE tbl_livros
ADD ID_autor int;
describe tbl_livros;

-- Adicionar chave estrangeira
ALTER TABLE tbl_livros
ADD CONSTRAINT ID_autor
FOREIGN KEY (ID_autor)
REFERENCES tbl_autores (ID_autor)
ON DELETE CASCADE
ON UPDATE CASCADE;

describe tbl_categorias;
-- Criar o relacionamento entre a tablea livros e a tabela categorias
ALTER TABLE tbl_livros
ADD CONSTRAINT ID_categoria
FOREIGN KEY (ID_categoria)
REFERENCES tbl_categorias (ID_categoria)
ON DELETE CASCADE
ON UPDATE CASCADE;

-- ALTERAR COLUNAS
-- Modificar tipo de dados
ALTER TABLE tbl_livros
MODIFY COLUMN ID_livro INT;

describe tbl_livros;

-- EXCLUIR UMA TABELA
-- DROP table nome_da_tabela
DROP TABLE tbl_livros;

-- Renomear uma Coluna (CHANGE):
-- ALTER TABLE nome_tabela CHANGE COLUMN antigo_nome novo_nome VARCHAR(50);
ALTER TABLE tbl_livros CHANGE COLUMN data_pub data_publicacao VARCHAR(50);

-- Renomear a tabela
-- ALTER TABLE nome_tabela RENAME TO nome_novo
