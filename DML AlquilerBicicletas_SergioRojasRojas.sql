
   -- LENGUAJE DE MANIPULACIÓN DE DATOS (DML):
   -- SELECT, UPDATE, DELETE, INSERT 
USE AlquilerBicicletas;

		-- INSERCIÓN DE DATOS EN CADA TABLA--
 
/*TABLA MARCA*/
INSERT INTO Marca VALUES ('001', 'Specialized', 'Store Finder','2017-05-03','Varios Modelos');
INSERT INTO Marca VALUES ('002', 'Scott', 'Scott Bikes','2010-08-13','Cambios Extras');
INSERT INTO Marca VALUES ('003', 'Trek', 'Trek Bikes','2016-04-23','Varios Modelos');
INSERT INTO Marca VALUES ('004', 'Giant', 'Giant Bycicles','2008-06-15','Ruedas ergonomicas');
INSERT INTO Marca VALUES ('005', 'Canyon', 'Canyon ES','2012-11-10','Varios Modelos');
INSERT INTO Marca VALUES ('006', 'Cannondale', 'Cannondale Bycicles','2009-01-21','Colores Varios');
INSERT INTO Marca VALUES ('007', 'Orbea', 'Orbea Bikes','2014-12-22','Varios Modelos');
INSERT INTO Marca VALUES ('008', 'BMC', 'BMC Bikes','2006-02-17','Modelos con Fibra Multiple');
INSERT INTO Marca VALUES ('009', 'Pinarello', 'Pinarello MY WAY','2019-01-10','Varios Modelos');
INSERT INTO Marca VALUES ('010', 'Bianchi', 'Bianchi Bycicles','2007-08-18','Amortiguaciones Potentes');

/*Seleccionamos todos los datos de la tabla marca*/
SELECT * FROM MARCA;


/*TABLA Bicicleta*/
INSERT INTO Bicicleta VALUES ('300', '001', 'Color Roja', '2020-05-03', 1, '150', '4', 'Nuevo');
INSERT INTO Bicicleta VALUES ('301', '002', 'Color Amarillo', '2019-12-12', 1, '200', '5', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('302', '002', 'Color Verde', '2005-08-09', 1, '180', '6', 'Nuevo');
INSERT INTO Bicicleta VALUES ('303', '001', 'Color Roja', '2001-11-09', 1, '220', '2', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('304', '003', 'Color Azul', '2018-09-23', 1, '250', '6', 'Nuevo');
INSERT INTO Bicicleta VALUES ('305', '004', 'Color Roja', '2019-05-30', 1, '200', '9', 'Nuevo');
INSERT INTO Bicicleta VALUES ('306', '005', 'Color Roja', '2019-05-30', 1, '300', '10', 'Pequeñas Rozaduras');
INSERT INTO Bicicleta VALUES ('307', '004', 'Color Verde', '2019-05-30', 1, '220', '3', 'Nuevo');
INSERT INTO Bicicleta VALUES ('308', '001', 'Color Roja', '2018-12-01', 1, '160', '4', 'Nuevo');
INSERT INTO Bicicleta VALUES ('309', '005', 'Color Roja', '2018-12-01', 1, '150', '3', 'Nuevo');
INSERT INTO Bicicleta VALUES ('310', '010', 'Color Negra', '2016-02-26', 0, '120', '2', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('400', '009', 'Color Roja', '2019-02-26', 1, '150', '5', 'Nuevo');
INSERT INTO Bicicleta VALUES ('401', '008', 'Color Blanca', '2017-01-03', 1, '200', '8', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('402', '007', 'Color Roja', '2003-01-02', 1, '180', '4', 'Pequeñas Rozaduras');
INSERT INTO Bicicleta VALUES ('403', '006', 'Color Rosa', '2005-04-27', 0, '190', '5', 'Nuevo');
INSERT INTO Bicicleta VALUES ('404', '005', 'Color Roja', '2018-01-06', 1, '200', '6', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('405', '008', 'Color Roja', '2008-05-12', 1, '180', '8', 'Nuevo');
INSERT INTO Bicicleta VALUES ('406', '010', 'Color Violeta', '2017-01-01', 1, '150', '7', 'Seminuevo');
INSERT INTO Bicicleta VALUES ('407', '009', 'Color Roja', '2000-02-03', 1, '120', '5', 'Pequeñas Rozaduras');
INSERT INTO Bicicleta VALUES ('408', '007', 'Color Marron', '2000-02-05', 1, '150', '6', 'Seminuevo');
 
 /*Seleccionamos todos los datos de la tabla Bicicleta*/
SELECT * FROM Bicicleta;


/*TABLA CLIENTEADMIN: VAMOS A INSERTAR TODAS LAS TUPLAS  USANDO UN ÚNICO "INSERT INTO" */


INSERT INTO ClienteAdmin VALUES 
 ('00090', '54119845L', 'Ramón', 'González González', 'Calle Herradores 21, La Laguna', '1975-12-09', '2015-01-09','CLIAD101', 'RamonGlez', 'bicicleta00090', 'ramon nzalez@gmail.com', '654738956', '43','V','38293','España','Español', 1)
,('00091', '45948533R', 'Beatriz', 'Hernández González', 'Calle El Almendro 2, La Laguna', '1983-01-01', '2015-06-05','CLIAD102', 'BeaHdez', 'bicicleta00091', 'beatrizhernandez@gmail.com', '6547389545', '38','H','38293','España','Español', 1)
,('00092', '45345676P', 'Sonia', 'Ramos Rojas', 'Calle de Santia  31, Santa Cruz de Tfe', '1993-08-28', '2016-04-23', 'CLIAD103','SoniaRamos', 'bicicleta00092', 'soniaramos@gmail.com', '654738941', '27','H','38200','España','Español', 1)
,('00093', '45789456J', 'Rosa', 'Tabares Rojas', 'Calle San Antonio 14, Santa Cruz', '1991-05-15', '2016-08-02', 'USU01','RosaTabares', 'bicicleta00093', 'rosatabares@gmail.com', '654738977', '29','H','38218','España','Español', 0)
,('00094', '45673045K', 'César', 'Fernández González', 'Calle Minerva 12, Arona', '1988-10-03', '2017-06-04','USU02' ,'CesarFdez', 'bicicleta00094', 'cesarfdez@gmail.com', '654738987', '31','V','38218','España','Español', 0)
,('00095', '54083450F', 'Yaiza', 'Rodriguez Rojas', 'Calle Chasna 41, Arona', '1997-09-01', '2017-03-26','CLIAD104', 'YaizaRguez', 'bicicleta00095', 'yaizarguez@gmail.com', '654738948', '23','H','38200','España','Español', 1)
,('00096', '45987623R', 'Nicolás', 'Márquez González', 'Calle Azorín 27, Santa Cruz de Tfe', '1976-10-01', '2017-06-01', 'CLIAD105','NicoMarquez', 'bicicleta00096', 'nicomarquez@gmail.com', '654738942', '44','V','38293','España','Español', 1)
,('00097', '54119384D', 'Pablo', 'Espejo González', 'Calle Andrómeda 21, La Laguna', '1988-11-06', '2018-02-08', 'CLIAD106','PabloEspejo', 'bicicleta00097', 'pabloespejo@gmail.com', '654738912','32','V','38118','España','Español', 1)
,('00098', '54239610A', 'Rebeca', 'Armas Rojas', 'Calle Martinez Perez 8, Puerto de La Cruz', '1988-10-06', '2016-02-08', 'USU03','RebeArmas', 'bicicleta00098', 'rebecaarmas@gmail.com', '654738913', '32','H','38094','España','Español', 0)
,('00099', '45437642S', 'Martín', 'Fuentes Rojas', 'Calle UruguaY 3, El Médano', '1978-08-03', '2018-06-17', 'CLIAD107','MartinFuentes', 'bicicleta00099', 'martinfuentes@gmail.com', '654738910', '42','V','38146','España', 'Español',1)
,('00100', '54982345C', 'Marta', 'Pérez Rojas', 'Calle El Volcán 12, Garachico', '1994-03-11', '2017-01-30','USU04', 'MartaPerez', 'bicicleta00100', 'martaperez@gmail.com', '6547389', '26', 'H','38120','España','Español',0)
,('00101', '45478564V', 'Carmen', 'Suárez González', 'Calle El Volcano 22, San Isidro', '1978-11-04', '2015-05-14', 'USU05','CarmenSuarez', 'bicicleta00101', 'carmensuarez@gmail.com', '654738922','42l', 'H','38293','España','Español',0)
,('00102', '45981246M', 'Ayoze', 'Díaz González', 'Calle Heraclio Sánchez 1, La Laguna', '1-04-01', '2013-04-22', 'USU06','AyozeDiaz', 'bicicleta00102', 'ayozediaz@gmail.com', '654738933','l','32','V','38293','España', 0)
,('00103', '54783459T', 'Alexandra', 'Padrón González', 'Calle Hermanos Fernández Perdigón, Puerto de La Cruz', '1989-11-06','2016-01-04','CLIAD108', 'AlexPadron', 'bicicleta00103', 'alexandrapadron@gmail.com', '654738930', '31', 'H','38118','España','Español',1)
,('00104', 'X9873456V', 'Paula Andreia', 'Ávila González', 'Av. Elias Garcia 2, Lisboa', '1983-09-07', '2016-02-10','CLIAD109' ,'PaulaAndreia', 'bicicleta00104', 'paulanadreia@gmail.com', '654738931','37','H','34000','Portugal','Portugues', 1)
,('00105', 'X1987652P', 'John', 'Stahl Stahl ', 'Ripon Road 14, Reino Unido', '1975-11-01', '2018-07-10', 'CLIAD110', 'JohnStahl','bicicleta00105', 'johnstahl@gmail.com', '654738430', '45', 'V','36000','Reino Unido','Ingles',1);

/*Seleccionamos todos los datos de la tabla ClienteAdmin*/
SELECT * FROM ClienteAdmin;
 


/*TABLA RESERVA*/
INSERT INTO Reserva VALUES ('990', '00090', '001', '2021-03-01', '2021-03-03', 'Silla de niños', 'Ninguna');
INSERT INTO Reserva VALUES ('991', '00091', '002', '2021-03-03', '2021-03-04', 'Silla de niños', 'Ninguna');
INSERT INTO Reserva VALUES ('993', '00092', '003', '2021-03-04', '2021-03-06', 'Silla de niños', 'BlueTooth');
INSERT INTO Reserva VALUES ('994', '00093', '001', '2021-03-01', '2021-03-03', 'Color Rosa', 'Ninguna');
INSERT INTO Reserva VALUES ('995', '00094', '004', '2021-03-02', '2021-03-04', 'Silla de niños', 'BlueTooth');
INSERT INTO Reserva VALUES ('996', '00095', '005', '2021-03-04', '22021-03-07', 'Ninguna', 'Ninguna');
INSERT INTO Reserva VALUES ('997', '00096', '003', '2021-03-05', '2021-03-08', 'Color Negra', 'Elevador');
INSERT INTO Reserva VALUES ('998', '00097', '006', '2021-03-06', '2021-03-06', 'Silla de niños', 'Ninguna');
INSERT INTO Reserva VALUES ('999', '00098', '007', '2021-03-03', '2021-03-04', 'Silla de niños', 'BlueTooth');
INSERT INTO Reserva VALUES ('1000', '00099', '005', '2021-03-04', '2021-03-04', 'Ninguna', 'Ninguna');
INSERT INTO Reserva VALUES ('1001', '00100', '008', '2021-03-05', '2021-03-08', 'Silla de niños', 'BlueTooth');
INSERT INTO Reserva VALUES ('1002', '00101', '009', '2021-03-08', '2021-03-09', 'Silla de niños', 'Elevador');
INSERT INTO Reserva VALUES ('1003', '00102', '001', '2021-03-04', '22021-03-05', 'Silla de niños', 'Ninguna');
INSERT INTO Reserva VALUES ('1004', '00103', '010', '2021-03-04', '2021-03-06', 'Ninguna', 'BlueTooth');
INSERT INTO Reserva VALUES ('1005', '00104', '008', '2021-03-09', '021-03-09', 'Ninguna', 'BlueTooth');

/*Seleccionamos todos los datos de la tabla Reserva*/
 
SELECT * FROM RESERVA;

/*TABLA CONTRATO*/
INSERT INTO Contrato VALUES ('8080', '00090', '300', '990','Todo Correcto', '2021-03-01', '2021-03-03', '200', 'Ninguna');
INSERT INTO Contrato VALUES ('8081', '00091', '301', '991', 'Falta D.N.I','2021-03-03', '2021-03-04', '400', 'Ninguna');
INSERT INTO Contrato VALUES ('8082', '00092', '302', '993', 'Todo Correcto','2021-03-04', '2021-03-06', '500', 'Ninguna');
INSERT INTO Contrato VALUES ('8083', '00093', '303', '994','Todo Correcto', '2021-03-01', '2021-03-03', '300', 'Todo Ok');
INSERT INTO Contrato VALUES ('8084', '00094', '304', '995','Todo Correcto', '2021-03-02', '2021-03-04', '400', 'Todo Ok');
INSERT INTO Contrato VALUES ('8085', '00095', '305', '996', 'Todo Correcto','2021-03-04', '22021-03-07', '300', 'Ninguna');
INSERT INTO Contrato VALUES ('8086', '00096', '306', '997', 'Todo Correcto','2021-03-05', '2021-03-08', '200', 'Ninguna');
INSERT INTO Contrato VALUES ('8087', '00097', '307', '998','Falta Justificante Pago', '2021-03-06', '2021-03-06', '100', 'Todo Ok');
INSERT INTO Contrato VALUES ('8088', '00098', '400', '999', 'Falta Fotocopia SS','2021-03-03', '2021-03-04', '120', 'Ninguna');
INSERT INTO Contrato VALUES ('8089', '00099', '401', '1000','Todo Correcto', '2021-03-04', '2021-03-04', '200', 'Ninguna');
INSERT INTO Contrato VALUES ('8090', '00100', '402', '1001','Falta Foto Personal', '2021-03-05', '2021-03-08', '300', 'Todo Ok');
INSERT INTO Contrato VALUES ('8091', '00101', '403', '1002', 'Todo Correcto','2021-03-08', '2021-03-09', '200', 'Ninguna');
INSERT INTO Contrato VALUES ('8092', '00102', '404', '1003', 'Todo Correcto','2021-03-04', '22021-03-05', '150','Todo Ok');
INSERT INTO Contrato VALUES ('8093', '00103', '405', '1004', 'Todo Correcto','2021-03-04', '2021-03-06', '200', 'Ninguna');
INSERT INTO Contrato VALUES ('8094', '00104', '406', '1005', 'Todo Correcto','2021-03-09', '2021-03-09', '300', 'Todo Ok');

 /*Seleccionamos todos los datos de la tabla Contrato*/
SELECT * FROM CONTRATO;

