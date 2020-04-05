/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  andres
 * Created: 27-feb-2020
 */
/*
int (cifras)entero
integer(cifras)entero (maximo 255)
varchar(caracteres)STRING /ALFANUMERICO
float(cifras, decimales) decimalo 
date ()
time
timestamp 

MEDIUMTEXT (16 millones caracteres)
LONGTEXT    (4 billones de caracteres)
TEXT (caracteres 65535 )

enteros mas grandes
mediwmint
bigint

*/
CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'hola que tal' null,
email       varchar(100) not null,
password    varchar(255), 
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

