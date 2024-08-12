create database IFSP;
use IFSP;

create table cidade
(	
	id int auto_increment,
	nome_cidade varchar(50),
    estado varchar(50),
    primary key (id)
);

create table pessoa
(
	id_pessoa int primary key auto_increment,
	nome varchar(50),
    email varchar(50),
    endereco varchar(50),
    bairro varchar(50),
    id int,
    cep varchar(10),
	foreign key (id) references cidade(id)
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
  -- A constraint comentada foi deixada como está, pois não é relevante para o problema atual
);
