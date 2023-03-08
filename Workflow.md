Création du projet
composer create-project --prefer-dist laravel/laravel Maisonneuve2295325

Création du model
php artisan make:model Ville
php artisan make:model Etudiant

Création de la database dans phpmyadmin
create database TP1_Laravel

Migration
php artisan make:migration create_etudiants_table
php artisan make:migration create_villes_table

Ajout des informations des tables
Ajout de $table->unsignedBigInteger et $table->foreign dans la table étudiant

php artisan migrate (en premier pour villes puis etudiants)

### création de données villes

php artisan make:factory VilleFactory -m Ville
Après avoir inscrit les informations dans le fichier VilleFactory
php artisan tinker, puis Ville::factory()->times(15)->create();
J'ai eu une érreure Error Class "Ville" not found ,j'ai du changer de place "fakerphp/faker": "^1.9.1" pour le mettre dans le partie "require"
puis j'ai recommencer avec
php artisan tinker, puis Ville::factory()->times(15)->create();

### création de données etudiants

php artisan make:factory EtudiantFactory -m Etudiant
J'ai renseigner les informations pour le model etudiant puis,
php artisan tinker, puis Etudiant::factory()->times(100)->create();

### Création des controllers

php artisan make:controller EtudiantController
php artisan make:controller VilleController
