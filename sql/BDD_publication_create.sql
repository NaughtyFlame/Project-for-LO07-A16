CREATE TABLE pubilication
(
	no_p int NOT NULL PRIMARY KEY,
	titre VARCHAR(255) NOT NULL,
	theme VARCHAR(255),
	annee int,
	url VARCHAR(255),
	tires VARCHAR(255)	
)

CREATE TABLE auteur
(
	no_ss int NOT NULL PRIMARY KEY,
	nom VARCHAR(64) NOT NULL,
	prenom VARCHAR(64)
)

CREATE TABLE ecrire
(
	id_p int NOT NULL,
	id_auteur int NOT NULL,
	CONSTRAINT pk_ecrire PRIMARY KEY(id_p,id_auteur)
)

CREATE TABLE affiliation
(
	no_aff int NOT NULL PRIMARY KEY,
	nom VARCHAR(255) NOT NULL
)

CREATE TABLE afficher
(
	id_p int NOT NULL,
	id_aff int NOT NULL,
	CONSTRAINT pk_afficher PRIMARY KEY(id_p,id_aff)
)