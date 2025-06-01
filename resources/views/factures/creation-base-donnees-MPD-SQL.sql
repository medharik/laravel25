-- le code SQL pour une base de donnees :
create database facturedb;

-- creation de la table client (sans cle etrangere)
create table client (
idclient int primary key auto_increment,
nom varchar(50),
prenom varchar(50)

)
-- creation de la table facture (avce  cle etrangere idclient
--  qui vient de la table client et represente son idclient)
create table facture (
numero_facture int primary key auto_increment,
date_facture  date,
idclient int ,
-- creation de la cle etrangere
foreign key (idclient) references
 client(idclient)

)
-- creation de la table produit (sans cle etrangere)
create table produit (
    idproduit int primary key auto_increment,
    libelle varchar(150) unique,
    prix float not null,
    qtestock int default 0,
    constraint ck_qtestock check (qtestock >=0)
)
-- creation de la table facture_produit (avec cle etrangere idfacture de la facture , et
-- idproduit de la table produit)
create table facture_produit (
numero_facture int ,
idproduit int,
quantite int not null default 1,
-- creation de la cle etrangere
constraint fk_facture foreign key(numero_facture)  references facture(numero_facture),
constraint fk_produit foreign key(idproduit) references produit(idproduit),
constraint pk_produit_facture primary key(numero_facture,idproduit)

)
