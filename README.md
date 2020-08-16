# Quiz_Symfony_SO-BUZZ  
  
Etapes pour tester le projet:  
  
Récupérer le projet sur github.  
Ouvrir le terminal et taper la commande suivante pour rentrer dans le repertoire du projet:  
    * cd chemin du projet/  
Installer les dependances via la commande:  
    * composer install  
Taper les commandes suivantes afin de créer une base de données:  
    * ./bin/console doctrine:database:create  
    * .bin/console doctrine:migrations:diff  
    * .bin/console doctrine:migrations:migrate  
Importer le fichier "./question.sql" dans la base de données.  
Aller à la ligne 32 dans le fichier .env à la racine et modifier les paramètres "db_user", "db_password" et "db_name" pour se connecter à la base de données:  
    * DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name  
Aller à l'URL "http://localhost/web/Symfony/Quiz_SO-BUZZ/public/index.php/question" dans le navigateur web. Si le nom du projet est modifié, remplacer "Quiz_SO-BUZZ" avec le nouveau nom  
