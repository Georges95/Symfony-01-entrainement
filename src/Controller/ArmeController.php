<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArmeController extends AbstractController
{
    #[Route('/armes', name: 'armes')]
    public function index(): Response
    {
        Arme::creerArme();
        return $this->render('arme/armes.html.twig', [
            'armes' => Arme::$armes,
        ]);
    }

    
    #[Route('/armes/{nom}', name: 'afficher_arme')]
    public function arme($nom): Response
    {
        Arme::creerArme();
        $arme = Arme::getArmeParNom($nom);
        return $this->render('arme/arme.html.twig', [
            'arme' => $arme,
            ]);
    }
}