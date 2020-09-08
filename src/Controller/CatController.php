<?php

namespace App\Controller;

use App\Repository\CatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/cat", name="cat_")
 */
class CatController extends AbstractController
{
    /**
     * @Route("/{id}", name="detail", requirements={"id": "\d+"})
     */
    public function index($id, CatRepository $catRepo)
    {
        $cat = $catRepo->find($id);
        return $this->render('cat/detail.html.twig', ['cat' => $cat]);
    }
}
