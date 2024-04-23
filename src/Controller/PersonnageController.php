<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PersonnageController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    #[Route('/persos', name: 'personnages')]
    public function persos(): Response
    {
        return $this->render('personnage/persos.html.twig',[
            "pseudo" => "John",
            "age" => 25,
            "carac" => [
                "force" => 5,
                "agi" => 10,
                "intel" => 15,                
            ],
        ]);
    }
}