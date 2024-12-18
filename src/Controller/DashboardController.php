<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\PdfGeneratorService;
use App\Entity\Evenement;
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    #[Route('/admin', name: 'app_dashboard')]
    public function test(): Response
    {
        return $this->render('dashboard/base.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    
}