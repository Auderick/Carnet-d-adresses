Création d’une application de visualisation d’une base de données de contact.

Entité : Contacts

Symfony console make:entity Contact.
nom (string), 255 caractères, non nullable.
prenom (string), 255 caractères, nullable.
telephone (string), 255 caractères, nullable.

Installation de fixture bundle:
composer require --dev orm-fixtures.

Installer Faker PHP
composer require fakerphp/faker


