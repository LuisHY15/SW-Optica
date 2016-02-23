CREATE TABLE usuarios(
	idusuario mediumint(8) auto_increment,
	nombre     varchar(30) not null,
	privilegio varchar(18) not null,
	usuario    varchar(20) not null,
	correo     varchar(30) not null,
	password   varchar(20) not null,
	ip         varchar(20) not null,
	ingreso    datetime not null,
	PRIMARY KEY (idusuario)
);

CREATE TABLE clientes(
	idcliente mediumint(8) auto_increment,
	nombre      varchar(30) not null,
	fnacimiento datetime not null,
	correo      varchar(25) not null,
	sexo        varchar(10) not null,
	edad        varchar(3) not null,
	domicilio   varchar(20) not null,
	colonia     varchar(15) not null,
	cp          varchar(10) not null,
	telefono    varchar(15) not null,
	celular     varchar(15) not null,
	PRIMARY KEY (idcliente)
);

CREATE TABLE articulos(
	idarticulo mediumint(8) unsigned auto_increment,
	nombre        varchar(20) not null,
	tipo          varchar(15) not null,
	stock         mediumint(8) not null,
	precio        float not null,
	descripcion   varchar(100) not null,
	observaciones varchar(100) not null,
	idcategoria  mediumint(8) not null,
	PRIMARY KEY (idarticulo),
	FOREIGN kEY (idcategoria) REFERENCES categoria(idcategoria)
);

CREATE TABLE categoria(
	idcategoria mediumint(8) primary key auto_increment,
	nombre varchar(20)
);


CREATE TABLE pventa(
	idpventa mediumint(8) primary key auto_increment;
	fecha       date not null,
	factura     char(2) not null,
	servicio    varchar(35) not null,
	descripcion varchar(100) not null,
	punit       float not null,
	cantidad    mediumint(8) not null,
	precio      float not null,
	anticipo    float not null,
	mpago       varchar(15) not null
	idcliente   mediumint(8) not null,
	FOREIGN kEY (idcliente) REFERENCES clientes(idcliente)
);

CREATE TABLE pventaxarticulos(
 idarticulo mediumint(8) not null,
 idpventa mediumint(8) not null,
 FOREIGN kEY (idarticulo) REFERENCES articulos(idarticulo),
 FOREIGN kEY (idpventa) REFERENCES pventa(idpventa)
)
