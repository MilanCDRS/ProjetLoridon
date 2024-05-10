DROP DATABASE IF EXISTS BOUFFE;
CREATE DATABASE IF NOT EXISTS BOUFFE;
USE BOUFFE;

DROP TABLE IF EXISTS Region;
CREATE TABLE IF NOT EXISTS Region(
	code INT(3) auto_increment,
    libelle VARCHAR(50),
    PRIMARY KEY (code)
)ENGINE = InnoDB;

DROP TABLE IF EXISTS Departement;
CREATE TABLE IF NOT EXISTS Departement(
	numero VARCHAR(3),
    codeRegion INT(3),
    nom VARCHAR(50),
    PRIMARY KEY (codeRegion,numero),
    FOREIGN KEY (codeRegion) REFERENCES Region(code)
)ENGINE = InnoDB;

ALTER TABLE Departement
ADD INDEX idx_numero (numero);

DROP TABLE IF EXISTS Type;
CREATE TABLE IF NOT EXISTS Type(
	code INT(3) auto_increment,
    type VARCHAR(30) NOT NULL,
    PRIMARY KEY(code)
)Engine=InnoDB; 

DROP TABLE IF EXISTS Specialite;
CREATE TABLE IF NOT EXISTS Specialite(
	id INT(10) auto_increment,
    numeroDep VARCHAR(3),
    lib VARCHAR(50),
    codeType INT(3),
    ingredients VARCHAR(400),
    description VARCHAR(400),
    PRIMARY KEY (id,numeroDep),
    FOREIGN KEY (numeroDep) references Departement(numero),
    FOREIGN KEY (codeType) references Type(code)
)ENGINE = InnoDB;

DROP TABLE IF EXISTS User;
CREATE TABLE IF NOT EXISTS User(
	ident INT(10) auto_increment,
    mail VARCHAR(320) NOT NULL,
    mdp VARCHAR(30) NOT NULL,
    pseudo VARCHAR(50) NOT NULL,
    dateInscription TIMESTAMP,
    admin boolean default false, 
    PRIMARY KEY(ident,mail), 
    CONSTRAINT CK_length_MPD CHECK (length(mdp)>12)
) Engine=InnoDB;

INSERT INTO User (mail, mdp, pseudo, dateInscription, admin) VALUES ('test@test.fr', 'boMLg2kWGgLXo', 'test', null, 1);

DROP TABLE IF EXISTS Favori;
CREATE TABLE IF NOT EXISTS Favori(
	identUser INT(10) NOT NULL,
    idSpecialite INT(10) NOT NULL,
    PRIMARY KEY(identUser,idSpecialite),
    FOREIGN KEY(identUser) REFERENCES User(ident),
    FOREIGN KEY(idSpecialite) REFERENCES Specialite(id)
)Engine=InnoDB;

DROP TABLE IF EXISTS Note;
CREATE TABLE IF NOT EXISTS Note(
	identUser INT(10) NOT NULL,
    idSpecialite INT(10) NOT NULL,
    note INT(1)  NOT NULL,
    PRIMARY KEY(identUser,idSpecialite),
    FOREIGN KEY(identUser) REFERENCES User(ident),
    FOREIGN KEY(idSpecialite) REFERENCES Specialite(id)
)Engine=InnoDB;

DELIMITER $

DROP PROCEDURE if exists GetRegions$
CREATE PROCEDURE GetRegions()
BEGIN
	SELECT code, libelle FROM Region;
END $

DROP PROCEDURE if exists GetRegionByCode$
CREATE PROCEDURE GetRegionByCode(IN _code INT(3))
BEGIN
	SELECT code, libelle FROM region WHERE code = _code;
END $

DROP PROCEDURE if exists GetRegionByNom$
CREATE PROCEDURE GetRegionByNom(IN _libelle VARCHAR(50))
BEGIN
	SELECT code, libelle FROM region WHERE libelle = _libelle;
END $

DROP PROCEDURE if exists GetDepartements$
CREATE PROCEDURE GetDepartements()
BEGIN
	SELECT numero, codeRegion, nom FROM departement;
END $

DROP PROCEDURE if exists GetDepartementByNumero$
CREATE PROCEDURE GetDepartementByNumero(IN _numero VARCHAR(3))
BEGIN
	SELECT numero, codeRegion, nom FROM departement WHERE numero = _numero;
END $

DROP PROCEDURE if exists GetType$
CREATE PROCEDURE GetType()
BEGIN
	SELECT code, type FROM type;
END $

DROP PROCEDURE if exists GetTypeByCode$
CREATE PROCEDURE GetTypeByCode(IN _code INT(3))
BEGIN
	SELECT code, type FROM type WHERE code = _code;
END $

DROP PROCEDURE if exists GetSpecialites$
CREATE PROCEDURE GetSpecialites()
BEGIN
	SELECT id, numeroDep, lib, codeType, ingredients, description FROM Specialite limit 25;
END $

DROP PROCEDURE if exists GetSpecialiteById$
CREATE PROCEDURE GetSpecialiteById(IN _id INT(3))
BEGIN
	select id, numeroDep, lib, codeType, ingredients, description FROM Specialite inner join departement on numeroDep = numero WHERE id = _id ;
END $

DROP PROCEDURE if exists GetSpecialitesByRegion$
CREATE PROCEDURE GetSpecialitesByRegion(IN _code INT(3))
BEGIN
	select id, numeroDep, lib, codeType, ingredients, description FROM Specialite inner join departement on numeroDep = numero WHERE codeRegion = _code;
END $

INSERT INTO User (mail, mdp, pseudo) VALUES("test@bts.sio","boydnMqI9QuVI","testUser");
INSERT INTO User (mail, mdp, pseudo, admin) VALUES("test@test.fr","boMLg2kWGgLXo","test", true);
Insert Into User (mail, mdp, pseudo) Values("coco@coco.fr", "123456azerty+++", "coco");

INSERT INTO Region (libelle) VALUES
("Auvergne-Rhône-Alpes"),
("Bourgogne-Franche-Comté"),
("Bretagne"),
("Centre-Val de Loire"),
("Corse"),
("Grand Est"),
("Hauts-de-France"),
("Île-de-France"),
("Normandie"),
("Nouvelle-Aquitaine"),
("Occitanie"),
("Pays de la Loire"),
("Provence-Alpes-Côte d'Azur"),
("DOM TOM");

INSERT INTO Departement (numero, codeRegion, nom) VALUES
('01', 1,'Ain'),
('02', 7, 'Aisne'),
('03', 1,'Allier'),
('05', 13,'Hautes-Alpes'),
('04', 13,'Alpes-de-Haute-Provence'),
('06', 13,'Alpes-Maritimes'),
('07', 1,'Ardèche'),
('08', 6,'Ardennes'),
('09', 11,'Ariège'),
('10', 6, 'Aube'),
('11', 11,'Aude'),
('12', 11,'Aveyron'),
('13', 13,'Bouches-du-Rhône'),
('14', 9,'Calvados'),
('15', 1 ,'Cantal'),
('16', 10,'Charente'),
('17', 10,'Charente-Maritime'),
('18', 4,'Cher'),
('19', 10,'Corrèze'),
('2a', 5,'Corse-du-sud'),
('2b', 5,'Haute-corse'),
('21', 2,'Côte-d''or'),
('22', 3,'Côtes-d''armor'),
('23', 10,'Creuse'),
('24', 10,'Dordogne'),
('25', 2,'Doubs'),
('26', 1,'Drôme'),
('27', 9,'Eure'),
('28', 4,'Eure-et-Loir'),
('29', 3,'Finistère'),
('30', 11,'Gard'),
('31', 11,'Haute-Garonne'),
('32', 11,'Gers'),
('33', 10,'Gironde'),
('34', 11,'Hérault'),
('35', 3,'Ile-et-Vilaine'),
('36', 4,'Indre'),
('37', 4,'Indre-et-Loire'),
('38', 1,'Isère'),
('39', 2,'Jura'),
('40', 10,'Landes'),
('41', 4,'Loir-et-Cher'),
('42', 1,'Loire'),
('43', 1,'Haute-Loire'),
('44', 12,'Loire-Atlantique'),
('45', 4,'Loiret'),
('46', 11,'Lot'),
('47', 11,'Lot-et-Garonne'),
('48', 11,'Lozère'),
('49', 12,'Maine-et-Loire'),
('50', 9,'Manche'),
('51', 6,'Marne'),
('52', 6,'Haute-Marne'),
('53', 12,'Mayenne'),
('54', 6,'Meurthe-et-Moselle'),
('55', 6,'Meuse'),
('56', 3,'Morbihan'),
('57', 6,'Moselle'),
('58', 2,'Nièvre'),
('59', 7,'Nord'),
('60', 7,'Oise'),
('61', 9,'Orne'),
('62', 7,'Pas-de-Calais'),
('63', 1,'Puy-de-Dôme'),
('64', 10,'Pyrénées-Atlantiques'),
('65', 11,'Hautes-Pyrénées'),
('66', 11,'Pyrénées-Orientales'),
('67', 6,'Bas-Rhin'),
('68', 6,'Haut-Rhin'),
('69', 1,'Rhône'),
('70', 2,'Haute-Saône'),
('71', 2,'Saône-et-Loire'),
('72', 12,'Sarthe'),
('73', 1,'Savoie'),
('74', 1,'Haute-Savoie'),
('75', 8,'Paris'),
('76', 9,'Seine-Maritime'),
('77', 8,'Seine-et-Marne'),
('78', 8,'Yvelines'),
('79', 10,'Deux-Sèvres'),
('80', 7,'Somme'),
('81', 11,'Tarn'),
('82', 11,'Tarn-et-Garonne'),
('83', 13,'Var'),
('84', 13,'Vaucluse'),
('85', 12,'Vendée'),
('86', 10,'Vienne'),
('87', 10,'Haute-Vienne'),
('88', 6,'Vosges'),
('89', 2,'Yonne'),
('90', 2,'Territoire de Belfort'),
('91', 8,'Essonne'),
('92', 8,'Hauts-de-Seine'),
('93', 8,'Seine-Saint-Denis'),
('94', 8,'Val-de-Marne'),
('95', 8,'Val-d''oise'),
('976', 14, 'Mayotte'),
('971', 14,'Guadeloupe'),
('973', 14,'Guyane'),
('972', 14,'Martinique'),
('974', 14,'Réunion');

INSERT INTO Type (type) VALUES
('Entrée'),
('Plat'),
('Dessert'),
('Gâteaux'),
('Viennoiserie'),
('Vin'),
('Fromage'),
('Brevages & Autres'),
('Autre');
