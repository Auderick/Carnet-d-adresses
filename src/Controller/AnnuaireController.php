<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnnuaireController extends AbstractController
{
    #[Route('/', name: 'app_annuaire')]
    public function index(ContactRepository $contactRepository): Response
    {
        /* On récupère les contacts depuis le repository */
        $contacts = $contactRepository->findAll();
        

        /* On passe le tableau de contacts à la vue */
        return $this->render('annuaire/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}
