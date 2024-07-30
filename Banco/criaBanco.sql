create database IFSP;
use IFSP;
create table pessoa
(
	id int auto_increment,
	nome varchar(50),
    email varchar(50),
    endereco varchar(50),
    bairro varchar(50),
    id_cidade int,
    cep int(8),
	primary key (id)
);

ALTER TABLE animal ADD COLUMN nome_animal VARCHAR(50) NOT NULL;
create table animal
(
	id int auto_increment,
	nome_animal varchar(50),
	especie varchar(50),
	raca varchar(50),
    data_nascimento int,
    idade int(3),
    castrado bool,
    id_pessoa int,
	primary key (id)
	/*constraint fk_ClienteCidade foreign key(id_cidade) references cidade(id)*/
);

create table cidade
(
	id int auto_increment,
	nome_cidade varchar(50),
    estado varchar(50),
    primary key (id)
);