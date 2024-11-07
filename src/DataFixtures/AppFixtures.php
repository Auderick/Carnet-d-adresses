<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /* On utilise Faker pour générer des données */
        $faker = \Faker\Factory::create('fr_FR');

        /* On crée 50 contacts */
        for ($i = 0; $i < 50; $i++) {
            $contact = $this->createContact(
                $faker->lastName(),
                $faker->firstName(),
                $faker->phoneNumber()
                );

            $manager->persist($contact);
        }

        $manager->flush();
    }

    private function createContact(string $nom, string $prenom, string $telephone): Contact
    {
        $contact = new Contact();
        $contact
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setTelephone($telephone);

        return $contact;
    }
}
