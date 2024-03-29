

CREATE TABLE Utilisateur(
    idUtilisateur INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Mdp VARCHAR(20) NOT NULL,
    Prenom VARCHAR(100) NOT NULL,
    Nom VARCHAR(100) NOT NULL,
    Adresse VARCHAR(100) NOT NULL,
    Tel VARCHAR(10) NOT NULL,
    Age INTEGER NOT NULL,
    Mail VARCHAR(100) NOT NULL,
    Sexe VARCHAR(10) NOT NULL,
    Titre VARCHAR(100) NULL,
    NoteMoy FLOAT NULL,
    NbrTrajets INTEGER NULL,
    Points INTEGER NULL
);

CREATE TABLE Vehicule(
    idvehicule INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INTEGER NOT NULL,
    Marque Varchar(20) NULL,
    Couleur Varchar(20) NULL,
    Modele Varchar(20) NULL,
    NbrPlaces INTEGER NULL,
    Foreign key(idUtilisateur) references Utilisateur(idUtilisateur)
);



CREATE TABLE Trajet(
    idTrajet INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INTEGER NOT NULL,
    idVehicule INTEGER NOT NULL,
    Pointdedepartlatitude INTEGER NOT NULL,
    Pointdedepartlongitude INTEGER NOT NULL,
    Pointdarriveelatitude INTEGER NOT NULL,
    Pointdarriveelongitude INTEGER NOT NULL,
    HeureDepart TIME NOT NULL,
    HeureArrivee TIME NOT NULL,
    PointsDonnes INTEGER NULL,
    NbreBagageMax INTEGER NOT NULL,
    PrixPersonne INTEGER NOT NULL,
    DateDepart DATE NOT NULL,
    DateArrivee DATE NOT NULL,
    Foreign key (idUtilisateur) references Utilisateur(idUtilisateur),
    Foreign key (idVehicule) references Vehicule(idVehicule)
);

CREATE TABLE Passager(
    idUtilisateur INTEGER NOT NULL,
    idTrajet INTEGER NOT NULL,
    Foreign key(idUtilisateur) references Utilisateur(idUtilisateur),
    Foreign key(idTrajet) references Trajet(idTrajet),
    PRIMARY KEY (idUtilisateur, idTrajet)
);

CREATE TABLE Messagerie(
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

CREATE TABLE Avis(
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

CREATE TABLE Paiement(
    idPaiment INTEGER PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    idTrajet INTEGER NOT NULL,
    Foreign key(idTrajet) references Trajet(idTrajet)
);

