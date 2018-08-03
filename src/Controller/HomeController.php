<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     */
    public function showIndex()
    {
        return $this->render('home/home.html.twig');
    }
}