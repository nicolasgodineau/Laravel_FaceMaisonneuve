# Mise en route

Pour la mise en route faire dans le terminal l'update des packages npm `npm update`
Puis lancer le serveur Laravel `php artisan serve`
Lancer dans le teminal la commande pour Vite `npm run dev`

Si la récupération du projet se fait dans le but de travailler:

-   Installer composer et npm `composer install` et `npm install`
-   Créer une base de donnée dans phpMyAdmin
-   Récupérer le fichier .env (si besoin de générér une app-key utiliser la commande `php artisan key:generate`)
-   Modifier le nom de la base de donnée dans le fichier .env (DB_DATABASE)
-   Faire la migration des tables, faire attention aux clées étrangères, si besoin de migrer un fichier spécifique, utiliser la commande
    `php artisan migrate --path=/database/migrations/fileName.php`
