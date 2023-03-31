<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageStaticController extends AbstractController
{
    public function mentionsLegales(AppHelpers $app): Response
    {
        return $this->render('page_static/mentions.html.twig', [
            'bodyId' => $app->getBodyId('LEGAL_PAGE'),
        ]);
    }


    public function politiqueCookies(): Response
    {
        return $this->render('page_static/cookies.html.twig', [
            'bodyId' => $app->getBodyId('COOKIE_PAGE'),
        ]);
    }
}
