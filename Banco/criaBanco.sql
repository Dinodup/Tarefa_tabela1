-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS IFSP;

USE IFSP;

CREATE TABLE cidade
(
    id INT AUTO_INCREMENT,
    nome_cidade VARCHAR(50),
    estado VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE pessoa
(
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50),
    endereco VARCHAR(50),
    bairro VARCHAR(50),
    id_cidade INT,
    cep VARCHAR(10),
    FOREIGN KEY (id_cidade) REFERENCES cidade(id)
);

CREATE TABLE animal (
    id_animal INT PRIMARY KEY AUTO_INCREMENT,
    nome_animal VARCHAR(50),
    especie VARCHAR(50),
    raca VARCHAR(50),
    data_nascimento DATE,
    castrado BOOL,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa)
);
