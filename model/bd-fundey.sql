CREATE DATABASE bdfundey;
use bdfundey;

CREATE TABLE usuario (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cedula VARCHAR(8) NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    privilegio VARCHAR(15) NOT NULL,
    estatus VARCHAR (10) NOT NULL
);

INSERT INTO `usuario` (`id`, `cedula`, `username`, `password`, `correo`, `privilegio`, `estatus`) VALUES ('1', '12345678', 'Admin', '20050025admin', 'eladmin@gmail.com', 'Administrador', 'Activo');
INSERT INTO `usuario` (`id`, `cedula`, `username`, `password`, `correo`, `privilegio`, `estatus`) VALUES ('2', '87654321', 'usuario', '12345', 'elusuario@gmail.com', 'Coordinador', 'Activo');

CREATE TABLE persona (
    cedula INTEGER (8) NOT NULL PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(25) NOT NULL,
    sexo VARCHAR(9) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    direccion VARCHAR(50) NOT NULL
);
