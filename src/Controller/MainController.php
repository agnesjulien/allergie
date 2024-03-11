<?php

namespace App\Controller;

use App\Repository\InsectRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home_homepage')]
    public function home(InsectRepository $insectRepository): Response
    {

        return $this->render('home/homepage.html.twig', [
            'insect' => $insectRepository->findAll(),
        ]);
    }
}
