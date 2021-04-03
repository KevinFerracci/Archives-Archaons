<?php

namespace App\Controller;

use App\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function home(Request $request): Response
    {   
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('main/home.html.twig', [
            'pageTitle' => 'Archaons', 
            'search_form' => $searchForm->createView(), 
        ]);
    }
}
