**Projet MiniBiblio**

Technologies choisies :

Backend : Laravel 

Frontend : React

Base de données : PostgreSQL

**Commandes pour installer le projet**

* Cloner le projet 

git clone https://github.com/Darko-05/MiniBiblio.git

* Entrer dans le dossier du projet

cd MiniBiblio

* Installer les dépendances du projet

composer install

* Créer la base et les tables de la base de données

php artisan migrate

* Génerer la clé

php artisan key:generate

* Demarrer le serveur

php artisan serve

**Choix technique**

```Objectif principal : Terminer le backend au minimum representant le socle de toute l'application quitte a laisser le frontend```

L'utilisation de PostgreSQL necessite de créer une base de données Postgres et de remplacer les données d'environnement dans le .env, étant donné un test technique de 2h, j'ai choisi d'utiliser sqlite pour developper rapidement en local, plus facile a tester

