
-- Client :  localhost
-- User :    root
-- Passwd :  root
-- Database : shoosing

CREATE DATABASE IF NOT EXISTS `shoosing` DEFAULT CHARACTER SET utf8 ;

USE `shoosing` ;

CREATE TABLE IF NOT EXISTS products
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    ref VARCHAR(10),
    taille INT (2),
    couleur VARCHAR (20),
    price INT,
    descript TEXT,
    src_img VARCHAR (255),
    categorie VARCHAR (255),
    stock INT
);

CREATE TABLE IF NOT EXISTS clients
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    mail VARCHAR(100),
    nom VARCHAR(100),
    prenom VARCHAR(100),
    adresse VARCHAR(100),
    passwd VARCHAR(255),
    date_created DATETIME,
    token_connect VARCHAR(255),
    admin INT
);

CREATE TABLE IF NOT EXISTS categories
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS orders
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_client INT,
    date_created DATETIME,
    items TEXT
);
