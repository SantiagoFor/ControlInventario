create table usuario(
    id_usuario int primary key auto_increment,
    rol varchar(50) not null,
    correo varchar(50) not null,
    clave varchar(100) not null,
    cargo varchar(50) not null
);
create table proveedor(
    id_proveedor int primary key auto_increment,
    nombre varchar(100) not null,
    nit varchar(100) not null,
    correo varchar(100) not null
);
create table producto(
    id_producto int primary key auto_increment,
    nombre varchar(50) not null,
    descripcion varchar(100) not null,
    cantidad int not null,
    id_proveedor int,
    foreign key (id_proveedor) REFERENCES proveedor(id_proveedor)
);
create table movimiento (
    id_movimiento  int primary key auto_increment,
    cantidad int not null,
    tipo_movimiento varchar(50) not null,
    descripcion_movimiento varchar(100) not null,
    id_producto int,
    foreign key (id_producto) references producto(id_producto)
);