<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Repository\MyClassRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(MyClassRepository $annonceRepo): Response
    {

        $annonces = $annonceRepo->findAll();
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'annonces' => $annonces,
        ]);
    }
}
