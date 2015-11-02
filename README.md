# Noblesceaux

Noblesceaux est une plate-forme d'entrainement à la langue française, qui prend la forme d'une aventure épique dont VOUS êtes le héros.

Plongez dans les arcanes de l'orthographe, de la sémantique et de la typographie ; entreprenez des quêtes toujours plus ardues et enrichissez votre grimoire de règles nouvellement maîtrisées !

## Objectifs et contraintes

## Installation

Le projet est développé sous Symfony. Une fois le dépôt clôné localement, assurez-vous d'avoir installé Composer globalement puis lancez la commande :

    composer install

Exécutez ensuite le fichier *chmod.sh* situé à la racine du site :

    chmod.sh

Ce fichier bash, dont le contenu est repris de la [documentation de Symfony](https://symfony.com/doc/current/book/installation.html#book-installation-permissions), règle le problème de permissions lié aux répertoires *app/cache* et *app/logs*.

Enfin, vous devez créer la base de données et sa structure à partir des entités :

    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force

## Ajouter un admnistrateur

Pour accéder à l'interface d'administration Sonata, vous devez au préalable ajouter un administrateur. Cela se fait au moyen de la commande suivante :

    php app/console fos:user:create --super <username> <email> <password>

Ajouter des *quêtes*, *règles* et *extraits* se fait directement sur phpMyAdmin, car l'interface d'administrationn'intègre pour le moment aucune fonction de CRUD.

## Contribuer au projet

Bon courage si vous souhaitez contribuer au projet ! Le schéma de la base de données est à revoir et les fichiers tiennent à peine debout.