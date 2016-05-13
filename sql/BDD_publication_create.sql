CREATE TABLE pubilication
(
	no_p int NOT NULL PRIMARY KEY,
	titre VARCHAR(255) NOT NULL,
	revenu VARCHAR(255),
	annee YEAR,
	/*url VARCHAR(255),*/
        lieu_confer VARCHAR(255),
        status VARCHAR(255),
        categorie VARCHAR(255)
);

CREATE TABLE auteur
(
	no_ss int NOT NULL PRIMARY KEY,
	nom VARCHAR(64) NOT NULL,
	prenom VARCHAR(64),
        groupe VARCHAR(255) 
);

CREATE TABLE ecrire
(
	id_p int NOT NULL,
	id_auteur int NOT NULL,
	CONSTRAINT pk_ecrire PRIMARY KEY(id_p,id_auteur)
);

CREATE TABLE affiliation
(
	no_aff int NOT NULL PRIMARY KEY,
	nom VARCHAR(255) NOT NULL
);

CREATE TABLE afficher
(
	id_p int NOT NULL,
	id_aff int NOT NULL,
	CONSTRAINT pk_afficher PRIMARY KEY(id_p,id_aff)
);

CREATE TABLE utlisation
(  
    username VARCHAR(64) NOT NULL PRIMARY KEY,
    pass VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    firstname VARCHAR(64) NOT NULL,
    lastname VARCHAR(64) NOT NULL
);