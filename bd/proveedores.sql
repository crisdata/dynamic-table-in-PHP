
/* Scrip para la creacion de una base de datos*/
create database prueba;
use pruebas;

create table t_persona (
		id int auto_increment,
		nombre varchar(50),
		apellido varchar(50),
		email varchar(50),
		telefono varchar(50),
		primary key(id)
);