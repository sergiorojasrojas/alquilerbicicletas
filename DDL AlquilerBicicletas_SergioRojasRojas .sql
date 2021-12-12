	
-- Crear nueva base de datos llamada AlquilerBicicletas		

CREATE DATABASE AlquilerBicicletas;

-- CREACIÓN DE 5 TABLAS PARA EL PROYECTO FINAL--

USE AlquilerBicicletas;

 /* TABLA Bicicleta*/
CREATE TABLE Bicicleta(
	ID_Bicicleta INT NOT NULL,
	ID_Marca INT NOT NULL ,
	Observaciones VARCHAR(100) NULL,
	FechaCompra datetime,
	Disponibilidad bit,
	Precio INT  NOT NULL,
	Cantidad_Almacen int NOT NULL,
	Estado VARCHAR(50) NOT NULL,
	FOREIGN KEY (ID_Marca) REFERENCES Marca(ID_Marca),
	PRIMARY KEY (ID_Bicicleta)
	)ENGINE = InnoDB DEFAULT CHARSET= utf8;
	
	ALTER TABLE Bicicleta ENGINE=InnoDB;
/*TABLA MARCA*/
CREATE TABLE Marca(
	ID_Marca INT,
	NombreM VARCHAR(50) NOT NULL,
	Proveedor INT,
	Fecha_Fabricacion datetime,
	Observaciones VARCHAR(100) NULL,
	PRIMARY KEY (ID_Marca)
	)ENGINE = InnoDB DEFAULT CHARSET= utf8;
 
 ALTER TABLE Marca ENGINE=InnoDB;
 
/* TABLA CLIENTE_ADMIN */
CREATE TABLE ClienteAdmin(
	ID_ClienteAdmin INT NOT NULL,
	NIF_NIE VARCHAR(10) NOT NULL,
	NombreCliente VARCHAR(50) NOT NULL,
	Apellidos VARCHAR(50) NULL,
	Direccion VARCHAR(100) NULL,
	FechaNacimiento datetime NULL,
	FechaCarnet datetime NULL,
	NumeroCarnet VARCHAR(15) NOT NULL,
	NombreUsuario VARCHAR(50) NULL,
	Clave VARCHAR(50) NOT NULL,
	Correo VARCHAR(100) NULL,
	Telefono Varchar(13) NOT NULL,
	Edad INT NOT NULL,
	Sexo VARCHAR(25) NOT NULL,
	CodigoPostal INT NOT NULL,
	Pais VARCHAR(20) NULL,
	Idioma VARCHAR(15) NOT NULL,
	Administrador bit NOT NULL,
	PRIMARY KEY (ID_ClienteAdmin))ENGINE = InnoDB DEFAULT CHARSET= utf8;
 
 ALTER TABLE ClienteAdmin ENGINE=InnoDB;
/* TABLA RESERVA */
 CREATE TABLE Reserva(
    ID_Reserva INT NOT NULL,
	ID_ClienteAdmin INT NOT NULL ,
	ID_Marca INT NOT NULL,
	FechaRecogidaR datetime NOT NULL,
	FechaDevolucionR datetime NULL,
	Peticiones VARCHAR(50) NULL,
	Observaciones VARCHAR(100) NULL,
	FOREIGN KEY (ID_ClienteAdmin) REFERENCES ClienteAdmin(ID_ClienteAdmin),
	FOREIGN KEY (ID_Marca) REFERENCES Marca(ID_Marca),
	PRIMARY KEY (ID_Reserva))ENGINE = InnoDB DEFAULT CHARSET= utf8;
 
 ALTER TABLE Reserva ENGINE=InnoDB;
/* TABLA CONTRATO */
CREATE TABLE Contrato(
	ID_Contrato INT NOT NULL,
	ID_ClienteAdmin INT NOT NULL,
	ID_Bicicleta INT NOT NULL,
	ID_Reserva INT NULL REFERENCES Reserva(ID_Reserva),
	DetallesContrato VARCHAR (100),
	FechaRecogidaC datetime NOT NULL,
	FechaDevolucionC datetime  NOT NULL,
	Precio INT NULL,
	Observaciones VARCHAR(100) NULL,
	FOREIGN KEY (ID_ClienteAdmin) REFERENCES ClienteAdmin(ID_ClienteAdmin),
	FOREIGN KEY (ID_Bicicleta) REFERENCES Bicicleta(ID_Bicicleta),
	PRIMARY KEY (ID_Contrato))ENGINE = InnoDB DEFAULT CHARSET= utf8;

 ALTER TABLE Contrato ENGINE=InnoDB;
