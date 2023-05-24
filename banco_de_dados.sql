create database estoque;
use estoque;

create table chave(
id_chave int auto_increment primary key,
sala varchar (45),
cadastradas varchar (255),
disponivel_chave varchar (255),
desaparecida varchar (255)
);

create table item(
id_item int auto_increment primary key,
nome_item varchar (255),
quantidade varchar (45),
unidade varchar (45),
disponivel_item varchar (45),
retornavel varchar (45),
baixa varchar (45)
);

create table usuario(
id_user int auto_increment primary key,
name_user varchar (255) not null,
email varchar (255) not null,
senha varchar (255) not null
);

drop table chave;
drop table item;
drop table usuario;