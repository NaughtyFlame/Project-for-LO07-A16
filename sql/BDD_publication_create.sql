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