<?php

namespace App\Controller;

use App\Repository\InsectRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InsectController extends AbstractController
{
    #[Route('/insect', name: 'app_insect')]
    public function list(InsectRepository $insectRepository): Response
    {
        return $this->render('insect/list.html.twig', [
            'insect' => $insectRepository->findAll(),
        ]);
    }
}
