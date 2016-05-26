<<<<<<< HEAD
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

CREATE TABLE affication
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
=======
CREATE TABLE publication
(
	id_p int NOT NULL PRIMARY KEY,
	titre VARCHAR(255) NOT NULL,
        auteurs varchar(255),
        annee int,
        titre_conference varchar(255),
        lieu_conference varchar(255)
);

create table chercheur
(
    id_ch int not null primary key,
    nom_ch varchar(255),
    prenom_ch varchar(255),
    id_org int,
    foreign key (id_org) references organisation (id_org),
    id_eq int,
    foreign key (id_eq) references equipe (id_eq)
);

create table utilisateur 
(
    id_ut int not null primary key,
    nom_ut varchar(64)not null,
    prenom_ut varchar(64) not null,
    mail varchar(255),
    login varchar(255),
    pwd varchar(64)
 );

create table categorie
(
    id_cat int not null primary key,
    nom_cat varchar(255) not null,
    id_p int,
    foreign key (id_p) references publication  (id_p)
);

create table equipe
(
    id_eq int not null primary key,
    nom_equipe varchar(64),
    id_ch int,
    foreign key (id_ch) references chercheur (id_ch)
);

create table organisation
(
    id_org int not null primary key,
    nom_org varchar(64),
    id_ch int,
    foreign key (id_ch) references chercheur (id_ch)
)
>>>>>>> b226ee42bc26c5a1162aa29ed66535b57b2a4095
