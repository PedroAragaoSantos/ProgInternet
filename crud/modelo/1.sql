create database crud;
use crud;
create table if not exists usuarios(
    id int auto_increment not null primary key,
    nome varchar(200) not null,
    email varchar(200),
    senha varchar(200) not null
);

create table if not exists produtos(
    id int auto_increment not null primary key,
    nome varchar(200) not null,
    valor decimal(7,2)
);