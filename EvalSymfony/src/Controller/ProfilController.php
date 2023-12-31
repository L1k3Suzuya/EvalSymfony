<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        $info = ['lastname' => 'Breu', 'firstname' => ' Maxime', 'email' => 'Maxime@district.fr', 'birthdate' => '23/02/1996'];

        return $this->render('profil/index.html.twig', [
            'informations' => $info
        ]);
    }
}