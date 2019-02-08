----------LOGIN------------
User : root
Password : gg


----------DATABASE---------
DROP DATABASE IF EXISTS guardian;

CREATE DATABASE guardian CHARACTER set utf8mb4 COLLATE utf8mb4_unicode_ci;

USE guardian;
CREATE TABLE evenement(
        id_event INT AUTO_INCREMENT,
        nom VARCHAR(50),
        date DATE,
        prix DOUBLE,
        CONSTRAINT pk_event PRIMARY KEY(id_event)
        );

CREATE TABLE facture(
        id_facture INT AUTO_INCREMENT,
        nom VARCHAR(50) NOT NULL,
		prenom VARCHAR(50) NOT NULL,
		email VARCHAR(50) NOT NULL,
		id_event INT,
        CONSTRAINT pk_nom PRIMARY KEY(id_facture)
        );

---------Valeurs-----------
INSERT INTO evenement(nom, date, prix)
VALUES('Call of Duty Championship', '2018-02-03', '60');
INSERT INTO evenement(nom, date, prix)
VALUES('CSGO Championship', '2018-03-10', '70');
INSERT INTO evenement(nom, date, prix)
VALUES('Overwatch Championship', '2018-03-20', '50');
INSERT INTO evenement(nom, date, prix)
VALUES('Halo Championship', '2018-04-15', '55');