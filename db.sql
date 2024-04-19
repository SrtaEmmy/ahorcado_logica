create database ahorcado;
use ahorcado;

create table categorias(
    id int auto_increment primary key,
    categoria varchar(50) unique
)ENGINE=InnoDB;

create table cortas(
    id int auto_increment primary key,
    id_categoria int,
    palabra varchar(5) not null,
    CONSTRAINT FOREIGN KEY (id_categoria) REFERENCES categorias(id)
)ENGINE=InnoDB;

create table medianas(
    id int auto_increment primary key,
    id_categoria int,
    palabra varchar(8) not null,
    CONSTRAINT FOREIGN KEY (id_categoria) REFERENCES categorias(id)
)ENGINE=InnoDB;

create table largas(
    id int auto_increment primary key,
    id_categoria int,
    palabra varchar(100) not null,
    CONSTRAINT FOREIGN KEY (id_categoria) REFERENCES categorias(id)
)ENGINE=InnoDB;


-- insertando datos
INSERT INTO categorias(categoria) VALUES('cortas'), ('medianas'), ('largas');

INSERT INTO cortas (id_categoria,palabra) VALUES
(1, 'casa'),
(1, 'perro'),
(1, 'gato'),
(1, 'luna'),
(1, 'yoyos');

INSERT INTO medianas (id_categoria, palabra) VALUES
(2, 'biciclo'),
(2, 'mascota'),
(2, 'escuela'),
(2, 'manzana'),
(2, 'excavar');

INSERT INTO largas (id_categoria, palabra) VALUES
(3,'supercalifragilisticoespialidoso'),
(3,'anticonstitucionalmente'),
(3,'electroencefalografista'),
(3,'inconstitucionalidad'),
(3,'desoxirribonucleico');


