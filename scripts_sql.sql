create table categoria(
idcategoria serial primary key,
nombre varchar(100),
descripcion text, 
datecreated timestamp,
estado int
);


create table producto(
idproducto serial primary key,
categoriaid bigint,
codigo varchar(30),
nombre varchar(100),
descripcion text,
precio decimal(11,2),
stock int,
imagen bytea,
datecreated timestamp,
estado int
);


create table detalle_pedido(
id serial primary key,
pedidoid bigint,
productoid bigint,
precio decimal(11,2),
cantidad int
);

create table pedido(
idpedido serial primary key,
personaid bigint,
fecha timestamp,
monto decimal(11,2),
tipopagoid bigint,
estado int
);

create table detalle_temp(
id serial primary key,
productoid bigint,
precio decimal(11,2),
cantidad int,
token varchar(100)
);

create table persona(
idpersona serial primary key,
identificacion varchar(30),
nombres varchar(80),
apellidos varchar(100),
telefono bigint,
email_user varchar(100),
password varchar(25),
nit varchar(20),
nombrefiscal varchar(80),
direccionfiscal varchar(100),
toke varchar(80),
rolid bigint,
datecreated timestamp,
estado int
);

create table rol(
idrol serial primary key,
nombrerol varchar(60),
descripcion text,
estado int
);

create table permisos(
idpermiso serial primary key,
rolid bigint,
moduloid bigint,
r int,
w int,
u int,
d int
);

create table modulo(
idmodulo serial primary key,
titulo varchar(50),
descripcion text,
estado int
);


ALTER TABLE producto
ADD CONSTRAINT fk_producto_id
FOREIGN KEY (categoriaid)
REFERENCES categoria (idcategoria);


ALTER TABLE detalle_pedido 
ADD CONSTRAINT fk_producto_id
FOREIGN KEY (productoid)
REFERENCES producto (idproducto);

ALTER TABLE detalle_temp 
ADD CONSTRAINT fk_producto_id
FOREIGN KEY (productoid)
REFERENCES producto (idproducto);

ALTER TABLE detalle_pedido 
ADD CONSTRAINT fk_pedido_id
FOREIGN KEY (pedidoid)
REFERENCES pedido (idpedido);

ALTER TABLE pedido
ADD CONSTRAINT fk_persona_id
FOREIGN KEY (personaid)
REFERENCES persona (idpersona);

ALTER TABLE persona 
ADD CONSTRAINT fk_rol_id
FOREIGN KEY (rolid)
REFERENCES rol (idrol);


ALTER TABLE permisos 
ADD CONSTRAINT fk_rol_id
FOREIGN KEY (rolid)
REFERENCES rol (idrol);

ALTER TABLE permisos 
ADD CONSTRAINT fk_modulo_id
FOREIGN KEY (moduloid)
REFERENCES modulo (idmodulo);
