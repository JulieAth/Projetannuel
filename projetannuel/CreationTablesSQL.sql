CREATE DATABASE Univoit;

CREATE TABLE Univoit.Utilisateur (
    idUtilisateur INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Mdp VARCHAR(20) NOT NULL,
    Prenom VARCHAR(100) NOT NULL,
    Nom VARCHAR(100) NOT NULL,
    Adresse VARCHAR(100) NOT NULL,
    Tel VARCHAR(10) NOT NULL,
    Mail VARCHAR(100) NOT NULL,
    Sexe VARCHAR(10) NOT NULL,
    Titre VARCHAR(100) NULL,
    NoteMoy FLOAT NULL,
    NbrTrajets INTEGER NULL,
    Points INTEGER NULL
);

CREATE TABLE Univoit.Vehicule (
    idvehicule INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INTEGER NOT NULL,
    Marque Varchar(20) NULL,
    Couleur Varchar(20) NULL,
    Modele Varchar(20) NULL,
    NbrPlaces INTEGER NULL,
    Foreign key(idUtilisateur) references Utilisateur(idUtilisateur)
);



CREATE TABLE Univoit.Trajet (
    idTrajet INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INTEGER NOT NULL,
    idVehicule INTEGER NOT NULL,
    PointArrivee INTEGER NOT NULL,
    PointDepart INTEGER NOT NULL,
    HeureDepart TIME NOT NULL,
    HeureArrivee TIME NOT NULL,
    PointsDonnes INTEGER NOT NULL,
    NbreBagage INTEGER NOT NULL,
    NbreBagageMax INTEGER NOT NULL,
    PrixPersonne INTEGER NOT NULL,
    DateDepart DATE NOT NULL,
    DateArrivee DATE NOT NULL,
    Foreign key (idUtilisateur) references Utilisateur(idUtilisateur),
    Foreign key (idVehicule) references Vehicule(idVehicule)
);

CREATE TABLE Univoit.Passager (
    idUtilisateur INTEGER NOT NULL,
    idTrajet INTEGER NOT NULL,
    Foreign key(idUtilisateur) references Utilisateur(idUtilisateur),
    Foreign key(idTrajet) references Trajet(idTrajet),
    PRIMARY KEY (idUtilisateur, idTrajet)
);

CREATE TABLE Univoit.Messagerie (
    idMessage INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idTrajet INTEGER NOT NULL,
    TexteMessage VARCHAR(200) NOT NULL,
    Statut VARCHAR(10) NOT NULL,
    DateMessageEnvoi DATE NOT NULL,
    DateMessageReçu DATE NOT NULL,
    HeureMessageEnvoi TIME NOT NULL,
    HeureMessageReçu TIME NOT NULL, 
    Foreign key(idTrajet) references Trajet(idTrajet)
);

CREATE TABLE Univoit.Avis (
    idAvis INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INTEGER NOT NULL,
    idTrajet INTEGER NOT NULL,
    TexteAvis Varchar(200)  NOT NULL,
    HeureAvis TIME  NOT NULL,
    Note INTEGER  NOT NULL, 
    DateAvis DATE  NOT NULL,
    Foreign key(idUtilisateur) references Utilisateur(idUtilisateur),
    Foreign key(idTrajet) references Trajet(idTrajet)
);

CREATE TABLE Univoit.Paiement (
    idPaiment INTEGER PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    idTrajet INTEGER NOT NULL,
    Foreign key(idTrajet) references Trajet(idTrajet)
);

