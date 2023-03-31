<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   
    public function index(AppHelpers $app): Response
    {

        return $this->render('home/index.html.twig', [
            //'controller_name' => 'HomeController',
            'bodyId' => $app->getBodyId('HOME_PAGE'),
        ]);
    }
}
