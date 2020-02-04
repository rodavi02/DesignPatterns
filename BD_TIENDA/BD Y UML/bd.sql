
CREATE SCHEMA tienda;
USE tienda;
CREATE TABLE IF NOT EXISTS cliente (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(20) NOT NULL,
apellido VARCHAR(40) NOT NULL,
password VARCHAR(80) NOT NULL,
dni VARCHAR(9) NOT NULL,
correo VARCHAR(50) NOT NULL,
ciudad VARCHAR(20) NOT NULL,
cp INT(5) NOT NULL,
provincia VARCHAR(40) NOT NULL
);

CREATE TABLE camiseta (
nombre int NOT NULL PRIMARY KEY auto_increment,
talla VARCHAR(3) NOT NULL,
color VARCHAR(15) NOT NULL,
manga VARCHAR(5) NOT NULL,
cantidad int not null
);

CREATE TABLE pantalon (
nombre int NOT NULL PRIMARY KEY auto_increment,
talla VARCHAR(3) NOT NULL,
color VARCHAR(15) NOT NULL,
estilo VARCHAR(15) NOT NULL,
cantidad int not null
);


CREATE USER 'tienda'@'localhost' IDENTIFIED BY 'tienda1';
GRANT ALL PRIVILEGES ON tienda TO 'tienda'@'localhost';
