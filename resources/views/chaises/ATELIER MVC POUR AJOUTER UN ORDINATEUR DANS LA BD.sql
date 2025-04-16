// AJOUTER UN ORIDINATEUR DANS LA BASE DE DONNEES (EN SUIVANT LE PATTERN MVC)

ETAPE 1 : CREER :
VIEW : AFFICHER LE FORMULAIRE D'AJOUT DE L'ORDINATEUR : create.blade.php

CONTROLLER : OrdinateurController qui contient les fonctions suivantes :
    create : pour afficher la page create.blade.php
    store : pour enregistrer les informations de l'ordinateur dans la base de données
commande cli pour le creer est : php artisan make:controller OrdinateurController

MODELE : Ordinateur  POUR FAIRE LES TRAITEMENTS LIE A LA BASE DE DONNEES (AJOUTER UN ORIDINATEUR DANS LA TABLE PRODUIT)
commande cli pour le creer est :
php artisan make:model Ordinateur -m
cette commande permet de creer 2 elements : le model et la migration
le model : Ordinateur
            on declarer quels sont les champs qu'on va saisi (les fillables)
la migration : create_ordinateur_table pour creer la table oridnateurs
    on ajoute deux champs : libelle etg prix

remarques :
1- on ajoute : -m pour la migration  (c'est le code qui creer la table dans la base de donnees)
2- pour lancer la migration qui cree la table (et la bd si elle n'existe pas , le nom de la db est dans le fichier .env) : php artisan migrate

ETAPE 2  :  le routage et les fonctions du controlleur
dans le fichier routes/web.php on ajoute la route le lien

nb : pour demarrer le serveur de test , on utilise la CLI : php artisan serve
