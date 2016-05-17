CREATE TABLE publication
(
	no_p int NOT NULL PRIMARY KEY,
	titre VARCHAR(255) NOT NULL,
        categorie VARCHAR(255),
	annee YEAR,
	url VARCHAR(255),
        lieu_conference VARCHAR(255),/*uniqm valable pour les conference */
        status VARCHAR(255),/*soumis, en révision,publié*/
        foreign key (no_r) references revue(no_r)
);

create table revue 
(
    no_r int not null primary key,
    nom_r varchar(255)
)

CREATE TABLE auteur
(
	no_ss int NOT NULL PRIMARY KEY,
	nom VARCHAR(64) NOT NULL,
	prenom VARCHAR(64),
        organisation VARCHAR(255)
);
    
CREATE TABLE ecrire
(
	id_p int NOT NULL,
	id_auteur int NOT NULL,
	CONSTRAINT pk_ecrire PRIMARY KEY(id_p,id_auteur)
);

CREATE TABLE affiliation/*equipe*/
(
	no_aff int NOT NULL PRIMARY KEY,
	nom_a VARCHAR(255) NOT NULL,
        foreign key (no_ss) refenrences auteur(no_ss)
       
);

CREATE TABLE afficher
(
	id_p int NOT NULL,
	id_aff int NOT NULL,
	CONSTRAINT pk_afficher PRIMARY KEY(id_p,id_aff)
);

CREATE TABLE utilisation
(  
    username VARCHAR(64) NOT NULL PRIMARY KEY,
    passwd VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    firstname VARCHAR(64) NOT NULL,
    lastname VARCHAR(64) NOT NULL
);