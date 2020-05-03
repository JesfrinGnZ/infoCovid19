/**
Scrippt para la creacion de base de datos
de Covid
**/

DROP DATABASE covid19;

CREATE DATABASE covid19;

USE covid19;

CREATE TABLE USUARIO(
  correoUsuario VARCHAR(25) NOT NULL,
  tipoDeUsuario ENUM('administrador','normal') NOT NULL,
  contrasena VARCHAR(15) NOT NULL,
  idUsuario VARCHAR(15) NOT NULL UNIQUE,
  verificado CHAR NOT NULL,
  CONSTRAINT PK_USUARIO PRIMARY KEY(correoUsuario)
);

CREATE TABLE ANUNCIO(
  idAnuncio INT NOT NULL AUTO_INCREMENT,
  correoUsuario VARCHAR(25) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  linkParaDeshabilitar VARCHAR(100) NOT NULL,
  verificado CHAR NOT NULL,
  CONSTRAINT PK_ANUNCIO PRIMARY KEY(idAnuncio),
  CONSTRAINT FK_ANUNCIO FOREIGN KEY(correoUsuario) REFERENCES USUARIO(correoUsuario)
);

CREATE TABLE HITO(
  idHito INT NOT NULL AUTO_INCREMENT,
  correoUsuario VARCHAR(25) NOT NULL,
  fuente VARCHAR(25) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  comentarioCreador VARCHAR(50) NOT NULL,
  cantidadDeNoMeGusta INT NOT NULL,
  cantidadDeMeGusta INT NOT NULL,
  fecha TIMESTAMP NOT NULL,
  verificado CHAR NOT NULL,
  CONSTRAINT PK_HITO PRIMARY KEY(idHito),
  CONSTRAINT FK_HITO FOREIGN KEY(correoUsuario) REFERENCES USUARIO(correoUsuario)
);

CREATE TABLE COMENTARIO_HITO(
  idComentarioHito INT NOT NULL AUTO_INCREMENT,
  correoUsuario VARCHAR(25) NOT NULL,
  descripcion VARCHAR(50) NOT NULL,
  fecha TIMESTAMP NOT NULL,
  cantidadDeMeGusta INT NOT NULL,
  cantidadDeNoMeGusta INT NOT NULL,
  CONSTRAINT PK_COMENTARIOHITO PRIMARY KEY(idComentarioHito),
  CONSTRAINT FK_COMENTARIOHITO FOREIGN KEY(correoUsuario) REFERENCES USUARIO(correoUsuario)
);
