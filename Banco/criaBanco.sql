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

create table animal
(
	id_animal int primary key auto_increment,
	nome_animal varchar(50),
	especie varchar(50),
	raca varchar(50),
    data_nascimento date,
    idade int(3),
    castrado bool,
    id_pessoa int,
	foreign key (id_pessoa) references pessoa(id_pessoa)
	/*constraint fk_ClienteCidade foreign key(id_cidade) references cidade(id)*/
);

