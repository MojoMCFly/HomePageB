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

     /**
     *@Route("/ug",name="ug")
     */
    public function kurz()
    {
        return $this->render('Kurz_Lang_Uebergroessen/klu.html.twig');
    }

    /**
     *@Route("/aenderung",name="aenderung")
     */
    public function aenderung()
    {
        return $this->render('aenderung/aenderung.html.twig');
    }

    /**
     *@Route("/stoffverkauf",name="stoffverkauf")
     */
    public function stoffverkauf()
    {
        return $this->render('stoffverkauf/stoff.html.twig');
    }

    /**
     *@Route("/cafe",name="cafe")
     */
    public function cafe()
    {
        return $this->render('cafe/cafe.html.twig');
    }

    /**
     *@Route("/restposten",name="restposten")
     */
    public function restpsoten()
    {
        return $this->render('restposten/restposten.html.twig');
    }

}