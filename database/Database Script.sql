create database product;

use product;
create table products(
	id int primary key auto_increment not null,
    name varchar(100),
    details varchar(200)
);

