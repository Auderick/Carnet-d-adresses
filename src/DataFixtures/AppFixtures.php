<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /* Création d'un tableau d'objets Contact */
        $contacts = [
            $this->createContact('Dupont', 'Jean', '0606060606'),
            $this->createContact('Durand', 'Paul', '0606060606'),
            $this->createContact('Toto', 'Chris', '0606060606'),
            $this->createContact('Titi', 'Rachel', '0606060606'),
        ];

        foreach ($contacts as $contact) {
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
