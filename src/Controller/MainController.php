<?php

namespace App\Controller;

use App\Repository\CatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(CatRepository $catRepo)
    {
        $cats =$catRepo->findBy(['isSold' => false]);
        return $this->render('main/home.html.twig', ['cats' => $cats]);
    }
}
