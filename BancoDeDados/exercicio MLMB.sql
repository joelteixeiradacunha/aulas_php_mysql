create database LOCADORA;

use locadora;

create table ENDERECO(
	enderecoID int primary key auto_increment,
    cep varchar(9) not null,
    logradouro varchar(100) not null,
    numero varchar(15),
    complemento varchar(100),
    bairro varchar(100),
    cidade varchar(50),
    uf varchar(2)
);

create table CLIENTES(
	clienteID int primary key auto_increment,
    nome varchar(100) not null,
    cpf varchar(15) not null,
    telefone varchar(15),
    email varchar(100),
    enderecoID int,
    
    foreign key (enderecoID) references endereco(enderecoID)
);

create table CATEGORIAS(
	categoriaID int primary key auto_increment,
    categoria varchar(20),
    valorDiaria decimal(10,2)
);

create table VEICULOS(
	veiculoID int primary key auto_increment,
    placa varchar(7) unique,
    marca varchar(20) not null,
    modelo varchar(20),
    ano int,
    categoriaID int,
    status varchar(15),
    
    foreign key (categoriaID) references categorias(categoriaID)
);

create table FUNCIONARIOS(
	funcionarioID int primary key auto_increment,
    nome varchar(100) not null,
    cargo varchar(20) not null,
    telefone varchar(15),
    email varchar(100)
);

create table LOCACOES(
	locacaoID int primary key auto_increment,
    clienteID int,
    veiculoID int,
    funcionarioID int,
    dataLocacao date,
    dataDevolucaoPrevista date,
    dataDevolucaoReal date,
    valorTotal decimal(10, 2),
    
    foreign key (clienteID) references clientes(clienteID),
    foreign key (veiculoID) references veiculos(veiculoID),
    foreign key (funcionarioID) references funcionarios(funcionarioID)
);

create table pagamentos(
	pagamentoID int primary key auto_increment,
    locacaoID int,
    dataPagamento date,
    valorPago decimal(10,2),
    metodo varchar(20),
    
    foreign key (locacaoID) references locacao(locacaoID)
);

-- INSERÇÃO DOS DADOS NAS TABELAS

insert into endereco (cep, logradouro, numero, complemento, bairro, cidade, uf) values
('03150-000', 'Rua A', '100', NULL, 'Santana', 'São Paulo', 'SP'),
('21000-100', 'Av. B', '200', 'casa A', 'Realejo', 'Rio de Janeiro', 'RJ'),
('31500-000', 'Rua C', '300', null, null, 'Belo Horizonte', 'MG'),
('41234-001', 'Rua D' , 's/n', 'sitio Alegre', 'Zona Rural', 'Curitiba', 'PR'),
('51000-000', 'Av. E' , '500', 'Fundos', 'Centro', 'Porto Alegre', 'RS'),
('04201-001', 'Rua das Flores', '123', null, 'Centro', 'São Paulo', 'SP'),
('21002-500', 'Avenida Atlântica', '890', 'Loja 3', 'Copacabana', 'Rio de Janeiro', 'RJ'),
('01995-654', 'Rua das Palmeiras', '210', null, 'Jardim Paulista', 'Campinas', 'SP'),
('21400-000', 'Avenida Beira Mar', '90', 'Loja 1', 'Viradouro', 'Rio de Janeiro', 'RJ'),
('01995-654', 'Rua das Palmares', '210', 'Sobreloja', 'Jardim Canadá', 'Campina Grande', 'SP');

select * from endereco;

insert into clientes (nome, cpf, telefone, email, enderecoID) values
('João Silva', '12345678901', '11987654321', 'joao.silva@email.com', 1),
('Maria Souza', '23456789012', '11965432109', 'maria.souza@email.com', 2),
('Carlos Pereira', '34567890123', '21988887777', 'carlos.pereira@email.com', 3),
('Ana Oliveira', '45678901234', '31977776666', 'ana.oliveira@email.com', 4),
('Fernanda Lima', '56789012345', '41999998888', 'fernanda.lima@email.com', 5),
('Carla Mendes', '22233344455', '(11) 98876-5432', 'carla.mendes@email.com', 6),
('Lucas Pereira', '33344455566', '(21) 97654-3210', 'lucas.pereira@email.com', 7),
('Fernanda Oliveira', '44455566677', '(41) 98765-9876', 'fernanda.oliveira@email.com', 8),
('Roberto Silva', '55566677788', '(31) 98989-1234', 'roberto.silva@email.com', 9),
('Ana Costa', '66677788899', '(19) 98444-2233', 'ana.costa@email.com', 10);

select * from clientes;

insert into categorias (categoria, valorDiaria) values
('Econômico', 120.00),
('SUV', 220.00),
('Luxo', 400.00),
('Utilitário', 180.00),
('Sedan', 150.00),
('Hatch', 120.00),
('Pick-up', 220.00),
('Elétrico', 300.00),
('Minivan', 180.00),
('Conversível', 350.00);

select * from categorias;

insert into veiculos (Marca, Modelo, Placa, Ano, CategoriaID, status) values
('Chevrolet', 'Onix', 'ABC1D23', 2021, 6, 'Disponivel'),
('Toyota', 'Hilux', 'XYZ9E88', 2020, 7, 'Disponivel'),        -- Pick-up
('Tesla', 'Tesla Model 3', 'TESL123', 2022, 8, 'Disponivel'),-- Elétrico
('Toyota', 'Corolla', 'KLM5F67', 2022, 5, 'Disponivel'),     -- Sedan
('Jeep', 'Compass', 'JHK8P90', 2021, 2, 'Disponivel'),      -- SUV
('Honda', 'Civic', 'GHJ3L45', 2023, 5, 'Disponivel'),       -- Sedan
('Fiat', 'Strada', 'AAA9Z99', 2021, 7, 'Disponivel'),      -- Pick-up
('ABC1234', 'Fiat', 'Argo', 2020, 1, 'Disponivel'),
('DEF5678', 'Chevrolet', 'Onix', 2021, 1, 'Disponivel'),
('GHI9012', 'Toyota', 'Hilux', 2022, 4, 'Disponivel'),
('JKL3456', 'Honda', 'HR-V', 2021, 2, 'Alugado'),
('MNO7890', 'BMW', '320i', 2022, 3, 'Disponivel'),
('PQR2345', 'Jeep', 'Compass', 2021, 2, 'Disponivel');

select * from veiculos;

insert into funcionarios (nome, cargo, telefone, email) values
('Paulo Mendes', 'Atendente', '11955554444', 'paulo.mendes@locadora.com'),
('Juliana Rocha', 'Gerente', '21944443333', 'juliana.rocha@locadora.com'),
('Roberto Alves', 'Mecânico', '31933332222', 'roberto.alves@locadora.com'),
('Patrícia Gomes', 'Atendente', '(11) 97777-1122', 'patricia@locadora.com.br'),
('João Batista', 'Gerente', '(21) 98888-3344', 'joao@locadora.com.br'),
('Sofia Martins', 'Mecânico', '(31) 96666-5566', 'sofia@locadora.com.br'),
('Bruno Ferreira', 'Atendente', '(41) 95555-7788', '@locadora.com.br');

select * from funcionarios;

insert into locacoes (clienteID, veiculoID, funcionarioID, dataLocacao, dataDevolucaoPrevista, dataDevolucaoReal, valorTotal) values
(1, 1, 1, '2025-08-01', '2025-08-05', '2025-08-05', 480.00), -- João alugou Fiat Argo
(2, 4, 1, '2025-08-02', '2025-08-06', NULL, 880.00),         -- Maria alugou HR-V (ainda não devolveu)
(3, 3, 2, '2025-08-03', '2025-08-07', '2025-08-08', 900.00), -- Carlos alugou Hilux e devolveu com atraso
(4, 5, 2, '2025-08-04', '2025-08-06', '2025-08-06', 800.00), -- Ana alugou BMW 320i
(6, 7, 2, '2025-01-15','2025-01-20', '2025-01-20', 500.00),   -- Lucas alugou Onix
(7, 8, 5, '2025-02-01', '2025-02-10', '2025-02-10', 1500.00),  -- Fernanda alugou Hilux
(8, 9, 6, '2025-02-05', '2025-02-07', '2025-02-07', 800.00),   -- Roberto alugou Tesla
(9, 10, 1, '2025-03-01', '2025-03-05', '2025-03-05', 700.00),  -- Ana alugou Corolla
(6, 11, 4, '2025-03-10', '2025-03-15', '2025-03-15', 1200.00); -- Lucas alugou Compass

select * from locacoes;

insert into pagamentos (locacaoID, metodo, valorPago, dataPagamento) values
(1, 'Cartao', 480.00, '2025-08-05'),
(2, 'PIX', 880.00, '2025-08-02'),
(3, 'Dinheiro', 900.00, '2025-08-08'),
(4, 'Cartao', 800.00, '2025-08-06'),
(5, 'Cartao', 500.00, '2025-01-15'),
(6, 'Boleto', 1500.00, '2025-02-01'),
(7, 'Pix', 800.00, '2025-02-05'),
(8, 'Cartão', 700.00, '2025-03-01'),
(9, 'Pix', 1200.00, '2025-03-10');

select * from pagamentos;