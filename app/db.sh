#!/bin/bash
mysql -uroot<<MYSQL_SCRIPT
CREATE DATABASE company;
CREATE TABLE company.users (
    id int,
    username varchar(255),
    password varchar(255),
    role varchar(255)
);
INSERT INTO company.users (id,username,password,role) VALUES (1,'admin','SuperSecret1!','administrator');
INSERT INTO company.users (id,username,password,role) VALUES (1,'daniel','Password123','user');
MYSQL_SCRIPT