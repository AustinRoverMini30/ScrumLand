SET NAMES 'utf8';
DROP TABLE IF EXISTS ACTUALITE;
DROP TABLE IF EXISTS ELU;
DROP TABLE IF EXISTS BULLETIN;
DROP TABLE IF EXISTS MANIFESTATION;
DROP TABLE IF EXISTS SPORT;
DROP TABLE IF EXISTS ASSOCIATION;
DROP TABLE IF EXISTS TICKET;
DROP TABLE IF EXISTS CANTINE;
DROP TABLE IF EXISTS COMMERCE;
DROP TABLE IF EXISTS IMAGE;


CREATE TABLE ACTUALITE(
	id_actu INT PRIMARY KEY,
    nom_actu VARCHAR(500),
    path_act_img VARCHAR(500),
    desc_actu VARCHAR(500),
    date_actu DATE
);

CREATE TABLE ELU(
	id_elu INT PRIMARY KEY,
    nom_elu VARCHAR(500),
    pren_elu VARCHAR(500),
    path_elu_img VARCHAR(500),
    resp_elu VARCHAR(500)
);

CREATE TABLE BULLETIN(
	id_bul INT PRIMARY KEY,
    nom_bul VARCHAR(500),
    path_fichier_bul VARCHAR(500)
);

CREATE TABLE MANIFESTATION (
	id_manif INT PRIMARY KEY,
    nom_manif VARCHAR(500),
    path_manif_img VARCHAR(500),
    desc_manif VARCHAR(500), 
    date_manif DATE
);


CREATE TABLE SPORT (
	id_sport INT PRIMARY KEY,
    nom_tournoi VARCHAR(500),
    type_sport VARCHAR(500),
    desc_sport VARCHAR(500),
    date_sport VARCHAR(500)
);


CREATE TABLE ASSOCIATION (
	id_asso INT PRIMARY KEY,
    nom_asso VARCHAR(500),
    mail_asso VARCHAR(500),
    tel_asso VARCHAR(500),
    desc_asso VARCHAR(500)
);

CREATE TABLE CANTINE (
	id_can INT PRIMARY KEY,
    path_menu_can VARCHAR(500),
    date_can VARCHAR(500)
);

CREATE TABLE TICKET (
	id_tick INT PRIMARY KEY,
    nom_pers_tick VARCHAR(500),
    pren_pers_tick VARCHAR(500),
    id_can INT,
    FOREIGN KEY (id_can) REFERENCES CANTINE(id_can)
);


CREATE TABLE COMMERCE (
	id_com INT PRIMARY KEY,
    nom_com VARCHAR(500),
    desc_com VARCHAR(500),
    mail_com VARCHAR(500),
    tel_com VARCHAR(500),
    type_com VARCHAR(500)
);

CREATE TABLE IMAGE (
	id_img INT PRIMARY KEY,
    nom_img VARCHAR(500),
    path_img VARCHAR(500)
);






INSERT INTO ACTUALITE (id_actu, nom_actu, path_act_img, desc_actu, date_actu) 
VALUES (1,"Decouvrez la creperie de Scrumland", NULL, "Venez deguster les spécialité sucrée de notre ville dans l'une de nos meilleur creperie...", "2024-12-09");
INSERT INTO ACTUALITE (id_actu, nom_actu, path_act_img, desc_actu, date_actu) 
VALUES (2,"Tournoi de golf !", NULL, "Dans 10 jour aura lieu notre fameux tournoi de golf annuelle, venez nombreux...", "2024-12-11");
INSERT INTO ACTUALITE (id_actu, nom_actu, path_act_img, desc_actu, date_actu) 
VALUES (3,"70 ans deja !", NULL, "Demain nous fêterons les 70 ans d'existence de notre belle ville qu'est scrumland", "2024-10-19");
INSERT INTO ACTUALITE (id_actu, nom_actu, path_act_img, desc_actu, date_actu) 
VALUES (4,"Marché de noel", NULL, "Le marché de noel arrive la semaine prchaine, venez decouvrir les merveille des noël...", "2024-12-07");

INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (1,"Jean", "Dupont", "Assets/Images/Jean.jpeg", "Maire");
INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (2,"Luc", "Moreau", "Assets/Images/Luc.jpeg", "Ajoint à l'urbanisme");
INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (3,"Pierre", "Durand", "Assets/Images/Pierre.jpeg", "Adjoint à l'éducation");
INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (4,"Marie", "Martin", "Assets/Images/Marie.jpeg", "Secrétaire");
INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (5,"Claire", "Simon", "Assets/Images/Claire.jpeg", "Adjoint à l'environnement");
INSERT INTO ELU (id_elu ,nom_elu, pren_elu, path_elu_img, resp_elu) VALUES (6,"Sophie", "Lefevre", "Assets/Images/Sophie.jpeg", "Adjoints aux sports");


INSERT INTO BULLETIN (id_bul, nom_bul, path_fichier_bul) VALUES (1, "bulletin1", NULL);


INSERT INTO MANIFESTATION (id_manif, nom_manif, path_manif_img, desc_manif, date_manif) VALUES (1, "Evenement tous pour la patate", "Assets/Images/lac-plage.jpg", "Patate", "2083-02-30");


INSERT INTO SPORT (id_sport, nom_tournoi, type_sport, desc_sport, date_sport) VALUES (1, "Tournoi de golf", "Golf", "Ouais le golf", "2025-01-10");


INSERT INTO ASSOCIATION (id_asso, nom_asso, mail_asso, tel_asso, desc_asso) VALUES (1, "La confrerie de la patate", "cpatate@gmail.com", "0612121212", "Vive les patates");


INSERT INTO CANTINE (id_can, path_menu_can, date_can) VALUES (1, NULL, "2024-11-12");


INSERT INTO TICKET (id_tick, nom_pers_tick, pren_pers_tick, id_can) VALUES (1, "Michelle", "Johnshon", 1);


INSERT INTO COMMERCE (id_com, nom_com, desc_com, mail_com, tel_com, type_com) VALUES (1, "Commerce de patate", "Vendeur numéro 1 de scrumland", "ikeapatate@gmail.com", "0658485169", "Légume");


INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (1, "Le magnifique lac de scrumland", "Assets/Images/lac-plage.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (2, "Histoire du lac", "Assets/Images/lac-historique.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (3, "Laboratoire de recherche", "Assets/Images/laboratoire-guerre-froide.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (4, "Ville", "Assets/Images/technopole.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (5, "Vue des parcs solaires et écologiques", "Assets/Images/jardins-ecologiques.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (6, "Technopole ScrumLand", "Assets/Images/technopole.jpg");
INSERT INTO IMAGE (id_img, nom_img, path_img) VALUES (7, "La friterie connu de scrumaland", "Assets/Images/Frite_scrumland.png");